<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <a class="m-5 btn btn-dark" href="{{route('players.create')}}">Create</a>
    <a class="m-5 btn btn-info" href="{{route('search')}}">Search</a>
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Status</th>
            <th>Unsubscribe_date</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->username}}</td>
                <td>{{$player->status}}</td>
                <td>{{$player->unsubscribe_date}}</td>
                <td><a href="{{route('players.edit',$player->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('players.destroy',$player->id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
