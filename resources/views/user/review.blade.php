@extends('layouts.app')
@section('content')
        <div class="row">
            <!-- <button class="btn btn-success "><a href="{{url('/')}}">Logout</a></button> -->
           <!--  <button class="btn btn-info col-lg-offset-10"><a href="">History</a></button> -->
        </div>
        <div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                     <div class="navbar-header">
                             <a class="navbar-brand" href="#">WebSiteBets</a>
                     </div>
                <ul class="nav navbar-nav">
                    <li ><a href="{{url('/')}}">Diễn đàn</a></li>
                    <li class="active"><a href="{{url('review')}} " >Xem lại</a></li>
                    <li><a href=" {{url('schedule')}} ">Sắp diễn ra</a></li>
                    <li><a href=" {{url('/playing')}} ">Hôm nay</a></li>
                </ul>
                </div>
            </nav>
        </div>
        <div class="row col-lg-offset-1">
            <label>Các trận đấu đã diễn ra :</label>
        </div>
        <div class="container col-lg-offset-2">
            <table class="table-bordered table-striped table-condensed">
                <thead>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Time Bets</th>
                    <th>Date</th>
                    <th>Home</th>
                    <th>The Way</th>
                    <th>Home Goal</th>
                    <th>Way Goal</th>
                    <th>Home Rate Win</th>
                    <th>Equal Rate</th>
                    <th>Way Rate Win</th>
                </thead>
                <tbody>
                    @foreach($matches as $match)
                        <tr>
                            <td>{{$match->time_start}}</td>
                            <td>{{$match->time_end}}</td>
                            <td>{{$match->time_bets}}</td>
                            <td>{{$match->date}}</td>
                            <td>{{$match->home}}</td>
                            <td>{{$match->way}}</td>
                            <td>{{$match->home_goal}}</td>
                            <td>{{$match->way_goal}}</td>
                            <td>{{$match->home_rate}}</td>
                            <td>{{$match->equal}}</td>
                            <td>{{$match->way_rate}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection