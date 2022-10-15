<?php

namespace App\Orchid\Screens\reservation;

use App\Models\Back\Reservation;
use App\Orchid\Layouts\reservation\ReservationshowRow;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class ShowReservation extends Screen
{
    public $reservation;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Reservation $reservation): iterable
    {
        return [
            'reservation'=>$reservation
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Show Reservation';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::legend('reservation', [
                Sight::make('id')->popover('Identifier, a symbol which uniquely identifies an object or record'),
                Sight::make('full_name'),
                Sight::make('email'),
                Sight::make('phone'),
                Sight::make('depart'),
                Sight::make('destination'),
                Sight::make('nmb_place'),
                Sight::make('price')->render(function(Reservation $reservation){
                    return Link::make('$'.number_format($reservation->price,2));
                }),
                Sight::make('status'),
            //     Sight::make('Action')->render(function () {
            //         return Button::make('Show toast')
            //             ->type(Color::DEFAULT())
            //             ->method('showToast');
            //     }),
            ])->title('Reservation'),
        ];
    }
}
