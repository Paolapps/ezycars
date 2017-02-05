@extends('app')

@section('content')
 <div class="panel panel-default">
    <h3>Archive bookings confirmation</h3>    

     <div class="panel-body">

        <section id="main">
@if (count($bookings)>0)  
        <br />
        <h2>Do you want to archive all the bookings bellow?</h2>
        <br />
        <form action="/archive/delete" method="post"  class="form-horizontal">
        {!! csrf_field() !!}

             <br />
             <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-inverse">
                        <i class="fa fa-plus"></i>Confirm
                    </button>
                    </div>
            </div> 
            <br /> 


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
             </tr>
@endforeach
        
        </tbody>
     </table>
              
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
                            <a href="{{url('bookings')}}"> Bookings</a><br />
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
                        <a href="{{url('archived')}}">Archived Bookings</a><br />
                    </li> 
                </div>
            <li class="nav-divider"></li>  

        </ul>

          
         </aside>
       
   </div>   
</div> 


@endsection
