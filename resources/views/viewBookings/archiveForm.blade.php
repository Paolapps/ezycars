@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Archiving bookings by date</h3>

    <div class="panel-body">

        <section id="main">

            <form action="/archive" method="POST" class="form-horizontal">
                {!! csrf_field() !!}
                 
                <div class="form-group @if ($errors->has('the_date')) has-error @endif">
                    <label for= "the_date" class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-6">
                       
                        <input type="text" name="the_date" id="the_date" class="form-control" 
                        placeholder="YYYY/MM/DD" value="{{ Request::old('the_date') }}">
                        @if ($errors->has('the_date')) 
                        <p class="help-block">{{ $errors->first('the_date') }}</p> 
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
                        <a href="{{url('bookings')}}">Bookings</a><br />
                </li> 
            </div>

            <li class="nav-divider"></li>
            <div class="theLinks">
                <li>
                    <a href="{{url('archived')}}">Archived Bookings</a><br />
                </li> 
            </div>

            <li class="nav-divider"></li>
               <div class="theLinks">
                <li>
                 <a href="{{url('searchB')}}">Search bookings by customer</a><br />  
                </li>
            </div> 
            <li class="nav-divider"></li>           		
       	 </ul>
  		</aside>
    </div>

 </div>  

@endsection