
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/ico" href="images/favicon.jpg">
@section('title'){{$title}}@stop

  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Greetings Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script> 

  <!--// Meta tag Keywords -->
    
  <!-- css files -->
  <link rel="stylesheet" href="css/front/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="css/front/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="css/front/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->
  
  <!--web font-->
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <!--//web font-->
  <style type="text/css">
    .banner, .banner-layer {
    min-height: 0px;
    }
  </style>
</head>

<body>

@include('user.layout.header')
    
<!-- banner -->
<section class="banner" id="home">
  <div class="banner-layer">
    <div class="container">
      <div class="w3pvt_banner_info text-center">
        <div class="w3layouts_banner_margin">

        </div>
      </div>
      <!-- To bottom button-->

      <!-- //To bottom button-->
    </div>
  </div>
</section>
<!-- //banner --> 

<!-- fireworks animation -->
<!-- <div class="pyro">
    <div class="before"></div>
    <div class="after"></div>
</div> -->





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

<!--             <div class="row ">

                <div class="col-lg-9 col-md-8">
                    register form grid

                     //register form grid ends here
                </div>
            </div> -->
        </div>
    </div>
    <!-- //contact -->

<!-- our sponsers -->

<!-- //our sponsors -->
@include('user.layout.footer')
<!-- //subscribe -->

</body>
</html>