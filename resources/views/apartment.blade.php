<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Apartment</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fas fa-home fa-4x"></i></a>
        <p class="font-weight-bold">Sweet Home</p>
    </div>

</nav>
<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Best Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Contact us</a>
        </li>
    </ul>
</div>
<div class="container-fluid row mt-2">

    <main class="col-md-9">
        <div class="card-deck">
            @foreach($list_obj as $item)
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <img class="card-img-top" src="{{$item->images}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" href="view/apartment/{{$item->id}}">{{$item->name}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4 float-right" style="margin-top: 10px;">
            <div class="float-right">
                {{ $list_obj -> appends($_GET) -> links() }}
            </div>
        </div>
    </main>
    <nav class="col-md-2 float-right">
        <div class="nav flex-column nav-pills">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
        </div>
    </nav>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2018 FPT Aptech</p>
</footer>

</body>
</html>