@extends('app')

@section('content')


<div class="panel panel-default">
    <h3>Damaged cars by customer report</h3>


    
    <div class="panel-body">

        <section id="main">
        @if (count($joinT)>0)
           <table class="table table-striped bookings-table">
              <thead>
                 <tr>
                     <th>Customer Id</th>
                     <th>Damage Id</th>
                     <th>Car Id</th>
                     <th>Booking Id</th>
                     <th>Description</th>
                     <th>Fixed Date</th>
                 </tr>
              </thead>

              <tbody>

              @foreach($joinT as $j )
                  <tr>
                      <td class="table-text">
                          <div>{{ $j->booking_id}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->damage_id}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->cust_id}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->car_id}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->description}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->fixed_date}}</div>
                      </td>
                  </tr>

              @endforeach

              </tbody>
           </table>
           @else
         <p>No damaged car by this customer to display</p>
            @endif
        </section>

         <aside>
                <ul class="nav">
                        
                    <li class="nav-divider"></li>
                     <div class="theLinks">
                    <li>
                        <a href="{{url('damaged')}}">Demages cars</a><br />  
                        </li>
                    </div> 

                    <li class="nav-divider"></li>
                    <div class="theLinks">
                        <li>
                            <a href="{{url('searchF')}}">Faults cars </a><br />  
                        </li>
                    </div> 
                    <li class="nav-divider"></li>
                    <div class="theLinks">
                    <li>
                        <a href="{{url('cars')}}">Cars </a><br />  
                        </li>
                    </div> 

                    <li class="nav-divider"></li>

                    <div class="theLinks">
                    <li>
                        <a href="{{url('customers')}}">Customers</a><br />  
                        </li>
                    </div> 

                    <li class="nav-divider"></li>
                                   
                </ul>
            </aside>

   </div>
</div>

@endsection



             