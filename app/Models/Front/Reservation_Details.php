<?php

namespace App\Models\Front;

use App\Models\Back\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_Details extends Model
{
    use HasFactory;
    protected $fillable=[
        'depart_latlng',
        'destination_latlng',
        'type',
        'is_airport',
        'date_reservation',
        'hours',
        'minutes',
        'car_model',
        'depart',
        'destination',
        'estimated_cars',
        'estimated_days',
        'estimated_persons',
        'data'
    ];

    /**
     * Get the cars that owns the Reservation_Details
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cars()
    {
        return $this->belongsTo(Car::class,'car_model','id');
    }

    /**
     * Get all of the resevations for the Reservation_Details
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(Resevation::class,'reservation_d','id');
    }
}
