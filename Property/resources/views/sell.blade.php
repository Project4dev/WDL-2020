@extends('layouts.base')
@section('contents')
  <h2> Sell your house </h2>
<form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
   <div class="mt-5 ml-5 mx-auto ">
      <div class="col-lg-5 col-lg-offset-5">
            <div class="form-group">
            <label for="inputAddress">Name</label>
            <input type="text" class="form-control"  name="Name" id="inputAddress" placeholder="Owners name">
            @error('Name')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div> 
            <div class="form-group ">
            <label for="inputZip">Phone</label>
            <input type="text" name="Phone" class="form-control mt-2" placeholder="phone number" maxlength="10" id="inputZip">
            @error('Phone')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group ">
            <label for="inputZip">Email</label>
            <input type="email" name="Email" class="form-control mt-2" placeholder="Enter registred email" id="inputZip">
            @error('Email')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group ">
            <label for="inputZip">Price</label>
            <input type="text" name="Price" class="form-control mt-2" placeholder="eg. 30 Lakh" id="inputZip">
            @error('Price')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
        <div class=" form-group ">

            <div class="input-group  mb-3 ">

                <div class="input-group-prepend">
                            <label class="input-group-text mt-2" for="inputGroupSelect01">House type</label>
                </div>
                    <select class="custom-select mt-2" name="H_type" id="inputGroupSelect01">
                        <option selected>Choose House type</option>
                        <option value="1 RK">1-RK</option>
                        <option value="1 BHK">1-BHK</option>
                        <option value="2 BHK">2-BHK</option>
                        <option value="3 BHK">3-BHK</option>
                    </select>
                    @error('H_type')
                    <small class="text-danger">{{ $message }}</small>
                     @enderror
            </div>
            <div class="input-group  mb-3 ">

                <div class="input-group-prepend">
                            <label class="input-group-text mt-2" for="inputGroupSelect01">Want for sell/buy</label>
                </div>
                    <select class="custom-select mt-2" name="Purpose" id="inputGroupSelect01">
                        <option selected value="Rent">Rent</option>
                        <option value="Sell">Sell</option>
                        
                    </select>
            </div>

        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control"  name="Add1" id="inputAddress" placeholder="1234 Main St">
            @error('Add1')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" name="Add2" id="inputAddress2" placeholder="Apartment, studio, or floor">
            @error('Add2')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
            <label for="inputCity">City</label>
            <input type="text" name="City" class="form-control" id="inputCity">
            @error('City')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="State" class="form-control">
                <option selected>Choose state</option>
                <option>Maharashtra</option>
                <option>Panjab</option>
                <option>MP</option>
                <option>UP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                <option>Kolkata</option>

            </select>
            @error('State')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text"  name="Zip" class="form-control" id="inputZip">
            @error('Zip')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-6">
            <label for="inputZip">house details</label>
            <input type="text" name="S_kitchen" class="form-control mt-2" placeholder="size of kitchen in Square ft" id="inputZip">
            @error('S_kitchen')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            <div class="form-group col-md-6">
            <label for="inputZip"></label>
            <input type="text" class="form-control mt-3" name="N_washroom" placeholder="number of washrooms" id="inputZip">
            
            @error('N_washroom')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            
            
            
        </div>
        <div class=" form-row ">

        

        </div>

        <div class="file-field">
            <div class="btn btn-primary btn-sm btn-lg btn-block text-left">
            <span>Choose file</span>
            <input type="file" class="file-path validate" placeholder="Upload your fotoes" name="image">
            <br>
            @error('image')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <span>Image size should be less than 2MB</span>
            <!-- <div class="file-path-wrapper">
            <input class="file-path validate" name="image" type="file" placeholder="Upload your fotoes" >
            <br>
            @error('image')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div> -->
        </div>
        <!-- <br> -->
        <div class="form-group">
            <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div> -->
        </div>
        <br>
        <button type="submit" name="btnPost"  class="btn btn-primary btn-lg btn-block   mb-5">Post</button>
        </div>
        </div>
</form>

@endsection()