<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Hotel</title>
  
  @include('partials.styles')
</head>
<body>
    
@include('partials.header')

@include('partials.header-banner')

<main class="mt-5">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')
      
</body>