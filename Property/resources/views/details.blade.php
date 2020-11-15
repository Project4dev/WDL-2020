<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home Details</title>

  </head>
  <body class="">
    <!-- <h1>{{ $sell}}</h1> -->

        <!-- <img src="{{ asset('uploads/sell/' . $sell->image) }}" class=".img-fluid. max-width: 100%;" height="500" width="800">  -->
        <!-- <img src="{{ asset('uploads/sell/' . $sell->image) }}" class="img-fluid " style="height: 800px;max-width: 800px" alt="Responsive image"> -->
        <img src="{{ asset('uploads/sell/' . $sell->image) }}" height="40%" width="50%" class="rounded mx-auto d-block mt-5 mb-5 shadow-lg p-3 mb-5 bg-white rounded" alt="">
        <div class="text-md-left ml-5 mt-5">
        <h3>Name  &nbsp&nbsp : &nbsp &nbsp   {{ $sell->name}} </h3><br>
        <h3>Email &nbsp &nbsp  : &nbsp &nbsp  {{ $sell->email}} </h3><br>
        <h3>Phone   &nbsp &nbsp: &nbsp &nbsp   {{ $sell->phone}} </h3><br>
        <h3>location : &nbsp &nbsp   {{ $sell->add1}} {{$sell->add2}} <br>{{ $sell->city}} {{$sell->state}} {{$sell->zip}}</h3><br>
        <h3>Kitchen size &nbsp &nbsp :&nbsp &nbsp {{ $sell->ksize}} </h3><br>
        <h3>Washrooms  &nbsp &nbsp : &nbsp  &nbsp  {{ $sell->nwash}} </h3><br>
        <h3>House Type &nbsp &nbsp : &nbsp &nbsp    {{ $sell->housetype}} </h3><br>
        <h3>Price &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp     {{ $sell->price}} </h3><br>
        
        </div>
        

     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

