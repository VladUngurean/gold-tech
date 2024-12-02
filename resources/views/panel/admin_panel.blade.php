<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    @vite(['resources/css/app.css', 'resources/scss/global.scss', 'resources/scss/panel/panel.scss', 'resources/js/app.js'])
</head>
<body class="body_panel">

<main class="panel">

    <section class="panel-side">
        <img class="panel-side__logo" src="{{asset('/images/svg/laravel.svg')}}" alt="">

        <div class="panel-side__container">
            <div class="panel-side__nav">
                <div class="panel-side__nav-element">
                    <img class="panel-side__nav-element__img" src="{{asset('/images/svg/posts.svg')}}" alt="">
                    <span class="panel-side__nav-element__title">Posts</span>
                </div>
                <div class="panel-side__nav-element">
                    <img class="panel-side__nav-element__img" src="{{asset('/images/svg/review.svg')}}" alt="">
                    <span class="panel-side__nav-element__title">Reviews</span>
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
            <h2 class="font-bold text-3xl mb-8">Posts</h2>

            <div class="panel-main__body-content">
                <div class="panel-main__body-content-element">
                    <div class="panel-main__body-content-element__title">
                        Title
                    </div>

                    <div class="panel-main__body-content-element__img">
                        <img src="{{asset('/images/avif/girl.avif')}}" alt="">
                    </div>

                    <div class="panel-main__body-content-element__text">
                        Text Text content Text contentText content Text contentText content Text contentText content Text contentText content Text contentText content Text content content Text content
                    </div>

                    <div class="panel-main__body-content-element__date">
                        20.12.2000
                    </div>

                    <div class="panel-main__body-content-element__ed">
                        <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                        <img src="{{asset('/images/svg/delete.svg')}}" alt="">
                    </div>
                </div>
                <div class="panel-main__body-content-element">
                    <div class="panel-main__body-content-element__title">
                        Title
                    </div>

                    <div class="panel-main__body-content-element__img">
                        <img src="{{asset('/images/avif/girl.avif')}}" alt="">
                    </div>

                    <div class="panel-main__body-content-element__text">
                        Text Text content Text contentText content Text contentText content Text contentText content Text contentText content Text contentText content Text content content Text content
                    </div>

                    <div class="panel-main__body-content-element__date">
                        20.12.2000
                    </div>

                    <div class="panel-main__body-content-element__ed">
                        <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                        <img src="{{asset('/images/svg/delete.svg')}}" alt="">
                    </div>
                </div>
                <div class="panel-main__body-content-element">
                    <div class="panel-main__body-content-element__title">
                        Title
                    </div>

                    <div class="panel-main__body-content-element__img">
                        <img src="{{asset('/images/avif/girl.avif')}}" alt="">
                    </div>

                    <div class="panel-main__body-content-element__text">
                        Text Text content Text contentText content Text contentText content Text contentText content Text contentText content Text contentText content Text content content Text content
                    </div>

                    <div class="panel-main__body-content-element__date">
                        20.12.2000
                    </div>

                    <div class="panel-main__body-content-element__ed">
                        <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                        <img src="{{asset('/images/svg/delete.svg')}}" alt="">
                    </div>
                </div>
                <div class="panel-main__body-content-element">
                    <div class="panel-main__body-content-element__title">
                        Title
                    </div>

                    <div class="panel-main__body-content-element__img">
                        <img src="{{asset('/images/avif/girl.avif')}}" alt="">
                    </div>

                    <div class="panel-main__body-content-element__text">
                        Text Text content Text contentText content Text contentText content Text contentText content Text contentText content Text contentText content Text content content Text content
                    </div>

                    <div class="panel-main__body-content-element__date">
                        20.12.2000
                    </div>

                    <div class="panel-main__body-content-element__ed">
                        <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                        <img src="{{asset('/images/svg/delete.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

</body>
</html>
