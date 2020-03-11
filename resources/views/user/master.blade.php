
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/ico" href="images/favicon.jpg">
<title>@yield('title')</title>

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

<script>
	$('.owl-carousel').owlCarousel({
		margin: 10,
		nav: true,
		navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 3
			}
		}
	});
</script>
	
    
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/front/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/front/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/front/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="font-awesome/css/flaticon.css"> <!-- Flat Icons-CSS -->
	<link rel="stylesheet" href="font-awesome/css/owl.carousel.min.css"> <!-- Owl Carousel-CSS -->
	<link rel="stylesheet" href="font-awesome/css/owl.theme.default.min.css"> <!-- Owl Carousel-CSS -->

	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->
    @yield('style')
</head>

<body>

@include('user.layout.header')
		
<!-- banner -->
@yield('content')
<!-- //our sponsors -->
@include('user.layout.footer')
<!-- //subscribe -->

<script src="js/front/jquery.min.js"></script>
<script src="js/front/owl.carousel.js"></script>

@yield('script')
</body>
</html>