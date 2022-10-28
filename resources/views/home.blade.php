@extends('layouts.master')

@section('content')
<div class="album bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1 class="fw-bold ">Our Best Rooms</h1>
            <button type="button" class="btn btn-lg  bg-lBlue text-white p"> View More Room </button>
        </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($unitTypeRooms as $unitTypeRoom)        
        <div class="col ">
            <div class="card card-item-unit-room shadow-sm">
              <img class="bd-placeholder-img card-img image-unit-room"  width="100%" height="225" src="{{ URL::asset("storage/$unitTypeRoom->unit_room_type_image")}}"/>
              <div  class="middle ">
                <a href="unit-type-rooms/{{$unitTypeRoom->slug}}" class="text-content btn-button-x rounded-5 fw-bold "> <strong> Learn More </strong></a>
             </div>
            </div>
            
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center py-3 px-2">
                <p class="fs-5 fw-bold">{{ $unitTypeRoom->unit_room_type }}</p>
                <p class="text-primary">from ₱{{ $unitTypeRoom->unit_room_type_price }}</p>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="album ">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center my-5">
            <h1 class="fw-bold">Our Services</h1>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
             <div class="card shadow-sm p-3">
                <div class="card-header bg-white">
                  <label class="fs-5 fw-bold">Swimming Pool</label>
                </div>            
                <div class="card-body"> 
                  <div class="d-block">
                    <p class="card-text text-dark">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div>
               </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm  p-3">
              <div class="card-header bg-white">
                <label class="fs-5 fw-bold">Free Wifi</label>
              </div> 
               <div class="card-body">
                 <div class="d-block">
                   <p class="card-text text-dark">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                 </div>
              </div>
           </div>
         </div>
         <div class="col ">
           <div class="card shadow-sm  p-3">
            <div class="card-header bg-white">
              <label class="fs-5 fw-bold">Free Parking</label>
            </div> 
              <div class="card-body">
                <div class="d-block">
                 <p class="card-text text-dark">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
               </div>
            </div>
         </div>

      </div>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1 class="fw-bold">Latest News</h1>
            <button type="button" class="btn btn-lg bg-lBlue text-white p"> View More Latest News </button>
        </div>
    </div>
    <div class="container ">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ( $postsItem as $post )
          {{-- {{$post->id}} --}}
        
          <div class="col ">
            <div class="card">
              <a class="text-dark" href="posts/{{$post->slug}}" style="text-decoration: none;"> 
                <img src="{{ URL::asset("storage/$post->feature_post_image")}}" class="card-img-top " alt="...">
              </a>
              
               <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <small class="fw-regular ">{{$post->created_at->format('F j Y')}}</small>
                  <p class="bg-lBlue py-0 px-3 text-white">News</p>
                </div>
                <h5 class="card-title fw-bold">{{$post->title}}</h5>
                {{-- <p class="card-text">{!! substr($post->content, 0,  200)!!}... </p> --}}
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              </div>

            </div>
          </div>
       
      @endforeach
    </div>
  </div>
</div> 
<div class="album pt-5 bg-light">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-0">
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/2598638/pexels-photo-2598638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
      <div class="col ">
        <img class="bd-placeholder-img"  width="100%" height="500" src="https://images.pexels.com/photos/2598638/pexels-photo-2598638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
      </div>
  </div>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 285px; background-image: url('{{URL::asset('storage/images/home/cta-01.jpg')}}');background-position: center;background-size: cover;    background-repeat: no-repeat;">
  <div class="row g-0 w-100 px-5">
    <div class="col-sm-6 col-md-10 ">
      <h1 class=" fw-bold" style="color: #53C1FF; font-size:60px">Enjoy Your Stay at Loceña Hotel</h1>
      <p class="font-monospace text-white">Book your room now to take advantage of our accommodation and additional services.</p>
    </div>
    <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
       <div class="btn btn btn-outline-light text-white fw-bolder px-5 py-2 fs-4" style="border-radius: 25px;border: 2px solid white;">Book Now</div>
    </div>
  </div>
</div>
@endsection