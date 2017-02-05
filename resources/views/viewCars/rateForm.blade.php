@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Edit customer details</h3>
    <div class="panel-body">

         <section id="main">
        	 <form action="{{url('rate')}}" method="POST" class="form-horizontal">
                {!! csrf_field() !!}

                 <input type="hidden" name="car_id" id="car_id" class="form-control" value="{{ $car->car_id}}">

                <div class="form-group @if ($errors->has('rate_day')) has-error @endif">
                    <label for= "rate_day" class="col-sm-3 control-label">Dayly rate</label>
                    <div class="col-sm-6">
                        @if (!$errors->has('rate_day')) 
                        <input type="text" name="rate_day" id="rate_day" class="form-control" value="{{ $car->rate_day}}">
                        @else  
                        <input type="text" name="rate_day" id="rate_day" class="form-control" value="{{ Request::old('rate_day') }}">
                        <p class="help-block">{{ $errors->first('rate_day') }}</p> 
                        @endif 
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
                        <a href="{{url('car')}}">Add car</a><br />
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