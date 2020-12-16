<?php include('head.php') ; ?>
<body>
  
 <?php include('nav.php'); ?>


  <div class="container"align="center >
    <br><br>
    
    <div class ="col-lg-8 m-auto d-block"><br>
    <form>
    <br>
    <br>
    <h1 class="text-center"> Contact Form</h1>
    <label for="user">Name</label>
    <input type="text" class="mt-5" id="name" name="username" placeholder="user name">
    <h5 id = "usercheck"></h5>
    
    <br><br>
    
    <label for="exampleFormControlInput2">Email address</label>
    <br>
    <input type="email" class="form-control" id="gmail" placeholder="Enter Your Email-id">
    <h5 id = "gmailcheck"></h5>
  
    <br><br>
    <label for="exampleFormControlInput3">Description</label>
    <br>
    <textarea class="form-control" id="des" rows="5" column="6" placeholder="Enter Description"></textarea>
    <h5 id = "descheck"></h5>
    <br>
    <br>
    <a href="index.php" class="btn-success"><input type="button" class="btn-primary" id="btn" value="SUBMIT"></a>
    
    </form>
  </div>
  </div>

  <br>
  <h3 align="center"> EMAIL:-SeweetHome@gmail.com </h3>
  <h3 align="center">Number:-1234567890</h3>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


      <?php include('footer.php'); ?>
      
        </div>
      
        <script type="text/javascript">

          $(document).ready(function(){
          $('#emailcheck').hide();
          $('#gmailcheck').hide();
          $('#usercheck').hide();
          $('#descheck').hide();
          $("#btn").hide();
      
        
            //-------------------------------------------------------email1-------------------------------------------------------------------
            $("#gmail").keyup(function(){
             if(validategmail()){
              $('#gmailcheck').show();
              
              $('#gmailcheck').css("color","green");
              $("#gmail").css("border","2px solid green");
              $("#gmailcheck").html("<p class='text-success'>**Validated</p>");
            }else{
              $('#gmailcheck').show();
              $('#gmailcheck').css("color","red");
              $("#gmail").css("border","2px solid red");
              $("#gmailcheck").html("<p class='text-danger'>**Un-validated</p>");
            }buttonState();
            });
            
          function validategmail(){
           var gmail=$("#gmail").val();
          // 
           var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
           if(reg.test(gmail))
           {
             return true;
           }else
           {
             return false;
           }
           }
            
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
            }
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
            
      
            //------------------------------------------------------username-----------------------------------------------------------
      
      
            $('#name').keyup(function(){
      username_check();
     });
  
  
    function username_check(){
      var name_val = $('#name').val();
       if(name_val.length == '')
       {
        $('#usercheck').show();
        $('#usercheck').html("**Pleace Fill The user name");
        $('#usercheck').css("color","red");
        $("#name").css("border","2px solid red");
        return false;
  
      }else{
        $('#usercheck').hide();
        $("#name").css("border","2px solid green");
           }
  
       if((name_val.length <3 )||(name_val.length>50))
       {
        $('#usercheck').show();
        $("#user").css("border","2px solid red");
        $('#usercheck').html("**user name length is between 3 to 50");
        $('#usercheck').css("color","red");
        return false;
  
       }else{
        $('#usercheck').hide();
        $("#name").css("border","2px solid green");
            }
      }
  
      //------------------------------------------------------buttn-----------------------------------------------------------
      $('#des').keyup(function(){
        Description_check();
     });
  
  
    function Description_check(){
      var des_val = $('#des').val();
       if(des_val.length == '')
       {
        $('#descheck').show();
        $('#descheck').html("**Pleace Fill The Description");
        $('#descheck').css("color","red");
        $("#des").css("border","2px solid red");
        
        return false;
  
      }else{
        $('#descheck').hide();
        $("#des").css("border","2px solid green");
           }
  
       if((des_val.length <15 )||(des_val.length>100))
       {
        $('#descheck').show();
        $("#des").css("border","2px solid red");
        $('#descheck').html("**user name length is between 15 to 500");
        $('#descheck').css("color","red");
        user_err = false;
        return false;
  
       }else{
        $('#descheck').hide();
        $("#des").css("border","2px solid green");
            }
            }
            //-------------------------------------------------------------------------------------------------
          function buttonState(){
          if(validategmail()){
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