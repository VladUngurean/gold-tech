@extends('layouts.panel')

@section('content')
    <h1>Create review</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{route('review.store')}}" class="flex flex-col gap-4 max-w-60 text-black">
        @csrf
        @method('post')
        <input class="p-2" type="text" required name="client_name" placeholder="client_name"/>
        <input class="p-2" type="date" required name="review_post_date" placeholder="review_post_date"/>
        <textarea class="p-2" required name="review_content" placeholder="review_content" ></textarea>
        <input class="p-2" type="text" required name="project_name" placeholder="project_name"/>
        <input class="p-2" type="date" required name="project_realisation_date" placeholder="project_realisation_date"/>

        <button type="submit" class="text-amber-50">Create Review</button>
    </form>
@endsection
