@extends('layouts.base')
@section('contents')
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Get Your dream house</h1>
      
    </div>
  </section> 

  <div class="album py-5 bg-light">
    <div class="container">
     
     <!-- <h1> Hey </h1> -->
    <div class="row">
      
      	@foreach($data  as $d)
        @if($d->purpose == 'Rent')
        <div class="col-md-4">
        	
          <div class="card mb-4 shadow-sm">
          
           <img src="{{ asset('uploads/sell/' . $d->image) }}" height="227" width="345">

            <div class="card-body">
            
              <p class="card-text"><b>location</b> : {{ $d->state }}<br> 
                                   <b>Price</b>    : {{ $d->price }} <br>
                                   <b>room type</b>: {{ $d->housetype }} <br>
                               		<!-- <b>room type</b>: {{ $d->image }} <br></p> -->
                </p>
                
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="/detail/{{ $d->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  @if(auth()->id() == $d->user_id)
                  <a href="/edit/{{ $d->id }}" ><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Update</button></a>
                  <a href="/delete-sell/{{ $d->id }}"><button type="button" class="btn btn-sm ml-2 btn-outline-secondary">Delete</button></a>

                  @endif                </div>
                <small class="text-muted">{{Str::limit($d->created_at,10,'')}}</small>
              </div>
            </div>
          </div>

          
        </div>
        
        
        @endif
        @endforeach
        
      </div>
      
    
    </div>
  </div>

</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
@endsection