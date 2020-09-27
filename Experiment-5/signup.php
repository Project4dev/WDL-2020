
<?php include('head.php'); ?>
<!-- -------Previous code of head--------- -->
<!--  <!doctype html>
<html>
<head>
  <meta charset="utf-8">

    <title>Sign Up Page</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head> -->
<body>

<?php include('nav.php'); ?>
<!-- -----------------Previous code of navbar-------------- -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="images\favicon.ico">   SweetHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link " href="login.php">Sign In<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
 -->

<div class="container"><br><br>
  <h1 class="text-center text-warning"> Sign Up Form </h1>
  <div class ="col-lg-8 m-auto d-block"><br>
  <br><br>
  <form>
  <label for="userfirstname">First name:</label>
  <input type="text" id="usernames" name="username" class="form-control"placeholder="first name" >
  <h5 id = "usercheck"></h5>
  <br><br>

  <label for="usersecondname">Last name:</label>
  <input type="text" id="lastnames" name="lastname" class="form-control" placeholder="Second name">
  <h5 id = "lastcheck"></h5>
  <br><br>
  
  <label for="email">Enter Email:</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
  <h5 id = "emailcheck"></h5>
  <br><br>
  
  <label for="pass">Enter Password:</label>
  <input type="password" id="pass" name="pass" class="form-control">
  <h5 id = "passchecker"></h5><br><br>
  
  <label for="pass1">Re-Enter Password:</label>
  <input type="password" id="pass1" name="pass1" class="form-control">
  <h5 id = "pass1check"></h5>
  <br><br>
  
  <a href="login.php" class="btn-success"><input type="button" class="btn-primary" id="btn" value="SUBMIT"></a>
  
  </form>
</div>
 <script type="text/javascript">

  $(document).ready(function(){
    $('#usercheck').hide();
    $('#lastcheck').hide();
    $('#emailcheck').hide();
    $('#passchecker').hide();
    $('#pass1check').hide();
    $("#btn").hide();

   

    //-----------------------------------------------------------------------------------------------------------------

    $('#usernames').keyup(function(){
      username_check();
     });


    function username_check(){
      var firstname_val = $('#usernames').val();
       if(firstname_val.length == '')
       {
        $('#usercheck').show();
        $('#usercheck').html("**Pleace Fill The Firstname");
        $('#usercheck').css("color","red");
        $("#usernames").css("border","2px solid red");
        user_err = false;
        return false;

      }else{
        $('#usercheck').hide();
        $("#usernames").css("border","2px solid green");
           }

       if((firstname_val.length <3 )||(firstname_val.length>10))
       {
        $('#usercheck').show();
        $("#usernames").css("border","2px solid red");
        $('#usercheck').html("**user name length is between 3 to 10");
        $('#usercheck').css("color","red");
        user_err = false;
        return false;

       }else{
        $('#usercheck').hide();
        $("#usernames").css("border","2px solid green");
            }
      }


       //-------------------------------------------------------------------------------------------------------------------------


      $('#lastnames').keyup(function(){
      lastname_check();
     });


    function lastname_check(){
      var lastname_val = $('#lastnames').val();
       if(lastname_val.length == '')
       {
        $('#lastcheck').show();
        $('#lastcheck').html("**Pleace Fill The lastname");
        $('#lastcheck').css("color","red");
        $("#lastnames").css("border","2px solid red");
        luser_err = false;
        return false;

      }else{
        $('#lastcheck').hide();
        $("#lastnames").css("border","2px solid green");
           }

       if((lastname_val.length <3 )||(lastname_val.length>10))
       {
        $('#lastcheck').show();
        $("#lastnames").css("border","2px solid red");
        $('#lastcheck').html("**user last name length is between 3 to 10");
        $('#lastcheck').css("color","red");
        lname_err = false;
        return false;

       }else{
        $('#lastcheck').hide();
        $("#lastnames").css("border","2px solid green");
            }
      }

      ////-----------------------------------------------------------------------------------------------------------------------
      
      $("#email").keyup(function(){
			 if(validateEmail()){
        $('#emailcheck').show();
        $('#emailcheck').html("**validated");
        $('#emailcheck').css("color","green");
				$("#email").css("border","2px solid green");
			
			}else{
				$('#emailcheck').show();
        $('#emailcheck').html("**un-validated");
        $('#emailcheck').css("color","red");
				$("#email").css("border","2px solid red");
			
			} buttonState();
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
    //-------------------------------------------------------------------------------------------------------------------
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


    //-------------------------------------------------------------------------------------------------------------------
      
    function validatePassword1(){
		var pass=$("#pass1").val();
    var password= $('#pass').val();
		if(pass = password ){
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
//---------------------------------------------bottun-----------------------------------------------------
       function buttonState(){
		if(validateEmail()  && validatePassword()){
			$("#btn").show();
		}else{
			$("#btn").hide();
		}
	   }
  //-----------------------------------------------------------------------------------------------------------
});
 </script>
  

</body>
</html>