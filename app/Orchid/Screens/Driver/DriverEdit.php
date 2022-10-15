<?php

namespace App\Orchid\Screens\Driver;

use App\Models\Back\Driver;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class DriverEdit extends Screen
{

    public $driver;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Driver $driver): iterable
    {
        return [
            'driver'=>$driver
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
        return " create or edit ";
    }
    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('save')
            ->method('CreateDriver')
             ->icon('check')
            ->canSee(!$this->driver->exists),

            Button::make('save')
            ->method('UpdateDriver')
             ->icon('check')
            ->canSee($this->driver->exists),

            Button::make('remove')
            ->method('remove')
            ->confirm('are you sure you want to deleted this driver !!')
            ->icon('trash')
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
            Layout::rows([
              Group::make([

                Input::make('driver.full_name')
                ->title('Full name')
                ->required()
                ->placeholder('Entre Full name'),

                Input::make('driver.phone')
                ->type('number')
                ->title('Phone')
                ->required()
                ->placeholder('Entre your phone number '),
              ]),

               Group::make([
                TextArea::make('driver.adress')
                ->rows(5)
                ->title('Adress')
                ->placeholder('Entre your adress')
               ])

            ])
        ];
    }

    public function CreateDriver(Driver $driver,Request $request)
    {
        $driver->fill($request->get('driver'))->save();
        Alert::info('You have successfully created a driver.');

        return redirect()->route('platform.driver.list');

    }

    public function UpdateDriver(Driver $driver,Request $request)
    {
        $driver->fill($request->get('driver'))->save();
        Alert::info('You have successfully updated a driver.');

        return redirect()->route('platform.driver.list');

    }

    public function remove(Driver $driver)
    {
        $driver->delete();
        
        Alert::info('Driver deleted was success !!!');      
        return redirect()->route('platform.driver.list');
    }
}
