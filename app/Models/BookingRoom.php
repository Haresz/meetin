<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_name', 
        'departement', 
        'loan_date', 
        'necessity', 
        'room_name', 
        'time_start', 
        'time_end', 
        'number_of_people', 
        'information'
    ];
    protected $table = 'booking_room';
}
