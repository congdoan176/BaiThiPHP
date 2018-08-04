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
    {{--<nav class="col-md-2">--}}
        {{--<div class="nav flex-column nav-pills">--}}
            {{--<a class="nav-link" href="/admin/bakery/list">Home</a>--}}
            {{--<a class="nav-link{{$currentPage=='bakery-list'?' active':''}}" href="/admin/bakery/list">Bakery Manager</a>--}}
            {{--<a class="nav-link" href="/admin/category">Category Manager</a>--}}
            {{--<a class="nav-link" href="/admin/article">Article Manager</a>--}}
            {{--<a class="nav-link" href="#v-pills-settings">Settings</a>--}}
        {{--</div>--}}
    {{--</nav>--}}
    <main class="col-md-10">

    </main>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2018 FPT Aptech</p>
</footer>

</body>
</html>