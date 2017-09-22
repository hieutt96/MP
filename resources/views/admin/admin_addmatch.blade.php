<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin Add Match</title>
	<style type="text/css">

	</style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body class="container" style="height: 1000px;"> -->
@extends('layouts.app')
@section ('content')
<div class="container" style="height: 1000px;">
 	<h2 class="col-lg-offset-4">Welcome to Admin</h2>
    <form method="POST" action="/admin/addmatch" autocomplete="off">
     {{ csrf_field() }}
        @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
            </div>
        @endif

  
 	<div class="row" >
		<div class="col-lg-2">
 	 	
  			<ul class="nav nav-pills nav-stacked">
  	  			<li class="active"><a href="#">Add Match</a></li>
   				<li >
           	    </li>
    			<li><a href="{{url('/admin/manageuser')}}">ManageUser</a></li>
    			<li><a href="{{url('/admin/managematch')}}">ManageMatch</a></li>
  			</ul>
		</div>
		<div class="col-lg-10 jumbotron">
            <br>
        	<div class="content col-lg-12">
        		<div class="form-group" {{ $errors->has('home') ? 'has-error' : '' }}">
        			<label class="col-lg-2 control-label">Home(Team A):</label>
        			<div class="col-lg-6">
        				<input type="text" name="home" class="form-control " value="{{old('home')}}">
        			</div>
                    <span class="text-danger col-lg-4">{{ $errors->first('home') }}</span>
        		</div>
        		<br>
        		<br>
        		<div class="form-group" {{ $errors->has('way') ? 'has-error' : '' }}">
        			<label class="col-lg-2 control-label">A Way(Team B):</label>
        			<div class="col-lg-6">
        				<input type="text" name="way" class="form-control" value="{{old('way')}}" }}>
        			</div>
                    <span class="text-danger col-lg-4">{{ $errors->first('way') }}</span>
		        </div>
        		<br>
                <br>
    		    <div class="form-group" {{ $errors->has('time_start') ? 'has-error' : '' }}">
        			<label class="col-lg-2 control-label">Time Start:</label>
                    <div class="col-lg-6">
                        <label class="control-label col-lg-2">Time:</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" name="time_start" value="{{old('time_start')}}">
                        </div>
                    </div>
                    <span class="text-danger col-lg-4">{{$errors->first('time_start')}}</span>
        		</div>
                <br>
                <br>
                <div class="form-group" {{$errors->has('date') ? 'has-error' : ''}}">
                    <div class="col-lg-offset-2 col-lg-6">
                        <label class=" control-label col-lg-2 ">Date:</label>
                        <div class="col-lg-10">
                            <input type="text" name="date" class="form-control" value="{{old('date')}}"> 
                        </div>
                    </div>
                    <span class="text-danger col-lg-4">{{$errors->first('date')}}</span>
                </div>               
                <br>
                <br>
                <div class="form-group" {{ $errors->has('time_end') ? 'has-error' : '' }}">
                    <label class="col-lg-2 control-label">Time End:</label>
                    <div class="col-lg-6">
                        <label class="control-label col-lg-2">Time:</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" name="time_end" value="{{old('time_end')}}">
                        </div>
                    </div>
                    <span class="text-danger col-lg-4">{{$errors->first('time_end')}}</span>
                </div>
                <br>
                <br>
                <div class="form-group" {{ $errors->has('time_bets') ? 'has-error' : '' }}">
                    <label class="col-lg-2 control-label">Time Bets:</label>
                    <div class="col-lg-6">
                        <label class="control-label col-lg-2">Time:</label>
                        <div class="col-lg-10">
                            <input class="form-control" type="text" name="time_bets" value="{{old('time_bets')}}">
                        </div>
                    </div>
                    <span class="text-danger col-lg-4">{{$errors->first('time_bets')}}</span>
                </div>              
                <br>
                <br>
                
        		<div class="form-group">
        			<label class="control-label col-lg-1">Rate:</label>
        			<div class="col-lg-11">
        				<div class="form-group col-lg-4">
        					<label class="control-label col-lg-7">HomeWin:</label>
        					<input type="number" name="homewin" min="1" max="10" class="col-lg-5" value="{{old('homewin')}}">
        				</div>
        			
        			
        				<div class="form-group col-lg-4">
        					<label class="control-label col-lg-7">Equal:</label>
        					<input type="number" name="equal" min="1" max="10" class="col-lg-5" value="{{old('equal')}}">
        				</div>
        			
        		
        				<div class="form-group col-lg-4">
        					<label class="control-label col-lg-7">WayWin:</label>
        					<input type="number" name="waywin" min="1" max="10" class="col-lg-5" value="{{old('waywin')}}">
        				</div>
        			</div>
        		</div>
                <br>
                <div class="form-group" {{$errors->has('homewin') ? 'has-error' : ''}}">
                   <div class="">
                       <span class="text-danger col-lg-4" >{{$errors->first('homewin')}}</span>
                   </div> 
                   <div>
                       <span class="text-danger col-lg-4" >{{$errors->first('equal')}}</span>
                   </div>
                   <div>
                       <span class="text-danger col-lg-4" >{{$errors->first('waywin')}}</span>
                   </div>
                </div>
                <br>
        		<div class="form-group">
        			<label class="col-lg-3 control-label">Score:</label>
        			<div class="col-lg-9">
        				<b>Home:</b><input type="number" name="home_score" min="0" max="10"
                        value="{{old('home_score')}}">:<input type="number" name="way_score" min="0" max="10" value="{{old('way_score')}}"><b>Way</b>
        			</div>
        		</div>  
        		<br>	
	
        	</div>
		</div>
	</div>
	<div class="row">
        
	        		<div class="form-group col-lg-12">
        				<label class="col-lg-3 control-label col-lg-offset-2">Status:</label>      			
                        <div class="col-lg-1">
                            <input type="radio" name="status" id="public" value='1'>
                            <span>Public</span> 
                        </div>
                        <div class="col-lg-3">
                            <input type="radio" name="status" id="private" value="0">
                            <span>
                                Private
                            </span>
                        </div>
        			</div>

        
	</div>
	<div class="row col-lg-5">
		<input type="submit" name="create" class="btn btn-control btn-success col-lg-8 col-lg-offset-10" value="Create">
	</div>
    </form>
</div>
@endsection
<!-- </body>
</html> -->