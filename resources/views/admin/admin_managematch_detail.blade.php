@extends('layouts.app')
@section('content')
	<style type="text/css">
		table, th, td {
   			border: 1px solid black;
			}
	</style>
<div class="container ">
	<br>
	<div class="row">
		<div class="col-lg-offset-9">
			<button class="btn btn-success"><a href="{{url('/')}}">Logout</a>  </button>
		</div>
	</div>
	<div class="row col-lg-offset-4">
		<h4>Home   And  Way</h4>
	</div>
	<hr>
	<div class="row col-lg-offset-3">
		<h2>{{$match->home}}:{{$match->way}}</h2>
	</div>
	<hr>
	<div class="row col-lg-offset-4">
		<h4>Rate Bets {{$match->home_rate}} : {{$match->equal}} : {{$match->way_rate}}</h4>
	</div>
	<div class="">
		<div class="col-lg-2">
			<div class="form-group">
			<span class="glyphicon glyphicon-tag"></span>
				List User Bets:
			</div>
		</div>
		<div class="col-lg-10">
			<table class="table-striped table-condensed">
				<thead>
					<th>ID</th>
					<th>UserName</th>
					<th>Email</th>
					<th>Bet_Team</th>
					<th>Bet Money</th>
					<th>Result</th>
					<th>Collect/Lost</th>
				</thead>
				<tbody>
					@foreach( $match->bets as $bet)
						<tr>
							<td>{{$bet->user->id}}</td>
							<td>{{$bet->user->name}}</td>
							<td>{{$bet->user->email}}</td>
							<td>{{$bet->betting_team}}</td>
							<td>{{$bet->bet_money}}</td>
							<td>{{$bet->result}}</td>
							<td>{{$bet->collect_lost}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection