<?php

namespace App\Models\Back;

use App\Models\Front\Reservation_Details;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;

class Car extends Model
{
    use  AsSource, Attachable ,Filterable;

    protected $fillable = [
        'image',
        'name',
        'code',
        'personne',
        'bags',
        'price_min',
        'price_day',
        'price_half',
        'price_km',
        'price_airport',
        'hour_rate',
        'available',
        'driver_id',
        'category_id'
    ];

    protected $allowedSorts = [
        'name',
        'code',
        'personne',
        'bags',
        'price_min',
        'created_at',
        'updated_at'
    ];

    /**
     * Get all of the comments for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation_details()
    {
        return $this->hasMany(Reservation_Details::class,'car_model','id');
    }
}
