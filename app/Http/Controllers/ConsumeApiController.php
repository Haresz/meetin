<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsumeApiController extends Controller
{
    function getDataBooking(){
        $bookingData = Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('list', ['bookingData'=>$bookingData]);
    }
}
