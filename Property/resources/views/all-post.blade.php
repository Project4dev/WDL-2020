@extends('layouts.base')
@section('contents')
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Get Your dream house</h1>
      <h2 class="lead text-muted">If you want to sell click below </h2>
      <p>
      {{-- @if (session('status')) --}}
        <a href="{{ url('sell') }}" class="btn btn-primary my-2">click here</a>
        {{-- @else  --}}
      <!-- <a href="{{ url('login') }}" class="btn btn-primary my-2">click here</a> -->
      {{-- @endif --}}
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

    <div class="row">
      	@foreach ($data as $d)
        <div class="col-md-4">
        	
          <div class="card mb-4 shadow-sm">
          
           <img src="{{ asset('uploads/sell/' . $d->image) }}" height="227" width="340">

            <div class="card-body">
              <p class="card-text"><b>location</b> : {{ $d->state }}<br> 
                                   <b>Price</b>    : {{ $d->price }} <br>
                                   <b>room type</b>: {{ $d->housetype }} <br>
                                   <b>rent/sell</b>: {{ $d->purpose }} <br>
                               		<!-- <b>room type</b>: {{ $d->image }} <br></p> -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/detail/{{ $d->id}}"><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">View</button></a>
                  @if(auth()->id() == $d->user_id)
                  <!-- /update/{{ Auth()->id() }} -->
                  <a href="/edit/{{ $d->id }}" ><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Update</button></a>
                  <a href="/delete/{{ $d->id }}"><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Delete</button></a>

                  @endif
                </div>
                <small class="text-muted">{{Str::limit($d->created_at,10,'')}}</small>
              </div>
            </div>
          </div>

          
        </div>
        
        
        
        @endforeach
      </div>
    </div>
  </div>

</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
@endsection