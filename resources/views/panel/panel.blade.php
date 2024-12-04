@extends('layouts.panel')

@section('content')
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
                <h2 class="font-bold text-3xl mb-8">Projects</h2>

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
@endsection
