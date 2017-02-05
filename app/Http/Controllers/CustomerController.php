<?php

namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests;

class CustomerController extends Controller
{
    /** The constructor has code to restrict access to users that are logged in */
    public function __construct(){
        $this->middleware('auth');
    }


    //display customers
    public function customers(){
        $c = Customer::orderBy('created_at', 'asc')->get()->where('active', '=', 'yes');

        return View('viewCustomers.customers', ['customers' => $c]);
    }

    
    //display add form
    public function addCustForm(Request $request){
    	return view ('viewCustomers.custAddForm');
    }

    //add customer 
    public function addCust(Request $request){

      $rules =   $this->validate($request, [
                    'first_name' => 'required|min:1|regex:/^[(a-zA-Z\s)]+$/u', //letters and spaces
                    'last_name' => 'required|min:1|regex:/^[(a-zA-Z\s)]+$/u', //letters and spaces
                    'street' => 'required|min:1', 
                    'suburb' => 'required|alpha|min:2',
                    'state' => 'required|alpha|min:2|max:3',
                    'post_code' => 'required|integer|digits:4',
                    'email' => 'required|email||unique:customers',
                ]);
       
    if ($rules->fails()) {

          // redirect our user back to the form with the errors from the validator 
           //with the old inputs
          return Redirect::to('customer')
             //->withErrors($validator)
             ->withInput(Request::all());
    } 
    else {

         $c = new Customer;
         $c->first_name = $request->first_name;
         $c->last_name = $request->last_name;
         $c->street = $request->street;
         $c->suburb = $request->suburb;
         $c->state = $request->state;
         $c->post_code = $request->post_code;
         $c->email = $request->email;
         $c->active = 'yes';
         $c->save();

         return redirect('/customers');
      }
    }

    //display edit form 
    public function editCustForm(Customer $customer){
    	return view ('viewCustomers.custEditForm')->with('customer',$customer);
    }

    public function updateCust(Request $request){

        $rules =   $this->validate($request, [
                    'first_name' => 'required|min:1|regex:/^[(a-zA-Z\s)]+$/u', //letters and spaces
                    'last_name' => 'required|min:1|regex:/^[(a-zA-Z\s)]+$/u', //letters and spaces
                    'street' => 'required|min:1',
                    'suburb' => 'required|alpha|min:2',
                    'state' => 'required|alpha|min:2|max:3',
                    'post_code' => 'required|integer|digits:4',
                ]);
       

            $t = Customer::find($request->cust_id);
            $t->first_name = $request->first_name;
            $t->last_name = $request->last_name;
            $t->street = $request->street;
            $t->suburb = $request->suburb;
            $t->state = $request->state;
            $t->post_code = $request->post_code;
            $t->save();

            return redirect('/customers');
        
    }

     //display desactivate form 
    public function desactiveForm(Customer $customer){
      //return $customer;
      return view ('viewCustomers.desactivateForm')->with('customer',$customer);
    }

    //submit customer desactivation
    public function desactivation(Request $request){

        $a = Customer::find($request->cust_id);
        $a->active = 'no';
        $a->save();

        return redirect('/customers');
    }
}
