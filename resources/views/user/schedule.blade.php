@extends('layouts.app')
@section('content')
<!--         <div class="row">
            <button class="btn btn-success col-lg-offset-9"><a href="{{url('/')}}">Logout</a></button>
            <button class="btn btn-info"><a href="">History</a></button>
        </div> -->
        <div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                     <div class="navbar-header">
                             <a class="navbar-brand" href="#">WebSiteBets</a>
                     </div>
                <ul class="nav navbar-nav">
                    <li ><a href="{{url('/')}}">Diễn đàn</a></li>
                    <li><a href=" {{url('/review')}} " >Xem lại</a></li>
                    <li class="active"><a href=" {{url('/schedule')}} ">Sắp diễn ra</a></li>
                    <li><a href=" {{url('/playing')}} ">Hôm nay</a></li>
                </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="form-group col-lg-offset-2">
                <span class="glyphicon glyphicon-tags"></span>
                <span>Cá Cược:</span>
            </div>
        </div>
        <div class="row col-lg-offset-2 container">
            <table class="table-bordered table-striped table-condensed">
                <thead>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Date</th>
                    <th>Home</th>
                    <th>The Way</th>
                    <th>Time End The Bets</th>
                    <th>Home Rate Win</th>
                    <th>Way Rate Win</th>
                    <th>Equal Rate</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <td>{{$match->time_start}}</td>
                            <td>{{$match->time_end}}</td>
                            <td>{{$match->date}}</td>
                            <td>{{$match->home}}</td>
                            <td>{{$match->way}}</td>
                            <td>{{$match->time_bets}}</td>
                            <td>{{$match->home_rate}}</td>
                            <td>{{$match->way_rate}}</td>
                            <td>{{$match->equal}}</td>
                            <td> <button class="btn btn-info" value=""><a href="/schedule/bets/{{$match->id_match}}">Cược</a></button> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <?php 
                echo "Hôm nay là:".date('Y-m-d ');
             ?>
        </div>
@endsection