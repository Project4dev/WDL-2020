
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{ asset('/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/ vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/css/main.css') }}">
<!--===============================================================================================-->




</head>
<body>
  <div class="limiter mt-5">
    <div class="container-login100">
      <div class="wrap-login100">
       
        <form method="POST" class="login100-form validate-form"  action="{{ route('login') }}">
        @csrf
          <span class="login100-form-title p-b-26">
            Welcome
          </span>
          <span class="login100-form-title p-b-50">
            <!-- <i class="zmdi zmdi-font"></i> -->
            <li><img src="images/user.jpg" height="40%" width="40%"></li>
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input  id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100" data-placeholder="Email"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input id="password" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="focus-input100" data-placeholder="Password"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>
          <div class="form-check">
            <input    class="form-check-input ml-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label ml-2" for="remember">Remember Me</label>
          </div>


          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <!-- <button class="login100-form-btn" name="btnLogin" type="submit">
                Login 
              
              </button> -->
              <button type="submit" class=" login100-form-btn">
                                    {{ __('Login') }}
              </button>
            </div>  
          </div>
          <div class="text-center p-t-10">
            <span class="txt1">
              Forgot Password?
            </span>

            <a class="txt2" href="{{ route('password.request') }}">
              Click here
            </a>
          </div>
          <div class="text-center p-t-20">
            <span class="txt1">
              Don’t have an account?
            </span>

            <a class="txt2" href="{{ url('/newregister') }}">
              Sign Up
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('/CustomAuth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('/CustomAuth/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/CustomAuth/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>