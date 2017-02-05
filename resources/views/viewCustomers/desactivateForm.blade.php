@extends('app')

@section('content')
 <div class="panel panel-default">
    <h3>Customer Desactivation</h3>    

     <div class="panel-body">

        <section id="main">
         @if (count($customer)>0)

                <br />
                <h2>Do you want to desactivate this customer?</h2>
                <br />
                
               
                <form action="/inactive" method="POST"  class="form-horizontal">
                
                
                {!! csrf_field() !!}

                 <input type="hidden" name="cust_id" id="cust_id" class="form-control" value="{{ $customer->cust_id}}">
                
     
                 <table class="table table-striped customer-table">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Surname</th>
                           <th>Street</th>
                           <th>State</th>
                           <th>Post code</th>
                           <th>Email</th>
                       </tr>
                    </thead>

                    <tbody>

                    
                        <tr>
                            <td class="table-text">
                                <div>{{ $customer->cust_id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->first_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->last_name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->street}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->state}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->post_code}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $customer->email}}</div>
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
                        <a href="{{url('customers')}}">Customers</a><br />
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
                        <a href="{{url('searchD')}}">Search damaged cars by customer</a><br />
                    </li> 
                 </div>   
                    <li class="nav-divider"></li>

             </ul>
          
         </aside>
       
   </div>   
</div> 


@endsection


 