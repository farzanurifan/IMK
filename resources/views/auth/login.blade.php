<!DOCTYPE html>
<html>
<head>
  @include('inc.head')
</head>
<body class="login-page">
  <div class="login-box">
      <div class="logo">
          <a href="javascript:void(0);">Web <b>SAI</b></a>
          <small>Institut Teknologi Seopuluh Nopember</small>
      </div>
      <div class="card">
          <div class="body">
              <form id="sign_in" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                  <div class="msg">Sign in to start your session</div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">person</i>
                      </span>
                      <div class="form-line{{ $errors->has('email') ? ' has-error' : '' }}">
                          <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                      <div class="form-line{{ $errors->has('password') ? ' has-error' : '' }}">
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-8 p-t-5">
                          <input type="checkbox" name="remembers" id="rememberme" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>
                          <label for="rememberme" >Remember Me</label>
                      </div>
                      <div class="col-xs-4">
                          <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                      </div>
                  </div>
                  <div class="row m-t-15 m-b--20">
                      <div class="col-xs-6">
                          <a href="/register">Register Now!</a>
                      </div>
                      <div class="col-xs-6 align-right">
                          <a  href="{{ route('password.request') }}">Forgot Password?</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>



<!-- Validation Plugin Js -->
<script src="../../plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="js/pages/examples/sign-in.js"></script>
</body>
</html>
