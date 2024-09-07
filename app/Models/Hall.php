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
        'description',
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

    public function images()
    {
        return $this->hasMany(HallImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function location()
    {
        return $this->belongsTo(HallLocation::class);
    }

}
