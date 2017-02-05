@extends('app')

@section('content')


<div class="panel panel-default">
    <h3>Car faults report by registration number </h3>


    
    <div class="panel-body">

        <section id="main">
        @if (count($joinT)>0)
           <table class="table table-striped bookings-table">
              <thead>
                 <tr>
                     <th>Rego No</th>
                     <th>Fault Id</th>
                     <th>Description</th>
                     <th>Fixed Date</th>
                 </tr>
              </thead>

              <tbody>

              @foreach($joinT as $j )
                  <tr>
                      <td class="table-text">
                          <div>{{ $j->rego_no}}</div>
                      </td>
                      <td class="table-text">
                          <div>{{ $j->fault_id}}</div>
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
           <br />
         <p>No faults of this car to display</p>
            @endif
        </section>

         <aside>
                <ul class="nav">

                    <li class="nav-divider"></li>
                   
                    <div class="theLinks">
                    <li>
                        <a href="{{url('cars')}}">Cars </a><br />  
                        </li>
                    </div> 
                        
                    <li class="nav-divider"></li>
                     <div class="theLinks">
                    <li>
                        <a href="{{url('damaged')}}">Demages cars</a><br />  
                        </li>
                    </div> 
                                   
                </ul>
            </aside>

   </div>
</div>

@endsection



             