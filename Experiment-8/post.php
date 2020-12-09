<?php include('head.php'); ?>
<body>
  <?php include('nav.php'); ?>
<form method="post" action="post_function.php">
  <div class="container   mt-5 col-md-8 mx-auto ">
    <div class="col-lg-5 col-lg-offset-5"> 
  <div class=" form-row ">

    <div class="input-group  mb-3">

  <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">House type</label>
      </div>
      <select class="custom-select" name="H_type" id="inputGroupSelect01">
          <option selected>Choose House type</option>
          <option value="1 RK">1-RK</option>
          <option value="1 BHK">1-BHK</option>
          <option value="2 BHK">2-BHK</option>
          <option value="3 BHK">3-BHK</option>
      </select>
      </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control"  name="Add1" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="Add2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCity">City</label>
      <input type="text" name="City" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="State" class="form-control" required>
        <option selected>Choose state</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Panjab">Panjab</option>
        <option value="MP">MP</option>
        <option value="UP">UP</option>
        <option value="Rajesthan">Rajesthan</option>
        <option value="Gujrat">Gujrat</option>
        <option value="Bihar">Bihar</option>
        <option value="Kolkata">Kolkata</option>

      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Zip</label>
      <input type="text"  name="Zip" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">house details</label>
      <input type="text" name="S_kitchen" class="form-control mt-2" placeholder="size of kitchen in Square ft" id="inputZip">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip"></label>
      <input type="text" class="form-control mt-3" name="N_washroom" placeholder="number of washrooms" id="inputZip">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Email</label>
      <input type="email" name="P_email" class="form-control mt-2" placeholder="Enter registred email" id="inputZip">
    </div>
     <div class="form-group col-md-6">
      <label for="inputZip">Phone</label>
      <input type="text" name="Phone" class="form-control mt-2" placeholder="phone number" maxlength="10" id="inputZip">
    </div>
    <div class="form-group col-md-8">
      <label for="inputZip">Price</label>
      <input type="text" name="Price" class="form-control mt-2" placeholder="eg. 30 Lakh" id="inputZip">
    </div>
  </div>
  <div class=" form-row ">

 

  </div>
 
  <button type="submit" name="btnPost"  class="btn btn-primary">Post</button>
</div>
</div>
</form>
</body>
</html>