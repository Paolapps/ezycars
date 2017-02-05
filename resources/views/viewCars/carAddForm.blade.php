@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Add Car</h3>

  <div class="panel-body">

        <section id="main">

            <form action="{{url('car')}}" method="POST" class="form-horizontal">
             {!! csrf_field() !!}


                 <div class="form-group @if ($errors->has('rego_no')) has-error @endif">
                    <label for= "rego_no" class="col-sm-3 control-label">Registration No</label>
                    <div class="col-sm-6">
                        <input type="text" name="rego_no" id="rego_no" class="form-control" value="{{ Request::old('rego_no') }}">
                             @if ($errors->has('rego_no')) 
                        <p class="help-block">{{ $errors->first('rego_no') }}</p> 
                            @endif
                    </div>   
                </div>

                 <div class="form-group @if ($errors->has('type')) has-error @endif">
                    <label for= "type" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-6">
                        <input type="text" name="type" id="type" class="form-control" value="{{ Request::old('type') }}">
                             @if ($errors->has('type')) 
                        <p class="help-block">{{ $errors->first('type') }}</p> 
                            @endif
                    </div>   
                </div>

                <div class="form-group @if ($errors->has('color')) has-error @endif">
                    <label for= "color" class="col-sm-3 control-label">Color</label>
                    <div class="col-sm-6">
                        <input type="text" name="color" id="color" class="form-control" value="{{ Request::old('color') }}">
                             @if ($errors->has('color')) 
                        <p class="help-block">{{ $errors->first('color') }}</p> 
                            @endif
                    </div>   
                </div>

                <div class="form-group @if ($errors->has('transmission')) has-error @endif">
                    <label for= "transmission" class="col-sm-3 control-label">Transmission</label>
                    <div class="col-sm-6">
                        <input type="text" name="transmission" id="transmission" class="form-control" value="{{ Request::old('transmission') }}">
                             @if ($errors->has('transmission')) 
                        <p class="help-block">{{ $errors->first('transmission') }}</p> 
                            @endif
                    </div>   
                </div>

                 <div class="form-group @if ($errors->has('model_year')) has-error @endif">
                    <label for= "model_year" class="col-sm-3 control-label">Model year</label>
                    <div class="col-sm-6">
                        <input type="text" name="model_year" id="model_year" class="form-control" value="{{ Request::old('model_year') }}">
                             @if ($errors->has('model_year')) 
                        <p class="help-block">{{ $errors->first('model_year') }}</p> 
                            @endif
                    </div>   
                </div>

                <div class="form-group @if ($errors->has('suburb_loc')) has-error @endif">
                    <label for= "suburb_loc" class="col-sm-3 control-label">Suburb location</label>
                    <div class="col-sm-6">
                        <input type="text" name="suburb_loc" id="suburb_loc" class="form-control" value="{{ Request::old('suburb_loc') }}">
                             @if ($errors->has('suburb_loc')) 
                        <p class="help-block">{{ $errors->first('suburb_loc') }}</p> 
                            @endif
                    </div>   
                </div>

                <div class="form-group @if ($errors->has('description_loc')) has-error @endif">
                    <label for= "description_loc" class="col-sm-3 control-label">Description location</label>
                    <div class="col-sm-6">
                        <input type="text" name="description_loc" id="description_loc" class="form-control" value="{{ Request::old('description_loc') }}">
                             @if ($errors->has('description_loc')) 
                        <p class="help-block">{{ $errors->first('description_loc') }}</p> 
                            @endif
                    </div>   
                </div>

                 <div class="form-group @if ($errors->has('rate_day')) has-error @endif">
                    <label for= "rate_day" class="col-sm-3 control-label">Dayly rate</label>
                    <div class="col-sm-6">
                        <input type="text" name="rate_day" id="rate_day" class="form-control" value="{{ Request::old('rate_day') }}">
                             @if ($errors->has('rate_day')) 
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

