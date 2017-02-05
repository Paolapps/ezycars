@extends('app')

@section('content')
 <div class="panel panel-default">
    <h3>Retire Cars</h3>    

     <div class="panel-body">

        <section id="main">
         @if (count($car)>0)

                <br />
                <h2>Do you want to retire this car?</h2>
                <br />
                <form action="/retired" method="POST"  class="form-horizontal">
                {!! csrf_field() !!}

                 <input type="hidden" name="car_id" id="car_id" class="form-control" value="{{ $car->car_id}}">
                
     
                 <table class="table table-striped customer-table">
                   <thead>
                   <tr>
                       <th>Car Id</th>
                       <th>Registration No</th>
                       <th>Type</th>
                       <th>Model</th>
                       <th>Location Suburb</th>
                       <th>Location Description</th>
                       <th>Day Rate</th>
                       <th>Status</th>
                   </tr>
                </thead>

                <tbody>  
       

                <tr>
                        <td class="table-text">
                            <div>{{ $car->car_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->rego_no}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->type}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->model_year}}</div>
                        </td>
                         <td class="table-text">
                            <div>{{ $car->suburb_loc}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->description_loc}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->rate_day}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $car->status}}</div>
                        </td>
               </tr>
                      
                       

                   
                    </tbody>

                 </table>

                 <br />
                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-inverse">
                            <i class="fa fa-plus"></i>Confirm
                        </button>
                    </div>
                </div>
            </form>

            @else
           <p>No bookings to display</p>
            @endif

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

