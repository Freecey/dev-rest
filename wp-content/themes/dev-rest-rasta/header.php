<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head([
		'theme_location' => 'TOP NAVBAR']
	); ?> 
</head>
<body>




	<nav class="navigaton">
		<div class="container navigation-box" >
			<h3 class="nav-restaurant-name">Dev Restaurant</h3>
			<div class="ecartement"></div>

			<?php wp_nav_menu(); ?>

			<ul class="liste-nav">
				<li class="item-nav"><a href="#Home"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/home-minimal.svg" alt="" style="width: 10px;"></a></li>
				<li class="item-nav"><a href="#Ours Restaurants">Ours Restaurants</a></li>
				<li class="item-nav"><a href="#Menu">Menu</a></li>
				<li class="item-nav"><a href="#">Recipes</a></li>
			</ul>
			

			<span class="menu-ghost">Menu</span>
			<img src="/wp-content/themes/dev-rest-rasta/assets/svg/bullet-list-67.svg" alt="logo-menu" class="btn logo-menu" style="width: 60px;">
		</div>	
	</nav>
	
<!-- =========== SCRIPT BURGER-MENU START =============== -->

<script type="text/javascript">

const btnMenu = document.querySelector('.logo-menu');
const menu = document.querySelector('.liste-nav');

btnMenu.addEventListener('click', function(){
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

















<?php wp_footer(); ?>
 


















