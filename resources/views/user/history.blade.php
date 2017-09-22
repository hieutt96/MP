<!DOCTYPE html>
<html>
<head>
	<title>History User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
 	<div class="row">
 	<br>
 	<br>
 		<div class="col-lg-offset-8">
 			<button class="btn btn-success"><a href="{{url('/')}}">Home</a></button>
 			<button class="btn btn-success"><a href="{{url('/')}}">Logout</a></button>
 		</div>
 	</div>
 	<div class="row">
 		<span class="glyphicon glyphicon-tags"></span>
 		<p>History:</p>
 	</div>
 	<div>
 		<table class="table-striped table-condensed">
 			<thead>
 				<th>Home Team</th>
 				<th>A Way Team</th>
 				<th>Score</th>
 				<th>Bets Team</th>
 				<th>Bet Money</th>
 				<th>Collect/Lost</th>
 			</thead>
 			<tbody>
 				<tbody>			
 					@foreach($user->bets as $user)
 						<td>{{$user->matches->home}}</td>
 						<td>{{$user->matches->way}}</td>
 						<td>{{$user->matches->home_goal}}:{{$user->matches->way_goal}}</td>
 						<td>{{$user->betting_team}}</td>
 						<td>{{$user->bet_money}}</td>
 						<td>{{$user->collect_lost}}</td>
 					@endforeach
 				</tbody>
 			</tbody>
 		</table>
 	</div>
</body>
</html>