<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Driver extends Model
{
    use AsSource , Filterable;

    protected $fillable=[
        'full_name',
        'phone',
        'adress',
        'salary'
    ];

    protected $allowedSorts = [
        'id',
        'full_name',
        'salary'
    ];
}
