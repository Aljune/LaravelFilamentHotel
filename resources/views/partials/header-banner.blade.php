
@if (Route::currentRouteName() === 'index')
<div id="myCarousel" class="carousel slide position-relative" data-bs-ride="carousel" style="height: 100vh">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100 ">
        {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
        <img class="bd-placeholder-img"  src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"/>
      </div>
      <div class="carousel-item h-100">
        <img class="bd-placeholder-img"  src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"/>
      </div>
      <div class="carousel-item h-100">
        <img class="bd-placeholder-img"  src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"/>
      </div>
      {{-- <div class="carousel-item h-100">
        <img class="bd-placeholder-img"  src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item h-100">
        <img class="bd-placeholder-img"  src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    {{-- start div form --}}
    <div class="py-5 px-4 position-absolute top-50 start-50 translate-middle w-50 card " style="z-index: 1; background-color: #42434485!important;">
        <div class="container">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bold text-uppercase">A Best Place To Stay.</h1>
            </div>
            <div>
                <form class="row g-3" action="{{route('search-unit-room-type')}}" method="GET">
                    <div class="col-md-4">
                      <label for="inputDateCheckIn" class="form-label text-white">Check In</label>
                      <input type="date" name="date_check_in" class="form-control" id="inputDateCheckIn">
                    </div>
                    <div class="col-md-4">
                      <label for="inputDateCheckOut" class="form-label text-white">Check Out</label>
                      <input type="date" name="date_check_out" class="form-control" id="inputDateCheckOut">
                    </div>
                    <div class="col-md-1">
                        <label for="inputNumberAdult" class="form-label text-white">Adults</label>
                        <input type="number" name="num_adult" class="form-control" id="inputNumberAdult">
                      </div>
                    <div class="col-md-1">
                      <label for="inputNumberKid" class="form-label text-white">Children</label>
                      <input type="number" name="num_child" class="form-control" id="inputNumberKid">
                    </div>
                    <div class="col-md-2">
                      <label for="searchButton" class="form-label invisible"> Search </label>
                      <button type="submit" class="btn btn-primary form-control" id="searchButton">Search</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    {{-- end div form --}}
  </div>
@else 
    <div class="p-md-5 text-white rounded-0" style=" background-image: url('{{URL::asset('storage/images/home/bg-breadcrumbs.jpg')}}');background-position: center;background-size: cover;background-repeat: no-repeat; height: 500px;width:100%">
        <div class="col-md-12 px-0 d-flex justify-content-center align-items-center h-100">
            <h1 class="display-1 fw-bold">Rooms & Suites</h1>
        </div>
  </div>
@endif