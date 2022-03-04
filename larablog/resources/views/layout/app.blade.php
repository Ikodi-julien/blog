<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog Ikodi</title>
</head>
<body>
    @include('partials.header.header')
    @yield('content')
    @include('partials.footer.footer')
</body>
<script type="module" src="{{ asset('js/app.js')}}"></script>
</html>
