@extends('layouts.main')

@section('content')

<!-- Login card -->
<br>
<br>
<div class="row">
  <div class="col s12 m6 offset-m3">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Daftar</span>
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
              <button class="btn waves-effect waves-light pink" type="submit" name="action">Daftar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection