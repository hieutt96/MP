@extends('layouts.app')
@section('content')
        <div class="row">
            <button class="btn btn-default col-lg-offset-10"><a href="">History</a></button>
        </div>
        <div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                     <div class="navbar-header">
                             <a class="navbar-brand" href="#">WebSiteBets</a>
                     </div>
                <ul class="nav navbar-nav">
                    <li ><a href="{{url('/')}}">Diễn đàn</a></li>
                    <li><a href="{{url('review')}}" >Xem lại</a></li>
                    <li><a href=" {{url('/schedule')}} ">Sắp diễn ra</a></li>
                    <li class="active"><a href=" {{url('playing')}} ">Hôm nay</a></li>
                </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-offset-2">
                <span class="glyphicon glyphicon-tags"></span>
                <label>Các trận đấu diễn ra hôm nay:</label>
                <?php 
                    echo date('Y-m-d');
                 ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-4 col-lg-12">
                <table class="table-bordered table-striped table-condensed">
                    <thead>
                        <th>Time Start</th>
                        <th>Time End</th>
                        <th>Home </th>
                        <th>Way</th>
                    </thead>
                    <tbody>
                        @foreach($matches as $match)
                            <tr>
                                <td>{{$match->time_start}}</td>
                                <td>{{$match->time_end}} </td>
                                <td>
                                    {{$match->home}}
                                </td>
                                <td>
                                    {{$match->way}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection