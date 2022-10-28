@extends('layouts.master')

@section('content')
<div class="unit-room">
    <div class="container">
        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-3">
            <div class="col">
                @foreach ($unitTypeRooms as $unitTypeRoom)   
                    <div class="card mb-3" >
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img class="bd-placeholder-img card-img image-unit-room"  width="100%" height="225" src="{{ URL::asset("storage/$unitTypeRoom->unit_room_type_image")}}"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="fs-5 fw-bold">{{ $unitTypeRoom->unit_room_type }}</p>
                                <p class="text-primary">from ₱{{ $unitTypeRoom->unit_room_type_price }}</p>
                               
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>    
</div>
@endsection