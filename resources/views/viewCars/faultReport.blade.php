@extends('app')

@section('content')


    <div class="panel panel-default">
        <h3>Faults of a car</h3>

        <div class="panel-body">

            <section id="main">
     
                <form action="reportF/car" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="input-group">
                            <input type="text" name="rego_no" id="rego_no" class="form-control" placeholder="Rego No">
                            <span class="input-group-btn" style="width:8px;">
                                <button type="submit" class="btn btn-inverse">Search </button>
                            </span>
                        </div>

                        <span class="help-block">Search faults of car by its registration number</span>

                    </div>
                </form>
            </section>
             <aside>
                <ul class="nav">

                    <li class="nav-divider"></li>
                   
                    <div class="theLinks">
                    <li>
                        <a href="{{url('cars')}}">Cars </a><br />  
                        </li>
                    </div> 
                        
                    <li class="nav-divider"></li>
                     <div class="theLinks">
                    <li>
                        <a href="{{url('damaged')}}">Demages cars</a><br />  
                        </li>
                    </div> 
                                   
                </ul>
            </aside>


        </div>

    </div>

@endsection