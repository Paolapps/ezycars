@extends('app')

@section('content')



<div class="panel panel-default">
    <h3>Cars</h3>
 

  <div class="panel-body">
  @if (count($cars)>0)
   <section id="main">

		<table class="table table-striped customers-table">
                <thead>
                   <tr>
                       <th>Car Id</th>
                       <th>Registration No</th>
                       <th>Type</th>
                       <th>Model</th>
                       <th>Location Suburb</th>
                       <th>Location Description</th>
                       <th>Day Rate</th>
                       <th>Status</th>
                   </tr>
                </thead>

                <tbody>  
     @foreach($cars as $c)     

                <tr>
                        <td class="table-text">
                            <div>{{ $c->car_id}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->rego_no}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->type}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->model_year}}</div>
                        </td>
                         <td class="table-text">
                            <div>{{ $c->suburb_loc}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->description_loc}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->rate_day}}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $c->status}}</div>
                        </td>
               
                        <!--Set rate day Button-->
                        <td>
                            <form action="/rate/{{ $c->car_id }}" method="GET">
                            {{ csrf_field() }}
                            {{ method_field('UPDATE') }}

                                <button type="submit" class="btn btn-default btn-xs">
                                    <i class="fa fa-btn fa-trash"></i>Set Rate
                                </button>
                            </form>
                        </td>


                        <!--Retire vehicle Button-->
                        <td>
                            <form action="/retired/{{ $c->car_id }}" method="GET">
                            {{ csrf_field() }}
                            {{ method_field('UPDATE') }}

                                <button type="submit" class="btn btn-default btn-xs">
                                    <i class="fa fa-btn fa-trash"></i>Retire
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
                        <a href="{{url('car')}}">Add car</a><br />
                    </li> 
                </div>
                    <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('damaged')}}">Damaged cars</a><br />  
                    </li>
                </div> 
                <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('searchF')}}">Faults cars </a><br />  
                    </li>
                </div> 
                    <li class="nav-divider"></li>
                
              </ul>

		
	  </aside>

  </div>

</div> 
@endsection