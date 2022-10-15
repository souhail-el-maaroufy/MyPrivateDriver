<?php

namespace App\Orchid\Screens\Car;

use App\Models\Back\Car;
use App\Orchid\Layouts\Car\CarListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class CarListScren extends Screen
{
    public $category;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Car $car): iterable
    {
        $car->load('attachment');
        return [
            'cars' => Car::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'List cars';
    }

    public function description(): ?string
    {
        return 'All cars';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

            Link::make('Create Car')
                ->icon('pencil')
                ->route('platform.car.edit')
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
            CarListLayout::class
        ];
    }

    public function remove(Car $car)
    {
        $car->delete();

        Alert::info('You have successfully deleted the car.');

        return redirect()->route('platform.car.list');
    }
}
