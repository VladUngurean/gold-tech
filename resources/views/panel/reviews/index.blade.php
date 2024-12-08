@extends('layouts.panel')

@section('content')

    <div class="flex flex-row items-center gap-4 mb-8">
        <h1 class="font-bold text-3xl">Review Page</h1>

        <a href="{{ url('/panel/reviews/create') }}">
            <div>Add new Review +</div>
        </a>
    </div>

    <div class="panel-main__body-content">
        @foreach($reviews as $review)

        <div class="panel-main__body-content-element">
            <div class="panel-main__body-content-element__title">
                {{$review->client_name}}
            </div>

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
                <a href="{{route('review.edit', ['review' => $review])}}">
                    <img src="{{asset('/images/svg/edit.svg')}}" alt="">
                </a>
                <a href="">
                    <form method="post" action="{{route('review.delete', ['review' => $review])}}">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            <img src="{{asset('/images/svg/delete.svg')}}" alt="">
                        </button>
                    </form>
                </a>
            </div>
        </div>

        @endforeach

    </div>


@endsection
