<?php include('head.php'); ?>
<body>
<?php include('nav.php'); ?>
<main role="main">



  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
         <?php require('connect.php'); 
           $sql="SELECT * from sell ";
           $result = $conn->query($sql);
           // $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
           $rows = mysqli_num_rows($result);
           if ($result->num_rows > 0) {
  // output data of each row
            while($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

          ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <!--  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          
          
           <img src='images.jpg' height='227' width='348'>

            <div class='card-body'>
              <p class='card-text'><b>location</b> : <?php echo $row['state'] ?><br> 
                                   <b>Price</b>    : <?php echo $row['Price'] ?><br>
                                   <b>room type</b>: <?php echo $row['house_type'] ?> <br></p>
              <div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                  <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
                  <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>
                </div>
                <small class='text-muted'>9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
      <?php   }
          } 
          else {
       echo "0 results";
        } ?>
        
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Sweethome all rights reserved &copy; </p>
   
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
