<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallLocation extends Model
{
    use HasFactory;

    public function hall()
    {
        return $this->hasMany(Hall::class);
    }
}
