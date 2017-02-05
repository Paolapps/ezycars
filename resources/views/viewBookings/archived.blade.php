@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Archived Bookings</h3>

    <div class="panel-body">
 @if (count($archives)>0)
        <section id="main">

            <table class="table table-striped bookings-table">
                <thead>
                <tr>
                    <th>Archive Id</th>
                    <th>Booking Id</th>
                    <th>Customer Id</th>
                    <th>Car Id</th>
                    <th>Pick up date</th>
                    <th>Return Date</th>
                    <th>Returned date</th>
                </tr>
                </thead>

                <tbody>

                @foreach($archives as $ar)
                    <tr>
                        <td class="table-text">
                            <div>{{ $ar->archive_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->booking_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->cust_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->car_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->pick_date}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->return_date}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $ar->returned_date}}</div>
                        </td>

                    </tr>
@endforeach

                </tbody>
            </table>
 @else
   <p>No bookings to display</p>
 @endif

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
                 <a href="{{url('searchB')}}">Search bookings by customer</a><br />  
                </li>
            </div> 
            <li class="nav-divider"></li>  

            <div class="theLinks">
                    <li>
                        <a href="{{url('archive')}}">Archiving Bookings</a><br />
                    </li> 
                </div>
            <li class="nav-divider"></li>           		
       	 </ul>
  		</aside>
    </div>

 </div>  

@endsection