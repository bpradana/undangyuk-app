@extends('layouts.main')

@section('content')

<!-- Login card -->
<br>
<br>
<div class="row">
  <div class="col s12 m6 offset-m3">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Masuk</span>
        <form action="login.php" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input id="username" type="text" class="validate" name="username">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" name="password">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light pink" type="submit" name="action">Masuk
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col s12">
            <a class="waves-effect waves-light" href="signup.html">Belum punya akun?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection