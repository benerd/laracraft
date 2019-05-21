<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Recipe a hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
    </script>


    <link href="{{ asset('css/bootstrap.css ') }}" rel="stylesheet" type="text/css" media="all" />

    <link href=" {{ asset('css/carousel.css') }}" type="text/css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="css/owl.carousel.css') }}" type="text/css" media="all" />

    <link href=" {{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href=" {{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />

    <script type="text/javascript" src=" {{ asset('js/jquery-2.1.4.min.js') }}"></script>


    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- //font-awesome-icons -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //google fonts -->

    @stack('styles')

</head>

<body>

    @yield('body')

    <!-- Owl-Carousel-JavaScript -->
    <script src=" {{ asset('js/owl.carousel.js') }} "></script>
    <script>
        $(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 5,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
    </script>
    <!-- //Owl-Carousel-JavaScript -->

    <!-- flexSlider -->
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function(){
  $('.flexslider').flexslider({
	animation: "slide",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});
    </script>
    <!-- //flexSlider -->


    <!-- start-smoth-scrolling -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
    </script>

    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
    </script>
    <!-- //here ends scrolling icon -->

    <!-- for bootstrap working -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- //for bootstrap working -->

    @stack('scripts')

</body>

</html>
