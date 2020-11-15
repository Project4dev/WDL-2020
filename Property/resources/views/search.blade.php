@extends('layouts.base')
@section('contents')
<form method="POST" action="{{ url('/search') }}" class="mt-5">
  @csrf
  <!-- <div class="form-group mb-2 form-control-lg">
    <label for="staticEmail2" class="sr-only">Search Yout Home</label><br>
    <input type="text"  readonly class="form-control-plaintext" id="staticEmail2" value="Filter here">
  </div> -->
  <div class="form-row  mb-2">
      <div class="form-group">
        <label for="inputAddress">Search here</label>
        <input type="text" name="text" class="form-control col col-lg-12" id="inputAddress" placeholder="search">
      </div>
  </div>
  <button type="submit" class="btn btn-primary  mb-2">search</button>
</form>


@if(isset($details))

<p> The search result For <b>{{ $query }} </b> </p>
<main role="main" id="demo">


  <div class="album py-5 bg-light">
    <div class="container">

    <div class="row">
      @foreach($details as $data)

        <div class="col-md-4">
        	
          <div class="card mb-4 ">
          
          <img src="{{ asset('uploads/sell/' . $data->image) }}" height="227" width="340">

            <div class="card-body">
              <p class="card-text"><b>location</b> :{{ $data->state}} <br> 
                                   <b>Price</b>    : {{ $data->price}}  <br>
                                   <b>room type</b>: {{$data->housetype}} <br>
                                   <b> sell/buy</b>: {{$data->purpose}} <br>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/detail/{{ $data->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  @if(auth()->id() == $data->user_id)
                  <a href="/edit/{{ $data->id }}" ><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Update</button></a>
                  <a href="/delete-sell/{{ $data->id }}"><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Delete</button></a>

                  @endif
                </div>
                <small class="text-muted">{{Str::limit($data->created_at,10,'')}}</small>
              </div>
            </div>
          </div>

          
        </div>
        
        
        @endforeach
        @elseif(isset($message))
         <h3 class="text-center mt-5"> {{ $message }} </h3>
        @endif
      </div>
    </div>
  </div>

</main>


@endsection