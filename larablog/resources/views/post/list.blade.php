@extends('layout.app')
@section('content')

    @include('partials.content.categorie_filter')

    <div class="post__list">
        @foreach ($posts as $post)
            @include('partials.content.post_card', ['post' => $post])
            {{-- {{ $post->title}} --}}
        @endforeach
    </div>
    @include('partials.content.paging')
@endsection
