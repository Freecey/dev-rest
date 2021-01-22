<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head([
		'theme_location' => 'TOP NAVBAR',
		'container' => false,
		'menu_class' => 'liste-nav',
		''] 
	); ?> 
</head>
<body>




	<nav id="navigation" class="navigaton">
		<div class="cont-content navigation-box" >
			<h3 class="nav-restaurant-name">Dev Restaurant</h3>
			<div class="ecartement"></div>

			<?php wp_nav_menu(); ?>

			<ul class="liste-nav">
				<li class="item-nav"><a href="/"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/home-minimal.svg" alt="" style="width: 15px;"></a></li>
				<li class="item-nav"><a href="/#OursRestaurants">Ours Restaurants</a></li>
				<li class="item-nav"><a href="/the-menu/">Menu</a></li>
				<li class="item-nav"><a href="/recipes/">Recipes</a></li>
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

<script>
document.getElementById("navigation").addEventListener("scroll", myFunction);

function myFunction() {
  this.style.backgroundColor = "#00000064";
}
</script>



<?php wp_footer(); ?>
 


















