<?php include('head.php'); ?>
  <body>
  	<?php include('nav.php'); ?>
<div class="container">

<!-- Modal -->
<?php include('modal.php'); ?>



    <h1 class="text-center mt-5 "> Sweet Home </h1>
    <img src="images\house.jpg" class="img-fluid mt-5 rounded mx-auto d-block" height="50%" width="60%" alt="Responsive image">
    <h1 class="text-center mt-5"> Best Property </h1>
<div class="card-deck mt-5">
  <div class="card">
    <img src="images\hall.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-text">location : Mumbai</h5>
      <h5 class="card-text">price    : 10 Lakh</h5>
      <h5 class="card-text">room     : 1 BHK </h5>
    </div>
  </div>
  <div class="card">
    <img src="images\bedroom.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-text">location : Panvel</h5>
      <h5 class="card-text">price    : 10 Lakh</h5>
      <h5 class="card-text">room     : 1 BHK </h5>
    </div>
  </div>
  <div class="card">
    <img src="images\room.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-text">location : Taloja</h5>
      <h5 class="card-text">Price    : 10 Lakh</h5>
      <h5 class="card-text">room     : 1 BHK </h5>
    </div>
  </div>
</div>


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

      <?php include('footer.php'); ?>
     

        //-------------------------------------------------------------------------------------
        <script type="text/javascript">

          $(document).ready(function(){
            $('#emailcheck').hide();
            var email_err = true;
        $("#inputemail").keyup(function(){
          if(validateEmail()){
           $('#emailcheck').show();
           $('#emailcheck').html("**validated");
           $('#emailcheck').css("color","green");
           $("#email").css("border","2px solid green");
           $("#emailMsg").html("<p class='text-success'>Validated</p>");
         }else{
           $('#emailcheck').show();
           $('#emailcheck').html("**un-validated");
           $('#emailcheck').css("color","red");
           $("#email").css("border","2px solid red");
           $("#emailMsg").html("<p class='text-danger'>Un-validated</p>");
         }
         });
         
       function validateEmail(){
        var email=$("#inputemail").val();
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
          });
        
        </Script>
         //-------------------------------------------------------------------------------------
        </body>
        </html>
        
