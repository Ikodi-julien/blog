@extends('layout.app')
@section('content')
<main class="form-signin">
    @include('flash::message')
    <form action="" method="POST">
    <h1 class="h3 mb-3 fw-normal">Connexion</h1>

    {{ csrf_field() }}
    <div class="form-floating">
      <input type="email" class="form-control" name="email" placeholder="Email">
      <label for="floatingInput">Email</label>
    </div>
    @if ($errors->has('email'))
    <p class="flash-error">*{{ $errors->first('email') }}</p>
    @endif
    <div class="form-floating">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>
    @if ($errors->has('password'))
    <p class="flash-error">*{{ $errors->first('password') }}</p>
    @endif
    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg btn-primary" type="submit">Valider</button>
  </form>
</main>
@endsection
