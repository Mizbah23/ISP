
@extends('user.master')
@section('title'){{$title}}@stop

  <!-- Meta tag Keywords -->
@section('style')
  <style type="text/css">
    .banner, .banner-layer {
    min-height: 0px;
    }
  </style>
@stop



@include('user.layout.header')
@section('content')
<!-- banner -->
<section class="banner" id="home">
  <div class="banner-layer">
    <div class="container">
      <div class="w3pvt_banner_info text-center">
        <div class="w3layouts_banner_margin">

        </div>
      </div>
    </div>
  </div>
</section>





<!-- fireworks animation -->
<div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div>
<!-- //fireworks animation -->





 <!-- contact -->
    <div class="contact-wthree py-5" id="contact">
        <div class="container py-md-3">
        <div>
        <h3 class="heading mb-4">Upcoming Events</h3>
        <p>Laravel makes implementing authentication very simple. In fact, almost everything is configured for you out of the box. The authentication configuration file is located at config/auth.php, which contains several well documented options for tweaking the behavior of the authentication services.

        At its core, Laravel's authentication facilities are made up of "guards" and "providers". Guards define how users are authenticated for each request. For example, Laravel ships with a session guard which maintains state using session storage and cookies.

        Providers define how users are retrieved from your persistent storage. Laravel ships with support for retrieving users using Eloquent and the database query builder. However, you are free to define additional providers as needed for your application.
        </p>
      </div>


        </div>
    </div>

@stop



</html>