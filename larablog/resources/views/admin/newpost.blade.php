@extends('layout.app')
@section('content')
<main>
  @include('flash::message')
  <h1>Enregistrer les métas données d'un article en DB</h1>
  <div class="createform__container">
    <form action="" method="post">
      {{ csrf_field() }}
      <div class="mb-3">
        <label for="author" class="form-label">Auteur :</label>
        <input type="text" name="author" class="form-control" >
        @if ($errors->has('author'))
        <p class="flash-error">*{{ $errors->first('author') }}</p>
        @endif
      </div>
      <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" name="title" class="form-control" >
        @if ($errors->has('title'))
        <p class="flash-error">*{{ $errors->first('title') }}</p>
        @endif
      </div>
      <div class="mb-3">
        <label for="short" class="form-label">Courte description :</label>
        <textarea name="short" cols="30" rows="10" class="form-control" ></textarea>
        @if ($errors->has('short'))
        <p class="flash-error">*{{ $errors->first('short') }}</p>
        @endif
      </div>
      <div class="mb-3">
        <label for="content_path" class="form-label">Chemin fichier :</label>
        <input type="text" name="content_path" class="form-control" >
        @if ($errors->has('content_path'))
        <p class="flash-error">*{{ $errors->first('content_path') }}</p>
        @endif
      </div>
      <div class="mb-3">
        <label for="read_duration" class="form-label">Durée de lecture (mn):</label>
        <input type="number" name="read_duration" class="form-control" min="5" max="60">
        @if ($errors->has('read_duration'))
        <p class="flash-error">*{{ $errors->first('read_duration') }}</p>
        @endif
      </div>

      <div class="mb-3">
        <label for="categorie1" class="form-label">Catégorie:</label>
        <select class="form-select" name="categorie1" >
            <option value=""></option>
            @foreach ($categories as $category)
            <option value="{{$category->name}}">{{$category->name}}</option>
          @endforeach
        </select>
        @if ($errors->has('categorie1'))
        <p class="flash-error">*{{ $errors->first('categorie1') }}</p>
        @endif
      </div>

      <div class="mb-3">
        <label for="categorie2" class="form-label">Autre catégorie:</label>
        <select class="form-select" name="categorie2" >
            <option value=""></option>
            @foreach ($categories as $category)
            <option value="{{$category->name}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Valider</button>
      </div>
    </form>
  </div>
</main>
@endsection
