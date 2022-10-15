<?php

namespace App\Orchid\Screens\Car;

use App\Models\Back\Car;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

use function Termwind\render;

class CarShowscreen extends Screen
{
    public $car;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Car $car): iterable
    {
        return [
            'car'=>$car
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Car Deitls';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Back list car')
            ->incom('home')
            ->route('platform.car.list')
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
            Layout::legend('car', [
                Sight::make('id')->popover('Identifier, a symbol which uniquely identifies an object or record'),
                Sight::make('name'),
                Sight::make('code'),
                Sight::make('personne'),
                Sight::make('bags'),
                Sight::make('price_min',' Price min')
                ->render(function(Car $car){
                    return '$ ' .number_format($car->price_min,2);
                }),
                Sight::make('price_min',' Price day')
                ->render(function(Car $car){
                    return '$ ' .number_format($car->price_day,2);
                }),
                Sight::make('created_at', 'Created'),
                Sight::make('updated_at', 'Updated')
            //     Sight::make('Action')->render(function () {
            //         return Button::make('Show toast')
            //             ->type(Color::DEFAULT())
            //             ->method('showToast');
            //     }),
            ])->title('Car'),
        ];
    }
}
