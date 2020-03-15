<header>	
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4">
        <div id="logo">
			<h1> <a href="#index.html"><span> <img style="height: 50px; width: 50px;" src="images/logo.jpg" alt=""></span> A1 Network</a></h1>
		</div>

        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
        <div id="navbar">
            <ul class="menu mt-md-3">
                <li class="mr-lg-4 mr-3 active"><a href="{{route('home')}}">Home</a></li>
                <li class="mr-lg-4 mr-3"><a href="{{route('package')}}">Package</a></li>
                <li class="mr-lg-4 mr-3"><a href="#contact">Product</a></li>
                <li class="mr-lg-4 mr-3">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                <a href="#">Media <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2"/>
                <ul class="drop-down">
                    <li><a href="#about">FTP Server</a></li>
                    <li><a href="">TV Server</a></li>
                    <li><a href="">BDIX Server</a></li>
                    <li><a href="">TORRENT Server</a></li>
                    
                </ul>
                </li>
                <li class="mr-lg-4 mr-3">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                <a href="#">Support <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2"/>
                <ul class="drop-down">
                    <li><a href="#about">Complain</a></li>
                    <li><a href="">Support Team</a></li>                    
                </ul>
                </li>
                <li class="mr-lg-4 mr-3"><a href="#contact">Contact</a></li>
                <li class="mr-3 icons"><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                <li class="mr-3 icons"><a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                <li class="mr-3 icons"><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                <li class=" icons"><a href="#"><span class="fa fa-youtube-play" aria-hidden="true"></span></a></li>
            </ul>
        </div>
        </nav>
		<!-- //nav -->
	</div>
</header>