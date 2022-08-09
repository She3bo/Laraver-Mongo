<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Edit A Form</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{route('players.update',$id)}}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Carcompany">Username:</label>
                <input type="text" class="form-control" name="username" value="{{$player->username}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Status:</label>
                <input type="text" class="form-control" name="status" value="{{$player->status?1:0}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Price">Unsubscribe Date:</label>
                <input type="text" class="form-control" name="unsubscribe_date" value="{{$player->unsubscribe_date}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
