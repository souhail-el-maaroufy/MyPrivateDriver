<?php

namespace App\Orchid\Screens\reservation;

use App\Models\Front\Resevation;
use App\Orchid\Layouts\reservation\reservartionListLayout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class reservartionListScreen extends Screen
{
    public $reservation;
    /**
     * Query data.
     *
     * @return array
     */
    public function query( ): iterable
    {
        return [
            'reservations'=>Resevation::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'List reservation ';
    }
    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
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
            reservartionListLayout::class
        ];
    }

    public function remove(Resevation $reservation)
    {
        $reservation->delete();

        Alert::info('You have successfully deleted the car.');

        return redirect()->route('platform.reservation.list');
    }
}
