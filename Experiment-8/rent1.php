

<?php include('head.php'); ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
  
  <link rel="stylesheet" type="text/css" href="css\style.css">

</head> -->
<body>


  <div class="container-fluid">
  
  <?php include('nav.php'); ?>
       <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html"><img src="images\favicon.ico">   SweetHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
      <a class="nav-link " href="INDEX.html">Home<span class="sr-only">(current)</span></a>
    </li>
      
      <li class="nav-item active">
        <a class="nav-link  " href="contact.html">Contact <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="search_result.html" data-toggle="modal" data-target="#exampleModalCenter" >Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="rent.html" >Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.html" >Logout</a>
      </li>
    </ul> -->
    <!-- --------This is extra part of full form wala--------- -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
 <!--  </div>
</nav> -->



<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Find Best Homes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
      
        <!-- Example split danger button -->
<!-- <div class="btn-group">
<div class="dropdown show ">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose State
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Maharashtra</a>
    <a class="dropdown-item" href="#">MP</a>
    <a class="dropdown-item" href="#">Panjab</a>
  </div>
</div>
<div class="dropdown show ml-3">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose City
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Panvel</a>
    <a class="dropdown-item" href="#">Amritsar</a>
    <a class="dropdown-item" href="#">Bhopal</a>
  </div>
</div>
<div class="dropdown show ml-3">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Chose District
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Raigad</a>
    <a class="dropdown-item" href="#">Nasik</a>
    <a class="dropdown-item" href="#">Nagpur</a>
  </div>
</div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="search_result.html"><button type="button" class="btn btn-primary">Find</button></a>
      </div>
    </div>
  </div>
</div> -->
<!-- modal end -->






    <div class="images">
      <h3>Welcome</h3>
      <p>Here you will get a best house with minimum cost for rent</p>
    </div>

    
    <div class="text-center font-weight-bold bg-success mt-5 text_info">
      <p>Hera we have a list of cities with there price</p>
    </div>


    <!-- =============================Cards============================================-->

    <div class = "cards_item">
      <div class="row row_card">
        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg"  class="card-img img-fluid">
            <div class="card-body">
              <div class="card-title font-weight-bold text-center">
                Mumbai
              </div>
              <div class="card-text text-center">In mumbai</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg" class="card-img img-fluid" >
            <div class="card-body">
              <div class="card-title text-center font-weight-bold" >
                Chennai
              </div>
              <div class="card-text text-center">In Chennai</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg" class="card-img img-fluid" >
            <div class="card-body">
              <div class="card-title font-weight-bold text-center">
                Navi Mumbai
              </div>
              <div class="card-title text-center">In Navi Mumbai</div>
            </div>
          </div>
        </div>

      </div>


      <div class="row row_card1">
        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg" class="card-img img-fluid">

            <div class="card-body">
              <div class="card-title text-center font-weight-bold">Pune</div>
              <div class="card-text text-center">In Pune</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg" class="card-img img-fluid">

            <div class="card-body">
              <div class="card-title text-center font-weight-bold">Bangalore</div>
              <div class="card-text text-center">In Bangalore</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-sm">
          <div class="card">
            <img src="images\building.jpg" class="card-img img-fluid">

            <div class="card-body">
              <div class="card-title text-center font-weight-bold">Nasik</div>
              <div class="card-text text-center ">In Nasik</div>
            </div>
          </div>
        </div>

      </div>

    </div>


    <!-- =======================Footer============= -->

     <?php include('footer.php'); ?>


</body>
</html>

<?php include('modal.php'); ?>
