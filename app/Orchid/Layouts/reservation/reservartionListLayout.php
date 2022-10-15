<?php

namespace App\Orchid\Layouts\reservation;

use App\Models\Front\Reservation_Details;
use App\Models\Front\Resevation;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class reservartionListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'reservations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('full_name', 'Full name')->align(TD::ALIGN_CENTER),
            TD::make('phone', 'Phone')->align(TD::ALIGN_CENTER),
            TD::make('email', 'Email')->align(TD::ALIGN_CENTER),
            TD::make('reservation_d', 'Depart')->align(TD::ALIGN_CENTER)
                ->render(function (Resevation $reservation) {

                    $reservation_details = Reservation_Details::all();
                    foreach ($reservation_details as $reservation_d) {
                        if ($reservation_d->id == $reservation->reservation_d) {
                            return Link::make($reservation_d->depart);
                        }
                    }
                }),

            TD::make('reservation_d', 'Destination')->align(TD::ALIGN_CENTER)
                ->render(function (Resevation $reservation) {

                    $reservation_details = Reservation_Details::all();
                    foreach ($reservation_details as $reservation_d) {
                        if ($reservation_d->id == $reservation->reservation_d) {
                            return Link::make($reservation_d->destination);
                        }
                    }
                }),

            TD::make('reservation_d', 'Type')->align(TD::ALIGN_CENTER)
                ->render(function (Resevation $reservation) {

                    $reservation_details = Reservation_Details::all();
                    foreach ($reservation_details as $reservation_d) {
                        if ($reservation_d->id == $reservation->reservation_d) {
                            return Link::make($reservation_d->type);
                        }
                    }
                }),

            TD::make('reservation_d', 'Date reservation')->align(TD::ALIGN_CENTER)
                ->render(function (Resevation $reservation) {

                    $reservation_details = Reservation_Details::all();
                    foreach ($reservation_details as $reservation_d) {
                        if ($reservation_d->id == $reservation->reservation_d) {
                            return Link::make($reservation_d->date_reservation);
                        }
                    }
                }),

            TD::make('reservation_d', 'Time reservation')->align(TD::ALIGN_CENTER)
                ->render(function (Resevation $reservation) {

                    $reservation_details = Reservation_Details::all();
                    foreach ($reservation_details as $reservation_d) {
                        if ($reservation_d->id == $reservation->reservation_d) {
                            return Link::make($reservation_d->hours . ' h ' . $reservation_d->minutes . ' min');
                        }
                    }
                }),

            // TD::make('reservation_d', 'Price reservation')->align(TD::ALIGN_CENTER)
            // ->render(function (Resevation $reservation) {

            //     $reservation_details = Reservation_Details::all();
            //     foreach ($reservation_details as $reservation_d) {
            //         if ($reservation_d->id == $reservation->reservation_d) {
            //             return Link::make(number_format($reservation_d->data->estimated_price,2));
            //         }
            //     }
            // }),
            TD::make('nb_place', 'Nmb place')->align(TD::ALIGN_CENTER),
            TD::make('status', 'Status')->align(TD::ALIGN_CENTER),
            TD::make('Action')
                ->render(function (Resevation $reservation) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make('confirmation')
                            ->icon('pencil')
                            ->route('platform.reservation.edit',$reservation->id),

                            Link::make('show_details')
                                ->icon('eye')
                                ->route('platform.reservation.show', $reservation->reservation_d),

                            Button::make('remove')
                                ->icon('trash')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->method('remove', [
                                    'id' => $reservation->id,
                                ]),

                        ]);
                })
        ];
    }
}
