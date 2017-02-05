<?php

namespace App\Http\Controllers;

use App\Damage;
use App\Booking;
use App\Customer;
use App\Car;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CarsController extends Controller
{
    /** The constructor has code to restrict access to users that are logged in */
    public function __construct(){
        $this->middleware('auth');
    }


   // Display cars
	public function cars(){

        $c = Car::orderBy('created_at', 'asc')->get()->where('retired', '=', 'no');

        return View('viewCars.cars', ['cars' => $c]);
    }

    public function addCarForm(Request $request){
        return view ('viewCars.carAddForm');
    }

    //addCar
    public function addCar(Request $request){

         $rules =   $this->validate($request, [
                    'rego_no' => 'required|alpha_num|min:2|unique:cars', 
                    'type' => 'required|alpha|min:3', 
                    'color' => 'required|alpha|min:3', 
                    'transmission' => 'required|alpha|min:4',
                    'model_year' => 'required|integer|digits:4',
                    'suburb_loc' => 'required|min:1|regex:/^[(a-zA-Z\s)]+$/u', //letters and spaces
                    'description_loc' => 'required',
                    'rate_day' => 'required|numeric',
                ]);
   
 

         $c = new Car;
         $c->rego_no = $request->rego_no;
         $c->type = $request->type;
         $c->color = $request->color;
         $c->transmission = $request->transmission;
         $c->model_year = $request->model_year;
         $c->suburb_loc = $request->suburb_loc;
         $c->description_loc = $request->description_loc;
         $c->rate_day = $request->rate_day;
         $c->status = 'OK'; //----------------------------no damage by bookings when is created
         $c->retired ='no'; //----------------------------by default is not a retired car
       
         $c->save();

         return redirect('/cars');

    }

    //Add Damage
    public function addDamage(){
        return View('viewCars.addDamage');
    }

    //Damage
    public function damaged(){
        $dam = Damage::orderBy('created_at', 'asc')->get();
        return View('viewCars.damaged', ['damages' => $dam]);
    }

    //----------------------------------------------------------------------------
    //  display form Damaged cars by A CUST------from button click bookings---------1---
    public function displayFormD(Request $request){
        return view ('viewCars.formReportD');
    }

    //send cust_id for the report -> click button---------2
    public function searchFormD(Request $request){

        $rules =   $this->validate($request, [
                    'cust_id' => 'required',
                ]);

        $joinT = DB::table('bookings')//------------------------------------NEEDS TO USE DB KEY WORK!!!!!!!!!!!!!
            ->join('damages','bookings.booking_id', '=', 'damages.booking_id')
           // ->join('customers','bookings.cust_id', '=', 'customers.cust_id')
            ->select('bookings.cust_id', 'damages.damage_id', 'damages.car_id',
                    'bookings.booking_id', 'damages.description', 'damages.fixed_date')
            ->where('bookings.cust_id', '=', $request->cust_id)
            ->get();

        //$amount = count( $joinT);
        //return $joinT;
        return view ('viewCars.reportD', ['joinT' => $joinT]);
    }

      //retired cars form 
    public function desactiveForm(Car $car){
      
      return view ('viewCars.retireCar')->with('car',$car);
    }

    //submit retired car
    public function desactivation(Request $request){

        $r = Car::find($request->car_id);
        $r->retired = 'yes';
        $r->save();

        return redirect('/cars');
    }

     //set rate form edit
    public function rateForm(Car $car){
    
      return view ('viewCars.rateForm')->with('car',$car);
    }

    //submit rate day
    public function setRate(Request $request){

        $rules =   $this->validate($request, [
                    'rate_day' => 'required|numeric',
                ]);

        $s = Car::find($request->car_id);
        $s->rate_day = $request->rate_day;
        $s->save();

        return redirect('/cars');
    }

    //  display form search faults by Rego no----------------------------------------1---
    public function displayFormF(Request $request){
        return view ('viewCars.faultReport');
    }

    //send rego_no for the report -> click button---------2
    public function searchFormF(Request $request){


        $rules =   $this->validate($request, [
                    'rego_no' => 'required',
                ]);

        $joinT = DB::table('cars')//------------------------------------NEEDS TO USE DB KEY WORK!!!!!!!!!!!!!
            ->join('carfaults','cars.car_id', '=', 'carfaults.car_id')
            ->join('faults','carfaults.fault_id', '=', 'faults.fault_id')
            ->select('cars.rego_no', 'faults.fault_id', 'faults.description', 'carfaults.fixed_date')
                    
            ->where('cars.rego_no', '=', $request->rego_no)
            ->get();

        //$amount = count( $joinT);
        //return $joinT;
        return view ('viewCars.reportF', ['joinT' => $joinT]);
    }
}
