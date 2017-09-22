<!DOCTYPE html>
<html>
<head>
    <title>Edit Score</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
    <div class="container col-lg-offset-2 jumbotron col-lg-8">
        <form method="POST" action="{{route('editscore',$match->id_match)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="label-control col-lg-2">Home:</label>
                <input type="text" name="home" value="{{$match->home}}" class="col-lg-4">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="label-control col-lg-2">Way:</label>
                <input type="text" name="way" value="{{$match->way}}" class="col-lg-4">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="label-control col-lg-2">Time Start:</label>
                <div class="col-lg-4">
                    <label class="label-control col-lg-3">Time:</label>
                    <input type="string" name="time_start" class="col-lg-8" value="{{$match->time_start}}">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group col-lg-offset-2">
                <label class="col-lg-1">Date:</label>
                <input type="string" name="date" class="col-lg-3" value="{{$match->date}}">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="label-control col-lg-2">Time End:</label>
                <input type="string" name="time_end" value="{{$match->time_end}}" class="col-lg-4">
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="label-control col-lg-2">Time Bets:</label>
                <input type="string" name="time_end" value="{{$match->time_bets}}" class="col-lg-4">
            </div>
            <br>
            <br>
            <div class="col-lg-10">
                <label class="label-control col-lg-1">Rate:</label>
                <div class="col-lg-3">
                    <label class="label-control col-lg-7">Home Win:</label>
                    <input type="string" name="home_rate" value="{{$match->home_rate}}" class="col-lg-5">
                </div>
               
                <div class="col-lg-3">
                    <label class="label-control col-lg-7">Way Win:</label>
                    <input type="string" name="way_rate" value="{{$match->way_rate}}" class="col-lg-5">
                </div>

                <div class="col-lg-3">
                    <label class="label-control col-lg-6"> Equal:</label>
                    <input type="string" name="equal" value="{{$match->equal}}" class="col-lg-5">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group">
                <label class="col-lg-3">Score:</label>
                <div class="col-lg-8">
                    <label class="col-lg-2">Home:</label>
                    <input type="text" name="home_goal" value="{{$match->home_goal}}" class="col-lg-3">
                    
                    <label class="col-lg-2">Way:</label>
                    <input type="text" name="way_goal" value="{{$match->way_goal}}" class="col-lg-3">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                
                    <div class="form-group col-lg-12">
                        <label class="col-lg-2 control-label col-lg-offset-2">Status:</label>               
                        <div class="col-lg-3">
                            <input type="radio" name="status" id="public" value='1'>
                            <span>Public</span> 
                        </div>
                        <div class="col-lg-3">
                            <input type="radio" name="status" id="private" value="0">
                            <span>
                                Private
                            </span>
                        </div><!-- 
                        <script type="text/javascript">
                            var x=documetn.getElemenById("public").checked;
                            var y=documetn.getElemenById("private").checked;
                            if({{$match->public}}==1){
                                x=true;
                            }else{y=true;}
                        </script> -->
                    </div>
            </div>
            <div class="row" {{$errors->has('status') ? 'has-error':''}}">
                <div>{{$errors->first('status')}}</div>
            </div>
            <div class="row col-lg-offset-3">
                <button class="btn btn-success col-lg-5">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>