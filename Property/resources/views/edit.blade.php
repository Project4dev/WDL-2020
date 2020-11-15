@extends('layouts.base')
@section('contents')
  <h2> Update Your Details </h2>
  {{-- @foreach($sells as $sell)--}}
@if(auth()->id() == $sell->user_id)
<form method="POST" action="/update/{{ $sell->id}}" enctype="multipart/form-data"> 
{{-- /update/{{ $sell->id --}}
    @csrf
    @method('PUT')
    <!-- <p> {{ $sell }}</p> -->
    
    @if(session('message'))
        <div class="alert alert-info  fade show" role="alert">
          {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
   @endif
   <div class="mt-5 ml-5 mx-auto ">
      <div class="col-lg-5 col-lg-offset-5">
            <div class="form-group">
            <input type="hidden"  id="id" value="{{ $sell->user_id }}" name="id">
            <label for="inputAddress">Name</label>
            <input type="text" class="form-control"  name="Name" value="{{ old('Name', $sell->name ) }}" id="inputAddress" >
            @error('Name')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div> 
            <div class="form-group ">
            <label for="inputZip">Phone</label>
            <input type="text" name="Phone" class="form-control mt-2" value="{{ old('Phone', $sell->phone ) }}" placeholder="phone number" maxlength="10" id="inputZip">
            @error('Phone')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group ">
            <label for="inputZip">Email</label>
            <input type="email" name="Email" class="form-control mt-2" value="{{ old('Email', $sell->email ) }}"  id="inputZip">
            @error('Email')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group ">
            <label for="inputZip">Price</label>
            <input type="text" name="Price" class="form-control mt-2" value="{{ old('Price', $sell->price ) }}"  id="inputZip">
            @error('Price')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
        <div class=" form-group ">

            <div class="input-group  mb-3 ">

                <div class="input-group-prepend">
                            <label class="input-group-text mt-2" for="inputGroupSelect01">House type</label>
                </div>
                    <select class="custom-select mt-2"  name="H_type" id="inputGroupSelect01">
                        <option >Choose House type</option>
                        <option  selected value="{{ old('H_type', $sell->housetype ) }}">{{ old('H_type', $sell->housetype ) }}</option>
                        @if($sell->housetype=='1 BHK')
                        <option value="1 RK">1-RK</option>
                        <option value="2 BHK">2-BHK</option>
                        <option value="3 BHK">3-BHK</option>
                        @elseif($sell->housetype=='1 RK')
                        <option value="1 BHK">1-BHK</option>
                        <option value="2 BHK">2-BHK</option>
                        <option value="3 BHK">3-BHK</option>
                        @elseif($sell->housetype=="2 BHK")
                        <option value="1 RK">1-RK</option>
                        <option value="1 BHK">1-BHK</option>
                        <option value="3 BHK">3-BHK</option>
                        @elseif($sell->housetype=="3 BHK")
                        <option value="1 RK">1-RK</option>
                        <option value="1 BHK">1-BHK</option>
                        <option value="2 BHK">2-BHK</option>
                        @endif
                    </select>
                    @error('H_type')
                    <small class="text-danger">{{ $message }}</small>
                     @enderror
            </div>
            <p> {{ $sell->purpose }}</p>

            <div class="input-group  mb-3 ">

                <div class="input-group-prepend">
                            <label class="input-group-text mt-2" for="inputGroupSelect01">Want for sell/buy</label>
                </div>
                    <select class="custom-select mt-2"  name="Purpose" id="inputGroupSelect01">
                        <option selected value="{{ old('Purpose', $sell->purpose) }}">{{ old('Purpose', $sell->purpose) }}</option>
                        @if($sell->purpose=='Sell')
                                <option value="Rent">Rent</option>
                        @else
                                <option value="Sell">Sell</option>
                        @endif
                    </select>
            </div>

        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control"   name="Add1" id="inputAddress" value="{{ old('Add1', $sell->add1) }}" placeholder="1234 Main St">
            @error('Add1')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" value="{{ old('Add2', $sell->add2) }}" name="Add2" id="inputAddress2" placeholder="Apartment, studio, or floor">
            @error('Add2')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
            <label for="inputCity">City</label>
            <input type="text" name="City"  value="{{ old('City' ,$sell->city) }}" class="form-control" id="inputCity">
            @error('City')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" value="{{ old('State', $sell->state) }}" name="State" class="form-control">
                <option selected value="{{ old('State',$sell->state) }}">{{ old('State',$sell->state) }}</option>
                @if($sell->state=='Maharashtra')
                <option>Panjab</option>
                <option>MP</option>
                <option>UP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                <option>Kolkata</option>
                @elseif($sell->state=="Panjab")
                <option>Maharashtra</option>
                <option>MP</option>
                <option>UP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                <option>Kolkata</option>
                @elseif($sell->state=="MP")
                <option>Maharashtra</option>
                <option>UP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                <option>Kolkata</option>
                @elseif($sell->state=="Rajesthan")
                <option>Maharashtra</option>
                <option>UP</option>
                <option>MP</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                <option>Kolkata</option>
                @elseif($sell->state=="Gujrat")
                <option>Maharashtra</option>
                <option>UP</option>
                <option>MP</option>
                <option>Rajesthan</option>
                <option>Bihar</option>
                <option>Kolkata</option>
                @elseif($sell->state=="Bihar")
                <option>Maharashtra</option>
                <option>UP</option>
                <option>MP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Kolkata</option>
                @elseif($sell->state=="Kolkata")
                <option>Maharashtra</option>
                <option>UP</option>
                <option>MP</option>
                <option>Rajesthan</option>
                <option>Gujrat</option>
                <option>Bihar</option>
                @endif
            </select>
            @error('State')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text" value="{{ old('Zip', $sell->zip ) }}"  name="Zip" class="form-control" id="inputZip">
            @error('Zip')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-md-6">
            <label for="inputZip">house details</label>
            <input type="text" name="S_kitchen" value="{{ old('S_kitchen', $sell->ksize ) }}" class="form-control mt-2" placeholder="size of kitchen in Square ft" id="inputZip">
            @error('S_kitchen')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            <div class="form-group col-md-6">
            <label for="inputZip"></label>
            <input type="text" class="form-control mt-3" value="{{ old('N_washroom', $sell->nwash ) }}" name="N_washroom" placeholder="number of washrooms" id="inputZip">
            
            @error('N_washroom')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            
            
            
        </div>
        <div class=" form-row ">

        

        </div>
        <!-- <p>{{ $sell->image }} -->
        <img src="{{ asset('uploads/sell/' . $sell->image) }}" height=100 width=100 >
        <div class="file-field">
            <div class="btn btn-primary btn-sm btn-lg btn-block text-left">
            <span>Choose file</span>
            <input type="file" class="file-path validate" value="{{  $sell->image  }}" placeholder="Upload your fotoes" name="image">
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
@endif
{{-- @endforeach --}}

@endsection()