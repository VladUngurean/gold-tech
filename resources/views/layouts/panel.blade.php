<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/global.scss', 'resources/scss/panel/panel.scss', 'resources/js/app.js'])

    <title>Panel</title>
</head>
<body class="body_panel">

<main class="panel">

    <section class="panel-side">
        <a href="{{ url('/') }}">
            <img class="panel-side__logo" src="{{asset('/images/svg/logo.svg')}}" alt="">
        </a>

        <div class="panel-side__container">
            <div class="panel-side__nav">
                <div class="panel-side__nav-element">
                    <img class="panel-side__nav-element__img" src="{{asset('/images/svg/posts.svg')}}" alt="">
                    <span class="panel-side__nav-element__title">Projects</span>
                </div>
                <div class="panel-side__nav-element">
                    <a href="{{ url('/panel/reviews') }}">
                        <img class="panel-side__nav-element__img" src="{{asset('/images/svg/review.svg')}}" alt="">
                        <span class="panel-side__nav-element__title">Reviews</span>
                    </a>
                </div>
                <hr class="my-6">
                <div class="panel-side__nav-element">
                    <img class="panel-side__nav-element__img" src="{{asset('/images/svg/statistics.svg')}}" alt="">
                    <span class="panel-side__nav-element__title">Statistics</span>
                </div>
            </div>

            <div class="panel-side__bottom">
                <img class="panel-side__logo" src="{{asset('/images/svg/settings.svg')}}" alt="">
                <hr class="my-6 w-[100%]">
                <img class="panel-side__logo" src="{{asset('/images/svg/logout.svg')}}" alt="">
            </div>
        </div>
    </section>

    <section class="panel-main">
        <div class="panel-main__header">
            <div class="flex items-center font-bold text-3xl">Admin Panel</div>

            <div class="panel-main__header__user">
                <img src="{{asset('/images/avif/girl.avif')}}" alt="">
            </div>

        </div>

        <div class="panel-main__body">
            @yield('content')
        </div>
    </section>

</main>

</body>
</html>
