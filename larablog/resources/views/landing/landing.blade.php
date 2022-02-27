@extends('layout.app')
@section('content')
<main>
    @include('partials.content.hero')
    @include('partials.content.latest_posts')
    @include('partials.content.categorie_filter')
</main>
@endsection
