<?php

namespace App\Models;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use AsSource;
    
    protected $fillable=[
        'title',
        'commercial_name',
        'description',
        'color',
        'active',
        'price'
    ];
}
