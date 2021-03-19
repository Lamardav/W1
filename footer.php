<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			/*do_action( 'storefront_footer' );
*/			?>
<div class="mywrapper_footer" >
<div class="first_footer">
	<span class="title_footer">Магазин "АгроПросвет"</span>
	<br>
	Заказы через сайт мы принимаем <span class="doing_better">круглосуточно</span>, 7 дней в неделю, 365 дней в году. <br>
	<span class="doing_better">Минимальной суммы заказа нет.</span> Вы можете прийти и забрать из нашего магазина <span class="doing_better">любой объем товара,</span> либо заказать доставку.
</div>
<div class="second_footer">
	<span class="title_footer">Основные разделы</span>
</div>
<div class="third_footer">
	<span class="title_footer">Адрес:</span>
	<br>
	Тирасполь, рынок Гермес, бутик 59<br>
	Телефон: <span class="doing_better">077930251</span><br>
	Email: <a class="my_email"href="mailto:legnas@inbox.ru">legnas@inbox.ru</a>

</div>
<div class="fourt_footer">
	<span class="title_footer">График работы:</span>
	<br>
 Вторник - <span class="doing_better">c 8 до 15</span> <br>
 Среда - <span class="doing_better">c 8 до 15</span> <br>
 Четверг -  <span class="doing_better">c 8 до 15</span> <br>
 Пятница - <span class="doing_better">c 8 до 15</span><br>
 Суббота - <span class="doing_better">c 8 до 15</span><br>
 Воскресенье - <span class="doing_better">c 8 до 15</span> <br>
 Понедельник - <span class="doing_better"> <strong>выходной</strong><br></span>
 Прием заказов - <span class="doing_better"> <strong>круглосуточно</strong></span>

<p class="connect_us">Написать нам:</p>
<div class="socials_new">


<a href="viber://chat?number=%2B37377930251" >
<i class="fab fa-viber"></i>
</a>
<a href="https://api.whatsapp.com/send?phone=+37377930251" >
<i class="fab fa-whatsapp"></i>
</a>
<a href="tg://resolve?domain=legnas1974" >
<i class="fab fa-telegram"></i>
</a>
<a href="skype:live:.cid.53eec1b7d9311620?chat" >
<i class="fab fa-skype"></i>
</a>
<!-- <a href="viber://chat?number=%2B37377930251" >
<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/img/viber.png >
</a>
<a href="https://api.whatsapp.com/send?phone=+37377930251" >
<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/img/whatsapp.png >
</a>
<a href="tg://resolve?domain=legnas1974" >
<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/img/telegram.png >
</a>
<a href="skype:live:.cid.53eec1b7d9311620?chat" >
<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/img/skype.png >
</a> -->
</div>
</div>

</div><!-- .mywrapper-footer-full -->





</div><!-- .mywrapper-footer-full -->
<div class="copyright_footer">
	© <?php echo date('Y'); ?> Магазин для огорода и дачи <br>
	 оптовый сельскохозяйственный рынок Гермес, бутик 59


</div>



		</div><!-- .col-full -->

	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
