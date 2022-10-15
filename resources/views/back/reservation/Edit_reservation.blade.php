@extends('platform::dashboard')

@section('title', 'Reservation')
@section('description', 'Reservation Edit')

@section('navbar')
    <div class="text-center">
        <a href="{{ route('platform.reservation.list') }}">Back</a>
    </div>
@stop

@section('content')
    <div class="my-5 py-5 bg-white">
        <h2 class="text-center"> Edit Reservation</h2>
        <div class="row m-3">
            <div class="col m-3 py-2 border-bottom border-primary border-1">
                <label class="fs-5">Full name : </label><span class="fs-5"> {{ $reservation->full_name }}</span>
            </div>
            <div class="col m-3 py-2 border-bottom border-primary border-1">
                <label class="fs-5">Number Place : </label><span class="fs-5"> {{ $reservation->nb_place }}</span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col m-3 py-2 border-bottom border-primary border-1">
                <label class="fs-5">Number Phone : </label><span class="fs-5"> {{ $reservation->phone }}</span>
            </div>
            <div class="col m-3 py-2 border-bottom border-primary border-1">
                <label class="fs-5">Email : </label><span class="fs-5"> {{ $reservation->email }}</span>
            </div>
        </div>
        @foreach ($reservation_details as $item)
            <div class="row m-3">
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Type : </label><span class="fs-5"> {{ $item->type }}</span>
                </div>
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Depart : </label><span class="fs-5"> {{ $item->depart }}</span>
                </div>
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Destination : </label><span class="fs-5"> {{ $item->destination }}</span>
                </div>
            </div>

            <div class="row m-3">
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Created_at : </label><span class="fs-5"> {{ $reservation->created_at }}</span>
                </div>
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Date reservation : </label><span class="fs-5">
                        {{ $item->date_reservation }}</span>
                </div>
                <div class="col m-3 py-2 border-bottom border-primary border-1">
                    <label class="fs-5">Time reservation : </label><span class="fs-5">
                        {{ $item->hours . ' h ' . $item->minutes . ' min' }}</span>
                </div>
            </div>
        @endforeach
        <div class="row m-4">
            <div class="col m-3 py-2 border-bottom border-primary border-1">
                <label class="fs-5">Details : </label><br>
                <span class="fs-5">{{ $reservation->details . ' fghfdhghfhgfhdfsdsgsgfdgfhgjhkghkjhkdfggdsdfsfdsfeer' }}</span>
            </div>
        </div>
        <div class="row m-4">
            <form action="{{ route('platform.reservation.confirmation',$reservation->id) }}" method="post">
                @csrf
                <div class="col  m-3 py-2">
                    <label class="fs-5">Status : </label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        @foreach ($reservation_status as $status)
                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col m-3 py-2 float-end">
                    <button class="btn btn-dark">save</button>
                </div>
            </form>
        </div>

    </div>

@stop
