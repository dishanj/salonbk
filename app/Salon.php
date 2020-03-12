<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [
        'salonName','salonEmail', 'salonPhone', 'salonAddress','salonLogo','is_activeSalon',
    ];
}
