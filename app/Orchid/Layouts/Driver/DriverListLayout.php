<?php

namespace App\Orchid\Layouts\Driver;

use App\Models\Back\Driver;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;

class DriverListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'drivers';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id','Id')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Driver $driver){
                return Link::make($driver->id)
                ->route('platform.driver.edit',$driver);
            }),
           
            TD::make('full_name','Full name')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Driver $driver){
                return Link::make($driver->full_name)
                ->route('platform.driver.edit',$driver);
            }),

            TD::make('phone','Phone')->align(TD::ALIGN_CENTER)
            ->render(function(Driver $driver){
                return Link::make($driver->phone)
                ->route('platform.driver.edit',$driver);
            }),

            TD::make('adress','Adress')->align(TD::ALIGN_CENTER)
            ->render(function(Driver $driver){
                return Link::make($driver->adress)
                ->route('platform.driver.edit',$driver);
            }),

            TD::make('salary','Salary')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Driver $driver){
                return Link::make('$ ' . number_format($driver->salary, 2))
                ->route('platform.driver.edit',$driver);
            }),

            TD::make('Action')
            ->render(function(Driver $driver){
                return DropDown::make() 
                ->icon('options-vertical')
                ->list([
                    Link::make('edit')
                    ->icon('pencil')
                    ->route('platform.driver.edit',$driver),

                    Button::make('remove')
                    ->icon('trash')
                    ->confirm('are you sure you want to deleted this driver !!')
                    ->method('remove', [
                        'id' => $driver->id,
                    ]),
                ]);
            })
        ];
    }

}
