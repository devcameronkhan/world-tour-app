<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $guarded;

    protected $casts = [
        'departure_time'=>'datetime',
        'arrival_time'=>'datetime',
    ];

    /*
    |----------------------------
    |         Relations
    |----------------------------
    */

    public function departure_airport()
    {
        return $this->hasOne(Airport::class, 'id', 'departure_airport_id');
    }
    public function arrival_airport()
    {
        return $this->hasOne(Airport::class, 'id', 'arrival_airport_id');
    }
    public function getAirportById($id)
    {
        return Airport::where('id',$id)->first();
    }
    public function airline()
    {
        return $this->hasOne(Airline::class, 'id', 'airline_id');
    }

    /*
    |-----------------------------
    |        End Relations
    |-----------------------------
    */


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($flight) {
            $flight->number = static::generateFlightNumber();
        });
    }

    protected static function generateFlightNumber()
    {
        // Get the maximum flight number from the database
        $maxFlightNumber = static::max('number');

        // Increment the maximum flight number by 1
        $nextFlightNumber = $maxFlightNumber + 1;

        // Return the next flight number
        return $nextFlightNumber;
    }

    public function setNumberAttribute($value)
    {
        // Prevent updating the flight number attribute
        // This method ensures the flight number remains immutable
        if ($this->exists) {
            return;
        }

        $this->attributes['number'] = $value;
    }

    
}
