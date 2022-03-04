@extends('layout.app')
@section('content')

<main>
  <div class="post__container">
    <?php include public_path('posts_html/' . $filePath . '/' . $filePath .  '.html'); ?>
  </div>
</main>

@endsection
