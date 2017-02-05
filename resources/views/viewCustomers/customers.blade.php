@extends('app')

@section('content')



 <div class="panel panel-default">
   <h3>Customers</h3>



    <div class="panel-body">
@if (count($customers)>0)
        <section id="main">
            
 
             <table class="table table-striped customers-table">
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

 @foreach($customers as $c)
                    
                    <tr>
                        <td class="table-text">
                            <div>{{ $c->cust_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->first_name}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->last_name}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->street}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->state}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->post_code}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->email}}</div>
                        </td>

                    
                    <!--Update Button-->
                        <td>
                            <form action="/customer/{{ $c->cust_id }}" method="GET">
                            {{ csrf_field() }}
                            {{ method_field('UPDATE') }}

                                <button type="submit" class="btn btn-default btn-xs">
                                    <i class="fa fa-btn fa-trash"></i>Update
                                </button>
                            </form>
                        </td>


                        <!--Desactive Button-->
                        <td>
                            <form action="/inactive/{{ $c->cust_id }}" method="GET">
                            {{ csrf_field() }}
                            {{ method_field('UPDATE') }}

                                <button type="submit" class="btn btn-default btn-xs">
                                    <i class="fa fa-btn fa-trash"></i>Delete
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
                        <a href="{{url('customer')}}">Add customer</a><br />
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