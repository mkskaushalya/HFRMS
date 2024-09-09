<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Hall extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'hall_number',
        'description',
        'hall_location_id',
        'capacity',
        'price',
        'status',
        'image',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hallImages()
    {
        return $this->hasMany(HallImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function hallLocation()
    {
        return $this->belongsTo(HallLocation::class);
    }

    public function bookings()
    {
        return $this->hasMany(HallBooking::class);
    }


}
