@extends('app')

@section('content')
 <div class="panel panel-default">
    <h3>About</h3>
 	<div class="panel-body">

        <section id="main">
            <img src="../images/hyundai.jpg" />
            <p>
                A pickup truck is a light duty truck having an enclosed cab
                and an open cargo area with low sides and tailgate.
                A pickup truck is a light duty truck having an enclosed cab
                and an open cargo area with low sides and tailgate.
                A pickup truck is a light duty truck having an enclosed cab
                and an open cargo area with low sides and tailgate.
                A pickup truck is a light duty truck having an enclosed cab
                and an open cargo area with low sides and tailgate.
            </p>


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
                 <a href="{{url('cars')}}">Cars</a><br />  
                </li>
            </div> 
                
            <li class="nav-divider"></li>
            <div class="theLinks">
                <li>
                    <a href="{{url('bookings')}}">Bookings</a><br />
                </li> 
            </div>
            <li class="nav-divider"></li>           		
       	 </ul>
  		</aside>
    </div>

 </div>  

@endsection