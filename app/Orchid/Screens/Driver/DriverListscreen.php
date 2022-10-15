<?php

namespace App\Orchid\Screens\Driver;

use App\Models\Back\Driver;
use App\Orchid\Layouts\Driver\DriverListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DriverListscreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'drivers'=>Driver::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Driver';
    }

    public function description(): ?string
    {
        return 'All drivers';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create Driver')
            ->icon('pencil')
            ->route('platform.driver.edit'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
           DriverListLayout::class
        ];
    }

    public function remove(Driver $driver)
    {
        $driver->delete();

        Alert::info('Driver was deleted success !!!');
        return redirect()->route('platform.driver.list');
    }
}
