@extends('layouts.master')

@section('content')
   {{-- {{$unitTypeRoom->id}} --}}
<div class="unit-room">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
            <div class="col p-2">
                <img class="bd-placeholder-img card-img image-unit-room"  width="100%" height="100%" src="{{ URL::asset("storage/$unitTypeRoom->unit_room_type_image")}}"/>
            </div>
            <div class="col p-5 ">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label class="h5 fw-bolder" for="roomType">Unit Room Type :</label>
                    </div>
                    <div class="col-sm-8">
                        <p class="">{{$unitTypeRoom->unit_room_type}}</p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label class="h5 fw-bolder" for="roomTypePrice">Unit Room Price :</label>
                    </div>
                    <div class="col-sm-8">
                        <p class="">₱{{$unitTypeRoom->unit_room_type_price}}</p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label class="h5 fw-bolder" for="roomType">Description :</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="">{!! $unitTypeRoom->unit_room_type_content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="album bg-light">
    <div class="container py-4">
        <div class="d-flex justify-content-center align-items-center my-5">
            <h1 class="fw-bold ">Our Best Rooms</h1>
            {{-- <button type="button" class="btn btn-lg  bg-lBlue text-white p"> View More Room </button> --}}
        </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($unitTypeRooms as $unitTypeRoomItem)        
        <div class="col ">
            <div class="card card-item-unit-room shadow-sm">
              <img class="bd-placeholder-img card-img image-unit-room"  width="100%" height="250" src="{{ URL::asset("storage/$unitTypeRoomItem->unit_room_type_image")}}"/>
              <div  class="middle ">
                <a href="/unit-type-rooms/{{$unitTypeRoomItem->slug}}" class="text-content btn-button-x rounded-5 fw-bold "> <strong> Learn More </strong></a>
             </div>
            </div>
            
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center py-3 px-2">
                <p class="fs-5 fw-bold">{{ $unitTypeRoomItem->unit_room_type }}</p>
                <p class="text-primary">from ₱{{ $unitTypeRoomItem->unit_room_type_price }}</p>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection