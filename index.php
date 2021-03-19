
<?php
/*
Template Name: Мой шаблон для главной страницы
*/
?>
<?php
get_header('main'); ?>





		<div class="news_and_sales">
			<div class="first_sale">
				<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_redirect" type="button" value=" НОВИНКИ "></p>
  </form></a>
			</div>
			<div class="third_sale">
		<form>	
   <p><input id="button_to_redirect_2" type="button" value=" ЛУЧШЕЕ "></p>
  </form>
			</div>
			<div class="second_sale">
				<a href="<?php echo get_site_url();?>/vse-tovary-so-skidkoy"> <form>
   <p><input id="button_to_redirect_3" type="button" value=" СКИДКИ "></p>
  </form></a>
			</div>
			</div>

			<section class="beautiful_catalog">
			<h1 class="category_preview_title">Актуально</h1>
			<div class="catalog_wrapper">
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>
				<div class="seeds_of_flowers">
						<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_shop" type="button" value=" СЕМЕНА ЦВЕТОВ "></p>
  </form></a>
				</div>

			</div>
		</section>




		
<!-- <div class="for_barelief">
 <img class="orange_div"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mainpage-banner.jpg" width="100% height="100%" 
   alt="Барельеф">

</div> -->
<div class="sakura_chan">
	<div class="sakura_inherit">
<?php echo do_shortcode( '[yith_wc_productslider id=31]' ); ?>
</div>
</div>

<!-- <div class="best_sales">
<h2 class="best_sale">Последние Новинки</h2>
<?php echo do_shortcode( '[recent_products per_page="4" columns="4"]' ); ?>
</div>
 -->


<!-- <a href="<?php echo get_site_url();?>/vse_novinki">
<div class="hundre_new_buys">
<h2 id="blink1">ПОСМОТРЕТЬ 100 САМЫХ СВЕЖИХ ТОВАРОВ</h2>
<p id="blink2"> количество некоторых товаров ограничено</p>
</div>
</a>	 -->



<!-- <div class="sales_know">
	<h2 class="best_sale">ЭТО ВЫГОДНО</h2>
	<?php echo do_shortcode( '[sale_products per_page="4" columns="4"]' ); ?>
	<a href="<?php echo get_site_url();?>/sale_products">
<div class="hundre_new_buys">
<h2 id="blink1">ТОВАРЫ СО СКИДКОЙ! </h2>
<p id="blink2"> сроки и размеры скидок постоянно меняются</p>
</div>
</div>
</a>	 -->


<div class="our_pluses">
		<h2 class="our_pluses_h2">
			Наши преимущества
		</h2>

	
		
		<div class="central_img">
			<div class="plus_1">
				<p>современные решения для сельского хозяйства</p>
			</div>
			<div class="plus_2">
				<p>цены доступнее, чем у остальных</p>
			</div>
			<div class="plus_3">
				<p>консультация специалиста при покупке</p>
			</div>
			<div class="plus_4">
					<p>регулярные акции и спецпредложения</p>
			</div>
		</div>
	</div>





<div class="sakura_chan1">
	<div class="sakura_inherit1">
<?php echo do_shortcode( '[yith_wc_productslider id=63]' ); ?>
</div>
</div>


<?php dynamic_sidebar("галерея"); ?>

<div class="second_block">
<div class="my_description">
	<h2 class="online_shop">Интернет-магазин АгроПросвет</h2>
	<p>Для большого сельскохозяйственного удела, загородного участка или комнатного сада - в нашем магазине вы найдете всё, начиная от того, что способная дать природа, заканчивая тем, что на протяжении тысячелетий придумывал и создавал человек.</p>
	<p>Для нас слово "качество" стало основополагающим. Мы обещаем, что каждое семечко, каждый цветочек, выращенный вами, окупится сполна. У нас вы найдете все, что сможет помочь вам вырастить богатый урожай, похвастаться обильным сбором или порадовать любимых и близких каким-нибудь практичным подарком из нашей коллекции. </p>
	<p>Мы не зависим от поставщиков. Мы - самостоятельный магазин, который старается дать нашим клиентам самый широкий ассортимент товаров даже в самые трудные периоды работы. </p>
	<p>Мы ради предоставить вам наш список товаров и, уверены, воспользовавшись нашими услугами вы придете к нам ещё. Только уже в роли постоянных клиентов или бизнес-парнеров - решать вам.</p>
	<p><span id="yellow_color">Хорошего вам урожая и интересных покупок!</span></p>
  
</div>
<div class="photo_of_the_wrapper">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bouket2.jpg">
</div>
</div>

<?php
/*do_action( 'storefront_sidebar' );*/
get_footer();
