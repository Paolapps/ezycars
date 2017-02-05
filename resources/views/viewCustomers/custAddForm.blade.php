@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Add Customer</h3>



    <div class="panel-body">

        <section id="main">

        	 <form action="{{url('customer')}}" method="POST" class="form-horizontal">
                {!! csrf_field() !!}

                     <div class="form-group @if ($errors->has('first_name')) has-error @endif">
                        <label for= "first_name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ Request::old('first_name') }}">
                             @if ($errors->has('first_name')) 
                           <p class="help-block">{{ $errors->first('first_name') }}</p> 
                            @endif
                        </div>   
                    </div>
                    
                    <div class="form-group @if ($errors->has('last_name')) has-error @endif">
                        <label for= "last_name" class="col-sm-3 control-label">Surname</label>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ Request::old('last_name') }}">
                            @if ($errors->has('last_name')) <p class="help-block">{{ $errors->first('last_name') }}</p> @endif
                        </div>
                    </div>

                   <div class="form-group @if ($errors->has('street')) has-error @endif">
                        <label for= "street" class="col-sm-3 control-label">Street</label>
                        <div class="col-sm-6">
                            <input type="text" name="street" id="street" class="form-control" value="{{ Request::old('street') }}">
                            @if ($errors->has('street')) <p class="help-block">{{ $errors->first('street') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('suburb')) has-error @endif">
                        <label for= "suburb" class="col-sm-3 control-label">Suburb</label>
                        <div class="col-sm-6">
                            <input type="text" name="suburb" id="suburb" class="form-control" value="{{ Request::old('suburb') }}">
                             @if ($errors->has('suburb')) <p class="help-block">{{ $errors->first('suburb') }}</p> @endif
                        </div>
                    </div>

                   <div class="form-group @if ($errors->has('state')) has-error @endif">
                        <label for= "state" class="col-sm-3 control-label">State</label>
                        <div class="col-sm-6">
                            <input type="text" name="state" id="state" class="form-control" value="{{ Request::old('state') }}">
                             @if ($errors->has('state')) <p class="help-block">{{ $errors->first('state') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('post_code')) has-error @endif">
                        <label for= "post_code" class="col-sm-3 control-label">Post code</label>
                        <div class="col-sm-6">
                            <input type="text" name="post_code" id="post_code" class="form-control" value="{{ Request::old('post_code') }}">
                            @if ($errors->has('post_code')) <p class="help-block">{{ $errors->first('post_code') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        <label for= "email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" id="email" class="form-control" value="{{ Request::old('email') }}">
                            @if ($errors->has('email')) 
                            <p class="help-block">{{ $errors->first('email') }}</p> @endif
                         </div>     
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
            
                            <button type="submit" class="btn btn-inverse">
                                <i class="fa fa-plus"></i>Submit
                            </button>
                        </div>
                    </div>

                 </form>
             
        </section>
        <aside>

             <ul class="nav">
                 <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('customers')}}">Customers</a><br />
                    </li> 
                </div>
                    <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('searchB')}}">Search bookings by customer</a><br />  
                    </li>
                </div> 
                    <li class="nav-divider"></li>
                <div class="theLinks">    
                    <li>
                        <a href="{{url('searchD')}}">Search damaged cars by customer</a><br />
                    </li> 
                 </div>   
                    <li class="nav-divider"></li>

             </ul>
          
         </aside>
    </div>
</div> 

@endsection