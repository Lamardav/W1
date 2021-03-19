<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preload" href="http://agroprosvet.com/wp-content/plugins/yith-woocommerce-product-slider-carousel-master/assets/fonts/fontawesome/fontawesome-webfont.woff?v=4.1.0" as="font" crossorigin="anonymous">
<link rel="preload" href="http://agroprosvet.com/wp-content/plugins/side-cart-woocommerce/assets/css/fonts/Woo-Side-Cart.woff?le17z4" as="font" crossorigin="anonymous">
<link rel="preload" href="http://agroprosvet.com/wp-content/themes/storefront/assets/fonts/fa-solid-900.woff2" as="font" crossorigin="anonymous">
<link rel="preload" href="http://agroprosvet.com/wp-content/plugins/woocommerce-menu-bar-cart/font/WPMenuCart.woff2" as="font" crossorigin="anonymous">
<link rel="preload" href="http://agroprosvet.com/wp-content/themes/storefront/assets/fonts/fa-brands-400.woff2" as="font" crossorigin="anonymous">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">


<div class="container">
	





	<div class="fixed_menu">
		<a href="<?php echo get_site_url();?>">
		<p class="Logotype">АГРО<span class="logo_green">ПРОСВЕТ</span></p></a>
		<div class="menu_line">  
  <?php
    global $woocommerce; ?>
    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
    	<span class="basket-btn__label"><i class="fas fa-shopping-basket"></i></span>
        <span class="basket-btn__label"> Корзина </span>
        <span class="basket-btn__counter">  <?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    </a>


</div>
		<div class="hamburger">
    <span></span>
     <span></span>
      <span></span>
</div>

</div>





	<section class="my_header">
		<div class="computer_menu">
		
		<div class="my_logo">
		<a href="<?php echo get_site_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo1.jpg" alt=""></a>
		</div>
	




<!-- nav class="menu main">

 <?php wp_nav_menu( array( 
 'container_class' => 'main-nav', 
 'theme_location' => 'primary'
 ) ); ?>
</nav> --><!-- .main -->




<div class="search_ajaax">
  <div class="wrapper_middle_header">
  <div class="my_telephone" align="right">
 <a class="link_tele" href="tel:+37377930251"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tele.svg" target="_blank"  align="right"></a>
</div> 
<p class="p_telephone">+ 373 (779) 302-51</p>
<p class="p_time">Заказы ежедневно, круглосуточно</p>
</div>
<?php echo do_shortcode('[yith_woocommerce_ajax_search]');?>
</div>



<div class="right_side_of_the_header">











<div class="s-header__basket-wr woocommerce">
     
 <div class="user_namee">
<a href="<?php echo get_site_url();?>/user/">
<?php
$current_user = wp_get_current_user();
     $username = $current_user->display_name;
   /* echo $username;*/

     print "<p>{$username}</p>"; 
    
?>
</a>
</div> 



<a  class="link_bonus" href="#">
<?php


if ( is_user_logged_in() ) {
	 echo do_shortcode( '[rs_my_reward_points] ' );
}

 ?> 

</a>





<!-- <?php 
if (class_exists('WooCommerce' )){
global $woocommerce; ?>
<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="fix_cart_btn fz_an">
        <span class="basket-btn__label"><i class="fas fa-shopping-basket"></i></span>
        <span class="fix_cart_count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
</a>
<?php 
} 
?>


/////////////////////////
 -->
<!-- <div class="mobile_first">
	<div class="user_namee">
<a href="<?php echo get_site_url();?>/user/">
<?php
$current_user = wp_get_current_user();
     $username = $current_user->display_name;
   /* echo $username;*/

     print "<p>{$username}</p>"; 
    
?>
</a>
</div> 



<a  class="link_bonus" href="<?php echo get_site_url();?>/istoria_bonusov/">
<?php


if ( is_user_logged_in() ) {
	 echo do_shortcode( '[rs_my_reward_points] ' );
}

 ?> 

</a>

</div> -->
<!-- ///////////////// -->

<nav class="autentithication_menu">

	<?php  wp_nav_menu( [
	'theme_location'  => 'secondary',
	'menu'            => 'menu3', // какое меню нужно вставить (по порядку: id, ярлык, имя)
	'container'       => 'none', 
	'container_class' => 'main-nav', 
	'menu_class'      => 'autentithication_menu', 
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	
] ); ?>


</nav>
<!-- 
  <?php
    global $woocommerce; ?>
    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ico-basket.png" class="my_cart" align="left">
        <span class="basket-btn__label"> Корзина</span>
        <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    </a>

 -->

</div>

</div>
</div>

<div class="mobile_menu">
	
<div class="left_mobile_menu">
	<div id="top-menu">
    <ul>
        <?php wp_nav_menu(array('theme_location'=>'Top-menu','container'=>'', 'items_wrap' => '%3$s')); ?>
    </ul>
</div>
</div>
<div class="right_mobile_menu">
	 




<!-- 

	<nav class="my_menu">

		<?php  wp_nav_menu( [
	'theme_location'  => 'primary',
	'container'       => 'none', 
	'container_class' => 'main-nav', 
	'menu_class'      => 'my_menu', 
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	
] ); ?>


</nav>
 -->







<!-- <div class="hamburger">
    <span></span>
     <span></span>
      <span></span>
</div>
 -->
</div>





</div>


	</section>
</div>



  <?php
 if (class_exists('WooCommerce') && is_woocommerce()) : ?>
     <!-- 	<div class="darkened"> -->
     		<div class="my_breadcrumb">
     		<h2 class="product_new_title"><?php woocommerce_page_title(); ?></h2>
           <p class="vagatable_and_breadcrumb"><?php woocommerce_breadcrumb(); ?></p>
    	</div>
  <!--   </div> -->
  <?php endif; ?>

	
		
		<!--  /** Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68*/
		 
		do_action( 'storefront_header' ); 
 -->




</div>
 
<div class="mobile_first">
	<nav class="oder_to_line">
		<?php echo do_shortcode('[yith_woocommerce_ajax_search]');?>
	<?php dynamic_sidebar("каталог"); ?>
<div class="for_retake">
	<div class="user_namee2">
<a href="<?php echo get_site_url();?>/user/">
<?php
$current_user = wp_get_current_user();
     $username = $current_user->display_name;
   /* echo $username;*/

     print "<p>{$username}</p>"; 
    
?>
</a>
</div> 



<a  class="link_bonus" href="#">
<?php


if ( is_user_logged_in() ) {
	 echo do_shortcode( '[rs_my_reward_points] ' );
}

 ?> 

</a>

<!-- <p class="p_telephone">+ 373 (779) 302-51</p>
<p class="p_time">Заказы ежедневно, круглосуточно</p> -->
<nav class="autentithication_menu">

	<?php  wp_nav_menu( [
	'theme_location'  => 'secondary',
	'menu'            => 'menu3', // какое меню нужно вставить (по порядку: id, ярлык, имя)
	'container'       => 'none', 
	'container_class' => 'main-nav', 
	'menu_class'      => 'autentithication_menu', 
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	
] ); ?>


</nav>
</div>

<div id="top-menu">
    <ul>
        <?php wp_nav_menu(array('theme_location'=>'Top-menu','container'=>'', 'items_wrap' => '%3$s')); ?>
    </ul>
</div>
</nav>
</div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
/*	do_action( 'storefront_before_content' );*/
	?>


	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full" id="izi">

		<?php
		do_action( 'storefront_content_top' );
?>

