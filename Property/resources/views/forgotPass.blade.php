
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset your password</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <!-- <?php //include('nav.php'); ?> -->
  <div class="limiter mt-5">
    <div class="container-login100 ">
      <div class="wrap-login100 ">
        <form method="POST" class="login100-form validate-form" action="{{ route('password.email') }}">
        @csrf
          <span class="text-center p-b-20">
            <h3 class="mb-5">Reset  Password</h3>
          </span>


          <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input  id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100" data-placeholder="Enter your Email"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="btnSignup">
                Send Password Reset Link
              </button>
            </div>
          </div>

          <div class="text-center p-t-15">
            <span class="txt1">
              You have an account?
            </span>

            <a class="txt2" href="{{ url('/home') }}">
              login
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
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






        










<!--   <script type="text/javascript">
    

function validatePassword(){
    var pass=$("#pass").val();
    if(pass.length > 7){
      return true;
    }else{
      return false;
    }
    }

   $("#pass").keyup(function(){
      if(validatePassword()){
        $('#passchecker').show();
        $("#pass").css("border","2px solid green");
        $("#passchecker").html("<p class='text-success'>Password validated</p>");
      }else{
        $('#passchecker').show();
        $("#pass").css("border","2px solid red");
        $("#passchecker").html("<p class='text-danger'>Password not valid (password length > 7)</p>");
      }
      buttonState();

    });

    function validatePassword1(){
    var pass=$("#pass1").val();
    var password= $('#pass').val();
    if(pass == password ){
      return true;
    }else{
      return false;
    }
    }

   $("#pass1").ready(function(){
      if(validatePassword1()){
        $('#pass1check').show();
        $("#pass1").css("border","2px solid green");
        $("#pass1check").html("<p class='text-success'>**password match successfully</p>");
      }else{
        $('#pass1check').show();
        $("#pass1").css("border","2px solid green");
        $("#pass1check").html("<p class='text-danger'>**password not match successfully</p>");
      }
      
    });

  </script> -->

</body>
</html>