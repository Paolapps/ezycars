@extends('app')

@section('content')


<div class="panel panel-default">
    <h3>Bookings by customer</h3>

    <div class="panel-body">

        <section id="main">
            <form action="reportB/customer" method="POST" class="form-horizontal">
                {!! csrf_field() !!}
            	 
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="input-group">
                        <input type="text" name="cust_id" id="cust_id" class="form-control" placeholder="Customer ID">
                            <span class="input-group-btn" style="width:8px;">
                                <button type="submit" class="btn btn-inverse">Search</button>
                            </span>
                    </div>

                    <span class="help-block">Search bookings for a customer</span>
                   
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
                        <a href="{{url('customers')}}">Customers</a><br />  
                        </li>
                    </div> 

                    <li class="nav-divider"></li>                   
         </ul>
        </aside>

    </div>

</div> 


@endsection
