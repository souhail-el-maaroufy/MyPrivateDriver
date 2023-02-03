<?php

namespace App\Orchid\Layouts\Car;

use App\Models\Back\Car;
use App\Models\Back\Category;
use App\Models\Back\Driver;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CarListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'cars';
    

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('name','name')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                return Link::make($car->name)
                ->route('platform.car.edit',$car);
            }),

            TD::make('code','Code')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                return Link::make($car->code)
                ->route('platform.car.edit',$car);
            }),

            TD::make('personne','Personne')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                return Link::make($car->personne)
                ->route('platform.car.edit',$car);
            }),

            TD::make('bags','Bags')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                return Link::make($car->bags)
                ->route('platform.car.edit',$car);
            }),

            TD::make('category_id','Category')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
               $categories=Category::all();
               foreach($categories as $category){
               if($car->category_id==$category->id){
                return Link::make($category->name)
                ->route('platform.car.edit',$car);
               }
               }
            }),

            TD::make('driver_id','Driver')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                $divers=Driver::all();
                foreach($divers as $driver){
                  if($car->driver_id === $driver->id){
                      return Link::make($driver->full_name)
                      ->route('platform.car.edit',$car);
                  }
                }
            }),

            TD::make('price_min','Price')->align(TD::ALIGN_CENTER)
            ->sort()
            ->render(function(Car $car){
                return Link::make('$ ' . number_format($car->price_min, 2))
                ->route('platform.car.edit',$car);
            }),

            TD::make('Action')
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function(Car $car){
              return  DropDown::make()
                ->icon('options-vertical')
                ->list([
                    Link::make('Edit')
                    ->icon('pencil')
                    ->route('platform.car.edit',$car),

                    Link::make('show')
                    ->icon('eye')
                    ->route('platform.car.show',$car),

                    Button::make('remove')
                    ->icon('trash')
                    ->confirm(__('are you sure you want to deleted this car !!'))
                                ->method('remove', [
                                    'id' => $car->id,
                                ]),
                   
                ]);
              
            })
        ];
      
    }
}
