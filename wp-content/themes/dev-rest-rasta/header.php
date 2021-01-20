<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
</head>
<body>


	<nav class="navigaton">
		<div class="container navigation-box">

			<h3 class="nav-restaurant-name">Dev Restaurant</h3>
			<div class="ecartement"></div>
			<ul class="liste-nav">
				<li class="item-nav"><a href="#Home"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/home-minimal.svg" alt="" style="width: 10px;"></a></li>
				<li class="item-nav"><a href="#Ours Restaurants">Ours Restaurants</a></li>
				<li class="item-nav"><a href="#Menu">Menu</a></li>
				<li class="item-nav"><a href="#Recipes">Recipes</a></li>
			</ul>
			
		
			<img src="/wp-content/themes/dev-rest-rasta/assets/svg/bullet-list-67.svg" alt="logo-menu" class="logo-menu">
		</div>	
	</nav>
	











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



















<?php wp_footer(); ?>
 


















