<!-- modal start -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Find Best Homes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<form method="POST" action="requests.php">
   
      <div class="modal-body">
      
        <!-- Example split danger button -->
<div class="form-group">

<div class="input-group mb-3 ">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01"><b>Min Price</b></label>
  </div>
  <select class="custom-select"  name="Min_price" id="inputGroupSelect01">
    <option selected>Choose minimum price</option>
    <option value="15">15 Lakh</option>
    <option value="28">18 Lakh</option>
    <option value="25">25 Lakh</option>
    <option value="35">35 Lakh</option>

  </select>
</div>



<!-- <div class="dropdown show ">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose State
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Maharashtra</a>
    <a class="dropdown-item" href="#">MP</a>
    <a class="dropdown-item" href="#">Panjab</a>
  </div>
</div> -->

<div class="input-group  mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Max Price</label>
  </div>
  <select class="custom-select" name="Max_price" id="inputGroupSelect01">
    <option selected>Choose Maximum Price</option>
    <option value="60">60 Lakh</option>
    <option value="90">90 Lakh</option>
    <option value="15000000">1.5 Crore</option>
    <option value="15100000">Above 1.5 Crore</option>

  </select>
</div>

<!-- <div class="dropdown show ml-3">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose City
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Panvel</a>
    <a class="dropdown-item" href="#">Amritsar</a>
    <a class="dropdown-item" href="#">Bhopal</a>
  </div>
</div> -->

<div class="input-group  mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Location</label>
  </div>
  <select class="custom-select" name="Location" id="inputGroupSelect01">
    <option selected>Choose Location</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="MP">MP</option>
    <option value="UP">UP</option>
    <option value="Tamil nadu">Tamil nadu</option>
    <option value="Panjab">Panjab</option>


  </select>
</div>

<!-- <div class="dropdown show ml-3">
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
 -->

 <div class="input-group  mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">House type</label>
  </div>
  <select class="custom-select" name="H_type" id="inputGroupSelect01">
    <option selected>Choose House type</option>
    <option value="1 RK">1 RK</option>
    <option value="1 BHK">1 BHK</option>
    <option value="2 BHK">2 BHK</option>
    <option value="3 BHK">3 BHK</option>
  </select>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="btnSearch" class="btn btn-primary">Find</button>
      </div>
       </div>
        </form>

  </div>
</div>
<!-- modal end -->