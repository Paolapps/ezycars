@extends('app')

@section('content')
   <div class="panel panel-default">
      <h3>Our Cars</h3>
   
   <div class="panel-body">


        <section id="main">

            <img src="../images/sedan.jpg"  class="imgRight" alt=""/>
            <div class="left">

                <h2 style="text-align: left">Sedan</h2>
                <p class="theP"> The primary purpose of the sedan is to transport people and
                    their baggage on ordinary roads. Sedan versions of the automobile body style have a
                    central pillar four-door versions.
                    The primary purpose of the sedan is to transport people and
                    their baggage on ordinary roads. Sedan versions of the automobile body style have a
                    central pillar four-door versions.
                    The primary purpose of the sedan is to transport people and
                    their baggage on ordinary roads. Sedan versions of the automobile body style have a
                    central pillar four-door versions.

                </p>
            </div>
            <br/>

            <img src="../images/suv.jpg" class="imgRight" alt=""/>
            <div class="left">

                <h2 style="text-align: left">SUV</h2>
                <p  class="theP"> A utility vehicle is a passenger vehicle designed to carry
                    passengers in a traditional front and back seat configuration, provides
                    additional cargo capacity in the form of a two-box design with shared passenger/cargo
                    volume.
                    A utility vehicle is a passenger vehicle designed to carry
                    passengers in a traditional front and back seat configuration, provides
                    additional cargo capacity in the form of a two-box design with shared passenger/cargo
                    volume.
                    A utility vehicle is a passenger vehicle designed to carry
                    passengers in a traditional front and back seat configuration.
                </p>
            </div>
            <br/>

            <img src="../images/pickup.jpg" class="imgRight" alt=""/>
            <div class="left">
                <h2 style="text-align: left">Pickup</h2>
                <p  class="theP">
                    A pickup truck is a light duty truck having an enclosed cab
                    and an open cargo area with low sides and tailgate.
                    A pickup truck is a light duty truck having an enclosed cab
                    and an open cargo area with low sides and tailgate.
                    A pickup truck is a light duty truck having an enclosed cab
                    and an open cargo area with low sides and tailgate.
                    A pickup truck is a light duty truck having an enclosed cab
                    and an open cargo area with low sides and tailgate.
                </p>
            </div>

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