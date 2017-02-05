@extends('app')

@section('content')


    <div class="panel panel-default">
        <h3>Damaged cars by customer</h3>

        <div class="panel-body">

            <section id="main">
     
                <form action="reportD/customer" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="input-group">
                            <input type="text" name="cust_id" id="cust_id" class="form-control" placeholder="Customer ID">
                            <span class="input-group-btn" style="width:8px;">
                                <button type="submit" class="btn btn-inverse">Search </button>
                            </span>
                        </div>

                        <span class="help-block">Search damaged car by a customer</span>

                    </div>
                </form>
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