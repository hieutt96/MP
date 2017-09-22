<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin Manage Match</title>
	<style type="text/css">

	</style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body > -->
@extends('layouts.app')
@section('content')
<div class="container" style="height: 1000px;">
 	<h2 class="col-lg-offset-4">Welcome to Admin</h2>
 	<div class="row" >
		<div class="col-lg-2">
 	 	
  			<ul class="nav nav-pills nav-stacked">
  	  			<li ><a href="{{url('/admin/addmatch')}}">Add Match</a></li>
   				<li >
           	    </li>
    			<li ><a href="{{url('/admin/manageuser')}}">ManageUser</a></li>
    			<li class="active"><a href="#">ManageMatch</a></li>
  			</ul>
		</div>
		<div class="col-lg-10">		
			<h2>Manage Match</h2>
      <br>
			<div class="">
				<table class="table table-bordered table-striped table-condensed">
   					<thead>
     					 <tr class="">
     					 	 <th>Home</th>
       						 <th>Way</th>
       						 <th>RateHomeWin</th>
       						 <th>RateEqual</th>
       						 <th>RateWayWin</th>
       						 <th>Public</th>
                   <th>TimeStart</th>
                   <th>TimeEnd</th>
                   <th>Date</th>

                   <th colspan="3">Manage</th>
      					 </tr>
            </thead>
            <tbody>
                  @foreach($matches as $match)
      					 <tr>
                 
                 
      					 	<td>{{ $match->home }}</td>
      					 	<td>{{ $match->way }}</td>
      					 	<td>{{ $match->home_rate }}</td>
      					 	<td>{{ $match->equal }}</td>
      					 	<td>{{ $match->way_rate}}</td>
      					 	<td>{{ $match->public }}</td>
                  <td>{{ $match->time_start }}</td>
                  <td>{{ $match->time_end }}</td>
                  <td>{{ $match->date }}</td>
                  @if( $match->home_goal && $match->way_goal )
                    <td>
                       {{$match->home_goal.' : '.$match->way_goal}}
                    </td>
                  @else
                    <td><button class="btn btn-danger btn-sm"><a href="/admin/managematch/{{$match->id_match}}/editscore">Edit Score</a></button></td>
                  @endif
                  <td><button class="btn btn-success btn-sm"><a href="/admin/managematch/detail/{{$match->id_match}}">Detail</a></button></td>
                  <td><button class="btn btn-info btn-sm"><a href="/admin/managematch/delete/{{$match->id_match}}">Delete</a></button></td>
      					 </tr>
                 @endforeach
             </tbody>

         </table>
    			<?php 
            echo 'Hôm nay là:'.date('Y-m-d');
            echo "<br>";  
            echo $matches->sum('home_rate');
           ?>
			</div>
		</div>
	</div>
</div>
@endsection
<!--   </body>
  </html> -->
