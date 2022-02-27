@extends('layout.app')
@section('content')
    @include('partials.content.categorie_filter')

    <div class="post__list">
        @for ($i = 0; $i < 5; $i++)
            @include('partials.content.post_card')
        @endfor
    </div>
    @include('partials.content.paging')
@endsection
