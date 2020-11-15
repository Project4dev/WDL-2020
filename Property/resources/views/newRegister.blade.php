
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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

<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password.value; 
                password2 = form.password_confirmation.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Match: Welcome to Sweethome!") 
                    return true; 
                } 
            } 
        </script> 


</head>
<body>
  <!-- <?php //include('nav.php'); ?> -->
  <div class="limiter mt-5">
    <div class="container-login100 ">
      <div class="wrap-login100 ">
        <form method="POST" class="login100-form validate-form" onSubmit = "return checkPassword(this)" action="{{ route('register') }}">
          @csrf
          <span class="login100-form-title p-b-20">
            Welcome
          </span>
          <span class="login100-form-title p-b-25 ">
            <!-- <i class="zmdi zmdi-font "></i> -->
          <li><img src="images/user.jpg" height="40%" width="40%"></li>

          </span>

          <div class="wrap-input100 validate-inpu " >
            <input  id="name" type="text" class="form-control input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <span class="focus-input100" data-placeholder="First Name"></span>
            @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>

          <div class="wrap-input100 validate-inpu " >
            <input  id="lname" type="text" class="form-control input100 @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="name" autofocus>
            <span class="focus-input100" data-placeholder="Last Name"></span>
            @error('lname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>
          <!-- <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="lname">
            <span class="focus-input100" data-placeholder="Last Name"></span>
          </div> -->

          <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input  id="email" type="email" class="input100 form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <span class="focus-input100" data-placeholder="Email"></span>
            @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>
          
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <!-- <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>

            </span> -->
            <input  id="password" type="password" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="Password"></span>
            @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter again">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input  id="password-confirm" type="password" class="form-control input100" name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="Retype-Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="btnSignup">
                Signup
              </button>
            </div>
          </div>

          <div class="text-center p-t-15">
            <span class="txt1">
              You have an account?
            </span>

            <a class="txt2" href="{{ url('/newlogin') }}">
              login
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