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
    			<li class="active"><a href="{{url('/admin/manageuser')}}">ManageUser</a></li>
    			<li><a href="{{url('/admin/managematch')}}">ManageMatch</a></li>
  			</ul>
		</div>
		<div class="col-lg-10">		
			<h2>List User</h2>
			<div class="">
				<table class="table table-bordered table-striped table-condensed">
   					<thead>
     					 <tr class="">
     					 	 <th>Id</th>
       						 <th>Name</th>
       						 <th>Email</th>
       						 <th>Password</th>
       						 <th>Remain_money</th>
       						 <th>Level</th>
                   <th>Edit Level </th>
      					 </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
      					 <tr>
      					 	<td>{{$user->id}}</td>
      					 	<td>{{$user->name}}</td>
      					 	<td>{{$user->email}}</td>
      					 	<td>{{$user->password}}</td>
      					 	<td>{{$user->remain_money}}</td>
      					 	<td>{{$user->status}}</td>
                  <td><button class="btn btn-default btn-sm"><a href="/admin/manageuser/{{$user->id}}/editlevel">Edit</a></button></td>
      					 </tr>
              @endforeach
            </tbody>
        </table>
        <!-- <?php 
            echo $users->count();
         ?> -->
			</div>
		</div>
	</div>
  @endsection