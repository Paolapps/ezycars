<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>EzyCars</title>


	<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> <!-- default css style -->

	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" /> <!--my css style -->


	 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> 
	 

	  <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>



<body class="body_bg">
	<div class="heading_bar">
	   <img src="../images/logoSmall.png"  class="imgLogo"/>
		
	   
		 <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right" style="margin-right: 40px">
             <!-- Authentication Links -->
             @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                   Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
             @endif
         </ul>
      
                  

		<nav class="navbar">

				<ul class="nav navbar-nav">
					<li class="nav_buttons"><a href="{{ url('/') }}" >Home</a></li>
					<li class="nav_buttons"><a href="{{ url('about') }}" >About</a></li>
					<li class="nav_buttons"><a href="{{ url('customers') }}" >Customers</a></li>
					<li class="nav_buttons"><a href="{{ url('cars') }}" >Cars</a></li>
					<li class="nav_buttons"><a href="{{ url('bookings') }}"  >Bookings</a></li>
					<li class="nav_buttons"><a href="{{ url('contact') }}">Contact</a></li>
				</ul>
		</nav>
	</div>


	<div class="container">
	@yield('content')
	</div>

	<div class="panel-footer">
		<p class="copyright text-center">&copy; 2016 - Paola Sanabria</p>
	</div>

	<!-- Scripts -->
    <script src="/js/app.js"></script>

</body>
</html>
