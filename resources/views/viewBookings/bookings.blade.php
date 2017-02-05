@extends('app')

@section('content')

  

<div class="panel panel-default">
    <h3>Bookings</h3>
    <div class="panel-body">
@if (count($bookings)>0)
    <section id="main">
  
   
     <table class="table table-striped bookings-table">
     	<thead>
     	   <tr>
	           <th>Booking Id</th>
	           <th>Customer Id</th>
	           <th>Car Id</th>
	           <th>Pick up date</th>
	           <th>Return Date</th>
	           <th>Returned date</th>
	       </tr>
        </thead>

        <tbody>

@foreach($bookings as $boo)
	        <tr>
	        	<td class="table-text">
                    <div>{{ $boo->booking_id}}</div>
                </td>
                <td class="table-text">
                    <div>{{ $boo->cust_id}}</div>
                </td>
                <td class="table-text">
                    <div>{{ $boo->car_id}}</div>
                </td>
                <td class="table-text">
                    <div>{{ $boo->pick_date}}</div>
                </td>
                <td class="table-text">
                    <div>{{ $boo->return_date}}</div>
                </td>
                <td class="table-text">
                    <div>{{ $boo->returned_date}}</div>
                </td>

                 <!--Update Button-->
                 <td>
                    <form action="/damage/{{ $boo->booking_id }}" method="GET">
                     {{ csrf_field() }}
                     {{ method_field('UPDATE') }}

                      <button type="submit" class="btn btn-default btn-xs">
                        <i class="fa fa-btn fa-trash"></i>Report on damage
                       </button>
                   </form>
                 </td>       
	   
    	 </tr>
@endforeach
        
        </tbody>
     </table>

     </section>
@endif
     <aside>
        <ul class="nav">
                
           <li class="nav-divider"></li>
            <div class="theLinks">
                <li>
                 <a href="{{url('searchB')}}">Search bookings by customer</a><br />  
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
                        <a href="{{url('archive')}}">Archiving Bookings</a><br />
                    </li> 
                </div>
            <li class="nav-divider"></li>       

        </ul>


  </aside>

   </div>
</div> 



@endsection