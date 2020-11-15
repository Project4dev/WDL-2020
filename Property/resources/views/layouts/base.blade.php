<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/css\style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- CSS for login -->
<link href="css\carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css\login.css">
<link href="album.css" rel="stylesheet">
<link href="{{ asset('/CustomAuth/css/css1/bootstrap.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('/CustomAuth/css/css1/footer.css') }}" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('/CustomAuth/css/realst.css') }}">


    <!-- <link href="css\carousel.css" rel="stylesheet"> -->
    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css\signin.css" rel="stylesheet"> -->


    <title>Welcome To SweetHome!</title>
    <!-- <style>
    #fix-footer{
        position: fixed;
        left: 0px;
        bottom: 100px;
        height: 350px;
        width: 100%;
        background: black;
              }
    </style> -->
  </head>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
<ul class="navbar-nav mr-auto">
  <a class="navbar-brand" href="#"><img src="{{ asset('images\favicon.ico') }}">   SweetHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  @if (Route::has('login'))
  @auth
  <li class="nav-item active">
                <a class="nav-link" href="#">{{Auth::user()->email}}</a>
  </li>
</ul>
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item active">
        <a class="nav-link " href="{{ url('/home') }}">Home<span class="sr-only">(current)</span></a>
      </li>
      <!-- <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link " href="{{ url('/home') }}">Home<span class="sr-only">(current)</span></a>
          </li>
          </ul>
      </div> -->
      <li class="nav-item">
      <a class="nav-link active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('rent') }}" >Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('buy') }}" >BUY/SELL</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="{{ url('/search') }}"  >Search</a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link  " href="{{ url('contact') }}">Contact <span class="sr-only">(current)</span></a>
      </li> -->
    @else
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('login') }}" >Login</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('register') }}" >Register</a>
          </li>
      @endif

      <li class="nav-item">
        <a class="nav-link active" href="{{ url('rent') }}" >Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('buy') }}" >BUY/SELL</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="{{ url('/search') }}"  >Search</a>
      </li>
      <!-- @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('register') }}" >Register</a>
          </li>
      @endif -->
  @endif
      
      <!-- <li class="nav-item active">
        <a class="nav-link" href="about.php">About Us</a>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link active" href="{{ url('rent') }}" >Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('buy') }}" >BUY/SELL</a>
      </li> -->

      <!-- <li class="nav-item active">
        <a class="nav-link  " href="{{ url('contact') }}">Contact <span class="sr-only">(current)</span></a>
      </li> -->


      <!-- <li class="nav-item"> -->

       <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->
<!-- 
        <a class="nav-link active" href="{{ url('/search') }}"  >Search</a>
      </li> -->
    
      <!-- <li class="nav-item">
        <a class="nav-link active" href="{{ url('rent') }}" >Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ url('buy') }}" >BUY/SELL</a>
      </li> -->

     
    </ul>
    <!-- @endif -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<body>
  <div >
    
    @yield('contents')

</div>
<footer>
        <div class="flex container">
            <div class="footer-about">
                <h5>About Sweethome</h5>
                <p></p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{url('rent')}}">Rental homes</a></li>
                    <li><a href="{{ url('all-post') }}">Properties</a></li>
                    <li><a href="{{url('sell')}}">Sell you Property</a></li>
                    <li><a href="{{url('buy')}}">buy best properties</a></li>
                </ul>
            </div>

            <div class="footer-subscribe">
                <h5> subscribe to our website</h5>
                <div id="subscribe-container">
                    <input type="text" placeholder="Enter Email" />
                    <button class="right-rounded">Send</button>
                </div>

                <h5 class="follow-us">Follow Us</h5>
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>

        <small>
            Copyright &copy; 2020 All rights reserved | SweetHome <span class="fa fa-heart">
        </small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- <div class="content-main">scroll</div> -->
</body>

</html>

