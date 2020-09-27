<?php include('head.php'); ?>
<body>
<?php include('nav.php'); ?>
<!-- Previou navvar code -->
<!--   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="images\favicon.ico">   SweetHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link " href="signup.html">Sign Up<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav> -->
<div class="container"><br><br>
  <h1 class="text-center text-warning"> LOGIN </h1>
  <div class ="col-lg-8 m-auto d-block"><br>
  <form method="POST"  action="loginrequest.php">
  <br>
  <br>
  <h1> Login Form</h1>
  <label for="email">Enter Email:</label>
  <input type="email" id="email" name="email" placeholder="Enter Email">
  <h5 id = "emailcheck"></h5>
  
  <br><br>
  
  <label for="pass">Enter Password:</label>
  <input type="password" id="pass" name="pass" placeholder="Enter Password">
  <h5 id = "passchecker"></h5><br><br>

  <a href="index.php" ><input type="button" class="btn-primary" id="btn" value="SUBMIT"></a>
  
  </form>
</div>


 
      
   <script type="text/javascript">

    $(document).ready(function(){
    $('#emailcheck').hide();
    $('#passchecker').hide();
    $("#btn").hide();

    
      //-------------------------------------------------------email-------------------------------------------------------------------

      $("#email").keyup(function(){
			 if(validateEmail()){
        $('#emailcheck').show();
        
        $('#emailcheck').css("color","green");
				$("#email").css("border","2px solid green");
				$("#emailcheck").html("<p class='text-success'>**Validated</p>");
			}else{
				$('#emailcheck').show();
        $('#emailcheck').css("color","red");
				$("#email").css("border","2px solid red");
				$("#emailcheck").html("<p class='text-danger'>**Un-validated</p>");
			}buttonState();
			});
      
    function validateEmail(){
		 var email=$("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email))
     {
		 	return true;
		 }else
     {
		 	return false;
		 }
     }
      

      //------------------------------------------------------passs-----------------------------------------------------------



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
//------------------------------------------------------buttn-----------------------------------------------------------

    function buttonState(){
		if(validateEmail() && validatePassword()){
			// if the both email and password are validate
			// then button should show visible
			$("#btn").show();
		}else{
			// if both email and pasword are not validated
			// button state should hidden
			$("#btn").hide();
		}
	}
    
});
</Script>
</body>
</html>