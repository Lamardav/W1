
<?php
/*
Template Name: Мой шаблон страницы
*/
?>
<?php
get_header('page'); ?>

<section class="information_about_our_shop">
	<div class="section_wrapper">
	<h1 class="our_famous_shop">
		О НАШЕМ МАГАЗИНЕ	
	</h1>
	<h2 class="who_are_our_workers">
		Кто мы
	</h2>
	<div class="answer_who_are_our_workers">
		<span class="make_it_black">«АгроПросвет»</span> — магазин товаров для огорода и дачи. <br>
		На протяжении последних нескольких лет мы успешно интегрируем свой товар на территории Республики. Мы точно знаем, чего вы хотите и когда, знаем на что вы обращаете внимание и при покупке, и дома, для нас не существует никаких других целей, кроме как угодить вам. 
		Никто не заботится о вашем времени так, как мы. В нашем лице вы найдете первоклассного советника по любым вопросам земледелия, семеноведения, селекции, надежного партнера по бизнесу и просто хорошего друга.  
	</div>
		<h2 class="we_try_to_make_ur_life_ez">
		Мы стараемся для вас
	</h2>
	<div class="answer_we_try_to_make_ur_life_ez">
		Для вас весь наш товар представлен в удобном каталоге так, чтобы вам было легко выбрать необходимое и без проблем оформить заказ. У нас вы найдете, и первоклассный оригинальный бренд современного сельского хозяйства, и более дешевый, но только не по качеству товар отечественных производителей. Каждый из вас может приобрести себе продукцию из бескрайней России, Голландии, Болгарии, Молдовы или Украины. Если у вас есть вопросы по какому-либо товару или вы не можете определиться с выбором, звоните мне по номеру <a class="link_teleph" href="tel:+37377930251"><span class="make_it_black">+373 (779) 302-51</span></a>.<br> Меня зовут<span class="make_it_black"> Шпакова Анжела</span> и я с радостью проконсультирую вас, а также помогу опеределиться с товаром. 

	</div>


<div class="why_me">
	
	<h1>Почему именно <span><strong>АгроПросвет</strong></span></h1>
	 <hr align="center" width="14%">
	<h2>Корпоративный сайт нашего магазина</h2>
	<div class="reasons">

	<div class="why_me_first_reason">
		<p>4 года на рынке</p>
		 <p>Профессиональная консультация при покупке</p>
		
		<p>Самая быстрая подготовка и сбор ЗАКАЗА</p>

	</div>
	<img class="heart_img"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart.jpg" width="18% height="10%" 
   alt="сердце">
<div class="why_me_second_reason">
		
		<p>Постоянное наличие товара </p>
    <p>Прямые поставки от производителя</p>
		<p>Все гибриды и сорта имеют необходимую документацию</p>
</div>
	</div>
</div>



	<div class="actual">
		<h2 class="actual_h2">
			Актуально
		</h2>
		<!-- <i class="fas fa-shopping-cart"></i> -->

	<div class="answer_why_is_actual">
		 Мы молоды, голодны и амбициозны. Именно по этой причине<span class="make_it_black"> разнообразие товара у нас не прекратит расти никогда</span>. Каждую неделю, день или даже час каталог наполняется эксклюзивом. Ниже вы можете перейти к наиболее актуальным в плане цены и качества каталогам магазина.
	</div>

		<div class="news_and_sales">
			<div class="first_sale">
				<a href="<?php echo get_site_url();?>/poslednie-novinki"> <form>
   <p><input  id="button_to_redirect" type="button" value=" НОВИНКИ "></p>
  </form></a>
			</div>
			<div class="third_sale">
			
   <p><input id="button_to_redirect" type="button" value=" ЛУЧШЕЕ "></p>
  </form>
			</div>
			<div class="second_sale">
				<a href="<?php echo get_site_url();?>/vse-tovary-so-skidkoy"> <form>
   <p><input id="button_to_redirect" type="button" value=" СКИДКИ "></p>
  </form></a>
			</div>
			
		</div>
		<p class="main_rule">«АгроПросвет» — все ваши соседи покупают у нас</p>
	</div>
</div>
</section>

<?php
/*do_action( 'storefront_sidebar' );*/
get_footer();
