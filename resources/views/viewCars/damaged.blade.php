@extends('app')

@section('content')

<div class="panel panel-default">
    <h3>Damaged Cars</h3>

    <div class="panel-body">
 @if (count($damages)>0)
    <section id="main">

        <table class="table table-striped bookings-table">
            <thead>
            <tr>
                <th>Damage Id</th>
                <th>Booking Id</th>
                <th>Car Id</th>
                <th>Description</th>
                <th>Fixed date</th>
            </tr>
            </thead>

            <tbody>

@foreach($damages as $dam)
                <tr>
                    <td class="table-text">
                        <div>{{ $dam->damage_id}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $dam->booking_id}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $dam->car_id}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $dam->description}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $dam->fixed_date}}</div>
                    </td>
                </tr>

@endforeach

            </tbody>
        </table>
        </section>
@else
        <p>No damaged cars to display</p>
@endif
        <aside>

            <ul class="nav">
                <li class="nav-divider"></li>
                <div class="theLinks">
                    <li>
                        <a href="{{url('searchD')}}">Search damaged cars by customer</a>
                        <br />
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
                        <a href="{{url('searchF')}}">Faults cars </a><br />  
                    </li>
                </div> 
                    <li class="nav-divider"></li>
             </ul>
        </aside>

   </div>
</div> 

@endsection

