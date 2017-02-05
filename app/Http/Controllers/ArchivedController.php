<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArchivedController extends Controller
{
    //Archived bookings
    public function archived(){
        return View('viewBookings.archived');
    }

}
