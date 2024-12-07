<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/global.scss', 'resources/scss/components/header.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body class="">
    @include('components.header')

    <section class="container p-5">
        @yield('content')
    </section>

    @include('components.footer')
</body>
</html>
