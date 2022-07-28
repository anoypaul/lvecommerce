<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
		

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

			{{-- checkout head start --}}

			{{-- <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="">
			<meta name="author" content="SSLCommerz">
			<title>Example - EasyCheckout (Popup) | SSLCommerz</title>

			<!-- Bootstrap core CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

			<style>
				.bd-placeholder-img {
					font-size: 1.125rem;
					text-anchor: middle;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
				}

				@media (min-width: 768px) {
					.bd-placeholder-img-lg {
						font-size: 3.5rem;
					}
				}
			</style> --}}

	{{-- checkout head end --}}

    </head>
	<body>
		<!-- HEADER -->
		<header>
			@include('frontend.header')
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
			@include('frontend.nav')
		<!-- /NAVIGATION -->

		<!-- SECTION -->

        	@yield('content')

		<!-- /SECTION -->

		<!-- NEWSLETTER -->
			@include('frontend.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
			@include('frontend.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>
		<script src="{{asset('js/nouislider.min.js')}}"></script>
		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>

		<script>
			(function (window, document) {
				var loader = function () {
					var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
					script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
					tag.parentNode.insertBefore(script, tag);
				};
		
				window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
			})(window, document);
		</script>

				{{-- checkout script start --}}
				{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
				integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
				crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
						integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
						crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
						integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
						crossorigin="anonymous"></script>
	
	
				<!-- If you want to use the popup integration, -->
				<script>
					var obj = {};
					obj.cus_name = $('#customer_name').val();
					obj.cus_phone = $('#mobile').val();
					obj.cus_email = $('#email').val();
					obj.cus_addr1 = $('#address').val();
					obj.amount = $('#total_amount').val();
	
					$('#sslczPayBtn').prop('postdata', obj);
	
					(function (window, document) {
						var loader = function () {
							var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
							// script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
							script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
							tag.parentNode.insertBefore(script, tag);
						};
	
						window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
					})(window, document);
				</script> --}}
			{{-- checkout script end --}}

	</body>
</html>
