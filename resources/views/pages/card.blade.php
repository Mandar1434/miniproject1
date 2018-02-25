@extends('layouts.default')

@section('content')
        <!DOCTYPE html>
<body>
<div lang="en">
    <head>
       <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <div class="card mt-10 pl-5 pr-5"><h1>Contact Messages</h1>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>mpv26@njit.edu</td>
                    <td>Hello Prof, My name is Mandar and
                        I am your IS601 student for spring2018
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

@endsection