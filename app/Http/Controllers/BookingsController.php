<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Car;
use App\Customer;
use App\Damage;
use App\Archive;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class BookingsController extends Controller
{
    /** The constructor has code to restrict access to users that are logged in */
    public function __construct(){
        $this->middleware('auth');
    }

    //Display bookings
    public function bookings(){
      $boo = Booking::orderBy('created_at', 'asc')->get();
      return View('viewBookings.bookings', ['bookings' => $boo]);
    }

     //Display archived bookings
    public function archived(){
     $archives = Archive::orderBy('created_at', 'asc')->get();

     return View('viewBookings.archived', ['archives' => $archives]);

    }

    //---------------------------------------------------------------------1-----  
    public function displayArchForm(Request $request){
        return view ('viewBookings.archiveForm');
    }

    //  display form to set date for archiving bookings-------------------2----
    // public function archiveForm(Request $request){

    //      $rules =   $this->validate($request, [
    //                 'the_date' => 'required|date',
    //             ]);

    //     //$time = $request->the_date; //imput date from user

    //      //query select booking before input date
    //      $bookings = DB::table('bookings')
    //                 ->select('bookings.*')
    //                 ->where('bookings.return_date', '<', $request->the_date)
    //                 ->get();
         
    //      $amount = count($bookings);

    //     return view ('viewBookings.archiveConfirm')->with('bookings', $bookings);
    // }

     public function archiveForm(Request $request){

         $rules =   $this->validate($request, [
                    'the_date' => 'required|date',
                ]);


         //query select booking before input date

          $bookings = DB::table('bookings')
                    ->select('bookings.*')
                    ->where('bookings.return_date', '<', $request->the_date)
                    ->get()
                    ->toArray();

       
        $items = array();
        
        foreach($bookings as $boo) {

             $items[] = $boo;
             
             $arch = new Archive;
             $arch->booking_id = $boo->booking_id;
             $arch->cust_id = $boo->cust_id;
             $arch->car_id = $boo->car_id;
             $arch->pick_date = $boo->pick_date;
             $arch->return_date = $boo->return_date;
             $arch->returned_date = $boo->returned_date;
             $arch->save();
        }

        // $items = array();
        // foreach($bookings as $boo) {
        //  $items[] = $boo;
        // }
        //print_r($items);

        DB::table('bookings')
                    ->select('bookings.*')
                    ->where('bookings.return_date', '<', $request->the_date)
                    ->delete();

        return redirect('/archived');
    }


    //  Archive bookings when return date is < input---------------------3-------
    //public function toArchive(Booking $booking )

 

        //return $data;//redirect('/archived');
   // }
    //----------------------------------------------------------------------------
    //  display form BOOKINGS OF A CUST------from button click bookings---------1---
    public function displayFormB(Request $request){
        return view ('viewBookings.formReportB');
    }

    //send cust_id for the report -> click button---------2
    public function searchFormB(Request $request){

        $rules =   $this->validate($request, [
                    'cust_id' => 'required',
                ]);

        $bookings = Booking::all()->where('cust_id', '=', $request->cust_id);
//        $amount = count( $bookings);
        return View('viewBookings.reportB')->with('bookings', $bookings);
    }

   
    //----------------------------------------------------------------------------
    // form to set damage by a bookings
    public function setDamageForm(Booking $booking){
        
        //print in form booking id, and car id
        return view ('viewCars.damageAddForm')->with('booking',$booking);
    }


    //---------------------------------------------------------------------------
    // Submit damage by a bookings
     public function setDamage(Request $request){

        //changing status in car table = damaged
        $carStatus =Car::find($request->car_id);
        $carStatus->status = 'Damaged';
        $carStatus->save();


        //validation rules
        $rules =   $this->validate($request, [ 
                    'description' => 'required', 
                    'fixed_date' => 'date',
                ]);

        //new row in damages table
        $d = new Damage;
        $d->booking_id = $request->booking_id;
        $d->car_id = $request->car_id;
        $d->description = $request->description;
        $d->fixed_date = $request->fixed_date;
        
        $d->save();

        return redirect('/damaged');
     }
}


