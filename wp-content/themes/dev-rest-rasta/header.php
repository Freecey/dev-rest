<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="/favicon.ico">
	<link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="/wp-content/themes/dev-rest-rasta/style.css">
	<link rel="preload" href="/wp-content/themes/dev-rest-rasta/assets/fonts/Poppins-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/dev-rest-rasta/assets/fonts/Poppins-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
	<meta name="description" content="The Chef has a pleasant restaurant with a very revolutionary concept. His concept is to combine the two extreme types of food: junk food and very healthy food!">
	<meta name="keywords" content="Restaurant, food, diner, order, reservation, chef, revolutionary, concept, namur, liege, fresh, junk food, junk, healthy food, rybank, casey, appel">
	<meta name="author" content="R-Rocket team, https://github.com/r-rocket-team/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9DVL795E4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-E9DVL795E4');
	</script>
	<?php wp_head(
		[
			'theme_location' => 'TOP NAVBAR',
			'container' => false,
			'menu_class' => 'liste-nav',
			''
		]
	); ?>
</head>

<body>




	<nav id="navigation" class="navigaton">
		<div class="cont-content navigation-box">
			<h3 class="nav-restaurant-name"><a href="<?php echo home_url() ;?>">Dev Restaurant</a></h3>
			<div class="ecartement"></div>

			<?php wp_nav_menu(); ?>

			<ul class="liste-nav">
				<li class="item-nav"><a href="/"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/home-minimal.svg" alt="home" style="width: 15px;"></a></li>
				<li class="item-nav"><a href="/#OursRestaurants">Ours Restaurants</a></li>
				<li class="item-nav"><a href="/the-menu/">Menu</a></li>
				<li class="item-nav"><a href="/recipes/">Recipes</a></li>
			</ul>


			<span class="menu-ghost">Menu</span>


			<img src="/wp-content/themes/dev-rest-rasta/assets/svg/bullet-list-67.svg" alt="logo-menu" class="btn logo-menu" style="width: 60px;">
		</div>
	</nav>

	<!-- =========== SCRIPT BURGER-MENU START =============== -->

	<script>
		const btnMenu = document.querySelector('.logo-menu');
		const menu = document.querySelector('.liste-nav');

		btnMenu.addEventListener('click', function() {
			menu.classList.toggle('active');
		})



		const allLinks = document.querySelectorAll('.item-nav');

		allLinks.forEach(function(item) {

			item.addEventListener('click', function() {
				menu.classList.toggle('active');
			})
		})
	</script>

	<!--================ SCRIPT BURGER-MENU END ==================== -->

	<script>
		jQuery(window).scroll(function() {

			function myFunction() {
				divnav.style.backgroundColor = "#00000064";
			}

			var divnav = document.getElementById("navigation");
			var scrollPercent = 100 * jQuery(window).scrollTop() / (jQuery(document).height() - jQuery(window).height());


			if (scrollPercent > 5) {
				myFunction()
			} else {
				divnav.style.backgroundColor = "";
			}
		});
	</script>