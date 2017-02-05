@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Contact</h3>

    <div class="panel-body">

        <section id="main">

            <img src=""/>

                <p style="text-align: center">Get in touch for all kind of queries, please contract us at:<br />
                    <a href="mailto:infoEzycars@infoEzycars.com" style="text-align: center">info@ezycars.com</a>
            <p style="text-align: center">108 Malaga Drive, Melbourne, Victoria Australia, 6090
                Phone : +61 98365152 </p>
            <br/>
            <br/>

                <form action ="" method="post" name="form1" id="form1" >
                    <label for="name">Name:</label>
                    <br/>
                    <input name="name" type="text" required id="name" form="form1" size="40">

                    <br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input name="email" type="email" required id="email" form="form1" size="40">
                    <br/>
                    <label for="radio">First time contacting us?</label>
                    <input type="radio" name="firstTime" value="yes">Yes
                    <input type="radio" name="firstTime" value="no">No
                    <br/>

                    <label for="comments">Comment:</label>
                    <br/>
                    <textarea name="comments" cols="40" required id="comments" form="form1"></textarea>
                    <br/>
                    <input type="checkbox" name="cheWeNews" id="cheNews" checked = "checked" />
                    <label for="checkbox">Receive weekly newsletters?</label>
                    <br/>
                    <input name="submit" type="submit" id="submit" form="form1" value="Submit">

                </form>
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
