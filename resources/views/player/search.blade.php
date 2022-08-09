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
    <h2>Search</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{url('search')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Status:</label>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="status" required>
                    <label class="custom-control-label" for="customControlValidation2">True</label>

                    <input type="radio" class="custom-control-input m-lg-4" id="customControlValidation3" name="status" required>
                    <label class="custom-control-label" for="customControlValidation3">False</label>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Price">Unsubscribe Date:</label>
                <input type="date" class="form-control" name="unsubscribe_date">

                <label for="Price">compersion:</label>
                <select class="form-control col-md-4" name="operator">
                    <option selected>compersion</option>
                    <option value="1">greater than</option>
                    <option value="2">less than</option>
                    <option value="3">equal</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
