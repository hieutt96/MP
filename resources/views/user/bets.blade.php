<!-- <!DOCTYPE html>
<html>
<head>
	<title>
		Bets
	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container "> -->
@extends('layouts.app')
@section('content')
<div class="container">
	<form method="POST" action="/schedule/bets/{{$matche->id_match}}">
		{{ csrf_field() }}
			<div class="col-lg-5 col-lg-offset-2 jumbotron">
				<div class="row col-lg-offset-2">
					<span class="glyphicon glyphicon-tag"></span>
					<label class="control-label col-lg-5">{{$matche->home}}</label>
					<span class="glyphicon glyphicon-tag"></span>
					<label>{{$matche->way}}</label>
				</div>
				<br>
				<div class="row col-lg-offset-1 form-group" >
					<div class="form-group">
						<input type="radio" name="bets" value="1">
						<label>Home Win</label>			
					</div>
					<div>
						<input type="radio" name="bets" value="-1">
						<label>WayWin</label>
					</div>
					<br>
					<div>
						<input type="radio" name="bets" value="0">
						<label>Equal</label>
					</div>
					<div class="row" {{ $errors->has('bets') ? 'has-error' : '' }}">
						<p style="color: red">{{ $errors->first('bets') }}</p>
					</div>
					<br>
					<div class="form-group" {{ $errors->has('bets_money') ? 'has-error' : '' }}">
						<span class="glyphicon glyphicon-tags col-lg-1"></span>
						<label class="control-label col-lg-3">Money Bets:</label>
						<input type="number" name="bets_money" class="col-lg-3">

					    <div style="color: red;">{{ $errors->first('bets_money') }}</div>
					</div>
					<br>
					<br>
					<div class="row col-lg-2 col-lg-offset-3">
						<button class="btn btn-success">Submit</button>
					</div>
					<script type="text/javascript">
						
					</script>
				</div>
			</div>
	</form>
<!-- </body>
</html> -->
</div>
@endsection