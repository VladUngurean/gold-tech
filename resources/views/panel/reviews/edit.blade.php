@extends('layouts.panel')

@section('content')
    <h1>Edit review</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{route('review.update', ['review' => $review])}}" class="flex flex-col gap-4 max-w-60 text-black">
        @csrf
        @method('put')
{{--        @dd($review)--}}
        <input class="p-2" type="text" required name="client_name" placeholder="client_name" value="{{$review->client_name}}"/>
        <input class="p-2" type="date" required name="review_post_date" placeholder="review_post_date" value="{{$review->review_post_date}}"/>
        <textarea class="p-2" required name="review_content" placeholder="review_content" >{{$review->review_content}}</textarea>
        <input class="p-2" type="text" required name="project_name" placeholder="project_name" value="{{$review->project_name}}"/>
        <input class="p-2" type="date" required name="project_realisation_date" placeholder="project_realisation_date" value="{{$review->project_realisation_date}}"/>

        <button type="submit" class="text-amber-50">Edit Review</button>
    </form>
@endsection
