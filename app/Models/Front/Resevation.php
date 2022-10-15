<?php

namespace App\Models\Front;

use App\Enum\ReservationSelect;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Resevation extends Model
{
    use HasFactory ,AsSource;
    protected $fillable=[
        'full_name',
        'email',
        'adress',
        'phone',
        'details',
        'nb_place',
        'reservation_d',
        'status'
    ];

    // protected $allowedSorts = [
    //     'reservation_d',
    //     'created_at',
    //     'updated_at'
    // ];

    protected $casts = [
        'status' => ReservationSelect::class,
    ];

    /**
     * Get the reservation_details that owns the Resevation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation_details()
    {
        return $this->belongsTo(Reservation_Details::class,'reservation_d','id');
    }

}
