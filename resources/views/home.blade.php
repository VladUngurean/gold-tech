<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="test_div text-3xl">
    <h1 class="text-red-600">Home</h1>
    <br>
    <br> 
    <a href="{{ url('/panel') }}">Admin panel</a>
    <br>
    <br>
    <a href="{{ url('/register') }}">Create user</a>
    <br>
    <br>
    <a href="{{ url('/login') }}">Login</a>


</div>
</body>
</html>
