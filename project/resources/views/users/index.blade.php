<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style media="screen">
        body{
            text-align: center;
        }
    </style>

    <title>List of users</title>

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item">{{$user->name}}</li> <br>
                @endforeach
            </ul>
        </div>
    </div>
</div>

</body>
</html>
