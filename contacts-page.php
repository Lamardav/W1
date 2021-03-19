
<?php
/*
Template Name: Мой шаблон для контактов
*/
?>
<?php
get_header('page'); ?>

<section class="abouts_our_shopping">
	<div class="contacts_to_connect">
		<h1>КОНТАКТЫ</h1>
		<h2>Прием заказов и часы работы</h2>
		<div class="wrapper_for_adress">
			<div class="names_for_contacts">
				<span class="make_it_fat">Телефон:<br></span>
				<span class="make_it_fat">Эл. почта:<br></span>
				<span class="make_it_fat">Часы работы:<br></span>
			</div>
			<div class="means_for_contacts">
				 <a class="link_teleph" href="tel:+37377930251">+373 (779) 302-51</a><br>
				 <a class="my_email"href="mailto:legnas@inbox.ru">legnas@inbox.ru</a><br>
				<p>с 08:00 до 15:00 вт-вс. Понедельник выходной. Прием заказов на сайте круглосуточно</p><br>
			</div>
		</div>
		
		<div class="contacts_to_come">
			<h2>Как к нам проехать</h2>
			<div class="come_wrapper">
			<div class="names_for_come">
				<span class="make_it_fat">Адрес:<br></span>
			</div>
			<div class="means_for_come">
				<p>г. Тирасполь, мкр-н Кировский, рынок Гермес, бутик 59</p><br>
			</div>
			</div>
		
			<iframe class="germes_map_contacts" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.0855084028376!2d29.619080625572096!3d46.86455561516149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c9032fa76505fd%3A0xae0f486ec79399e1!2z0JPQtdGA0LzQtdGB!5e0!3m2!1sru!2s!4v1612993648873!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<div class="double_connect">
				<div class="message_to_connect">Задайте нам любой интересующий вас вопрос</div>

 <?php echo do_shortcode( '[contact-form-7 id="165" title="Контактная форма 1"]' );?>
			</div>
		</div>
	 </div>
</section>

<?php
/*do_action( 'storefront_sidebar' );*/
get_footer();
