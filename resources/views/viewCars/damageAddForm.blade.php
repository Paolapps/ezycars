@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Add Damaged</h3>
	<div class="panel-body">

	        <section id="main">

                <form action="{{url('damage')}}" method="POST" class="form-horizontal">
                {!! csrf_field() !!}
                    
                    <div class="form-group">
                        <label for= "booking_id" class="col-sm-3 control-label">Booking Id</label>
                        <div class="col-sm-6">
                            <input type="text" name="booking_id" id="booking_id" class="form-control"   value="{{ $booking->booking_id}}" readonly>
                        </div>
                    </div>

                   <div class="form-group">
                        <label for= "car_id" class="col-sm-3 control-label">Car Id</label>
                        <div class="col-sm-6">
                            <input type="text" name="car_id" id="car_id" class="form-control" value="{{ $booking->car_id}}" readonly>
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('description')) has-error @endif">
                        <label for= "description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-6">
                            <input type="text" name="description" id="description" class="form-control" value="{{ Request::old('description') }}">
                             @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
                        </div>
                    </div>

                   <div class="form-group @if ($errors->has('fixed_date')) has-error @endif">
                        <label for= "fixed_date" class="col-sm-3 control-label">Fixed date</label>
                        <div class="col-sm-6">
                            <input type="text" name="fixed_date" placeholder="YYYY/MM/DD" id="fixed_date" class="form-control" value="{{ Request::old('fixed_date') }}">
                             @if ($errors->has('fixed_date')) <p class="help-block">{{ $errors->first('fixed_date') }}</p> @endif
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
                        <a href="{{url('cars')}}">Cars</a><br />  
                    </li>
                </div> 
                <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('damaged')}}">Damaged cars</a><br />  
                    </li>
                </div> 
                <li class="nav-divider"></li>

                <div class="theLinks">
                    <li>
                        <a href="{{url('searchF')}}">Faults cars </a><br />  
                    </li>
                </div> 
                    <li class="nav-divider"></li>
                   		
	       	 </ul>
	  		</aside>
	    </div>

 </div>  

@endsection

