@extends('layouts.panel')

@section('content')
    <h1>Review Page</h1>

    <a href="{{ url('/panel/reviews/create') }}">
        <div>Add new Review</div>
    </a>

    <div class="panel-main__body-content">
        @foreach($reviews as $review)

        <div class="panel-main__body-content-element">
            <div class="panel-main__body-content-element__title">
                {{$review->project_name}}
            </div>

            <div class="panel-main__body-content-element__img">
                <img src="{{asset('/images/avif/girl.avif')}}" alt="">
            </div>

            <div class="panel-main__body-content-element__text">
                {{$review->review_content}}
            </div>

            <div class="panel-main__body-content-element__date">
                {{$review->review_post_date}}
            </div>

            <div class="panel-main__body-content-element__ed">
                <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                <img src="{{asset('/images/svg/delete.svg')}}" alt="">
            </div>
        </div>

        @endforeach

    </div>


@endsection
