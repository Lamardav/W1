<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';



if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */


  
add_action ('wp_enqueue_scripts','theme_styles');
add_action ('wp_enqueue_scripts','theme_scripts');

//fonts!!!!!!!AWESOME
/*function wpschool_load_fontawesome() {
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/css/fontawesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'wpschool_load_fontawesome' );*/






add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}


function theme_styles() {
wp_enqueue_style('styles',get_stylesheet_uri());
  wp_enqueue_style('slider',get_stylesheet_directory_uri().'/assets/css/slider.css');
  wp_enqueue_style('slick', get_stylesheet_directory_uri().'/assets/css/slick.css');
  wp_enqueue_style('footer',get_stylesheet_directory_uri().'/assets/css/newfooter.css');
  wp_enqueue_style('mycommerce', get_stylesheet_directory_uri().'/assets/css/mycommerce.css');
 
  
}

function theme_scripts()
{
  
  
  wp_enqueue_script ('slick',get_stylesheet_directory_uri().'/assets/js/slick.min.js');
  wp_enqueue_script ('script',get_stylesheet_directory_uri().'/assets/js/script.js');


  
}
function tutsplus_burger_menu_scripts() {
 
 wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'tutsplus_burger_menu_scripts' );



// Enable the use of shortcodes within widgets.
add_filter( 'widget_text', 'do_shortcode' ); 




add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

//register widget
register_sidebar(array(
  'name' => 'галерея', // Отображаемое название области в панели управления
  'id' => 'gallery_id', // Уникальный ID области
  'description' => __( 'Описание виджета (подсказка).'),
  'before_widget' => '<div id="widget" class="widget">', // Начало обертки блока
  'after_widget' => '</div>', // Конец обертки блока
  'before_title' => '<h3 class="widget-title">', // Начало обертки заголовка
  'after_title' => '</h3>' // Конец обертки заголовка
));
register_sidebar(array(
  'name' => 'каталог', // Отображаемое название области в панели управления
  'id' => 'catalog_id', // Уникальный ID области
  'description' => __( 'Описание виджета (подсказка).'),
  'before_widget' => '<div id="widget" class="widget">', // Начало обертки блока
  'after_widget' => '</div>', // Конец обертки блока
  'before_title' => '<h3 class="widget-title">', // Начало обертки заголовка
  'after_title' => '</h3>' // Конец обертки заголовка
));




function sparrow_woocommerce_image_dimensions() {
  global $pagenow;
 
  if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
    return;
  }

    $catalog = array(
    'width'   => '400', // px
    'height'  => '340', // px
    'crop'    => 1    // true
  );

  $single = array(
    'width'   => '600', // px
    'height'  => '600', // px
    'crop'    => 1    // true
  );

  $thumbnail = array(
    'width'   => '170', // px
    'height'  => '190', // px
    'crop'    => 0    // false
  );

  // Image sizes
  update_option( 'shop_catalog_image_size', $catalog );     // Product category thumbs
  update_option( 'shop_single_image_size', $single );     // Single product image
  update_option( 'shop_thumbnail_image_size', $thumbnail );   // Image gallery thumbs
}

add_action( 'after_switch_theme', 'sparrow_woocommerce_image_dimensions', 1 );


  add_filter( 'woocommerce_breadcrumb_defaults', 'custom_woocommerce_breadcrumbs' );
function custom_woocommerce_breadcrumbs() {
  return array(
    'delimiter'   => '', // no delimiter
    'wrap_before' => '<div><ul class="crumbs">',
    'wrap_after'  => '</ul></div>',
    'before'      => '<li>',
    'after'       => '</li>',
    'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
  );
}

//add articul
add_action( 'woocommerce_before_shop_loop_item', 'shop_sku' );
function shop_sku(){
global $product;
echo '<span itemprop="productID" class="sku">Артикул: ' . $product->sku . '</span>';
}




// remove siderbar woocommerce
add_action('woocommerce_before_main_content','remove_sidebar');
 function remove_sidebar() {
  if (is_woocommerce()) {

    remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);
  }
}

//net v nalichii
add_action( 'woocommerce_shop_loop_item_title', 'my_sold_out_loop' );
 
function my_sold_out_loop() {
    global $product;
 
    if ( !$product->is_in_stock() ) {
        echo '<span class="soldout">нет в наличии</span>';
    }
    if ( $product->is_in_stock() ) {
        echo '<span class="ishere">в наличии</span>';
    }
}




//////////////CHANGE BUTTON ADD TO CARD
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );   
function tb_woo_custom_cart_button_text() {
       global $product;
 

/*if( is_product() ){
  if( $product->is_in_stock() ){
        return __( 'Купить', 'woocommerce' );
}
}*/

if( $product->is_in_stock() ){
        return __( '', 'woocommerce' );
    } 
   
    else{
        return __( 'Подробнее', 'woocommerce' );
    }
}




/* if( is_product() ){
  if( $product->is_in_stock() ){
        return __( '11', 'woocommerce' );
}
}
 */




//убираем количество в категориях
add_filter('woocommerce_subcategory_count_html','remove_count');

function remove_count(){
 $html='';
 return $html;
}


add_filter('wp_nav_menu_items', 'add_login_logout_link', 15, 2);



function add_login_logout_link($items, $args) {

$loginoutlink = wp_loginout('index.php', false);
  if ( 'secondary' == $args->theme_location ) {

if(!is_user_logged_in()) 

   $items .= '<li id="lol"><a href="wordpress/reg/">Регистрация</a></li>';

else 

$items .= '<li class="for_delete"><a href="/wordpress/user/">Личный кабинет</a></li>';

$items .= '<li class="kate">'. $loginoutlink .'</li>';}

 return $items;

}










//регистрация меню еще 1
if(function_exists('register_nav_menus')){
  register_nav_menus(
    array( // создаём любое количество областей
      'main_menu' => 'Главное меню', // 'имя' => 'описание'
      'foot_menu' => 'Меню в футере'
    )
  );
}

add_filter( 'yith_wcas_submit_as_input', '__return_false' );
add_filter( 'yith_wcas_submit_label', 'my_yith_wcas_submit_label' );
function my_yith_wcas_submit_label( $label ) { 
    return '<i class="fa fa-search"></i>' ; 
}

add_filter( 'post_link', function($a){
  return str_replace( 'category/', '', $a );
}, 99 );



function wc_discount_total_30() {
 
    global $woocommerce;
      
    $discount_total = 0;
      
    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values) {
          
   $_product = $values['data'];
  
        if ( $_product->is_on_sale() ) {
        $regular_price = $_product->get_regular_price();
        $sale_price = $_product->get_sale_price();
        $discount = ($regular_price - $sale_price) * $values['quantity'];
        $discount_total += $discount;
        }
  
    }    
            
if ( $woocommerce->cart->subtotal + $woocommerce->cart->shipping_total > $woocommerce->cart->total + $woocommerce->cart->shipping_total || $discount_total > 0 ) {
      
    echo '<tr class="cart-discount">
    <th>'. __( 'Вы сэкономили:', 'woocommerce' ) .'</th>
    <td data-title=" '. __( 'Saved', 'woocommerce' ) .' ">' 
    . wc_price( $woocommerce->cart->subtotal - $woocommerce->cart->total + $woocommerce->cart->shipping_total + $discount_total ) .'</td>
    </tr>';
}    
 
}
 
// Hook our values to the Basket and Checkout pages
 
add_action( 'woocommerce_cart_totals_after_order_total', 'wc_discount_total_30', 99);
add_action( 'woocommerce_review_order_after_order_total', 'wc_discount_total_30', 99);





register_nav_menu( 'header-menu', 'Header Menu');
    // Or you can register multiple menus at once:
register_nav_menus(
        array(
                'header-menu' => __( 'Header Menu' ),
                'Top-menu' => __( 'Top Menu' )
        )
          );

//отображение купонов
add_filter( 'woocommerce_cart_item_subtotal', 'bbloomer_if_coupon_slash_item_subtotal', 99, 3 );
 
function bbloomer_if_coupon_slash_item_subtotal( $subtotal, $cart_item, $cart_item_key ){
global $woocommerce;
 
// Note: use your own coupon code here
$coupon_code = 'barmada'; 
 
if ( $woocommerce->cart->has_discount( $coupon_code )) {
 
// Note: apply your own coupon discount multiplier here
// In this case, it's a 99% discount, hence I multiply by 0.01
$newsubtotal = wc_price( $cart_item['data']->get_price() * 0.01 ); 
 
$subtotal = sprintf( '<s>%s</s> %s', $subtotal, $newsubtotal ); 
}
 
return $subtotal;
}

///sale in cart
add_filter( 'woocommerce_cart_item_price', 'bbloomer_change_cart_table_price_display', 30, 3 );
  
function bbloomer_change_cart_table_price_display( $price, $values, $cart_item_key ) {
   $slashed_price = $values['data']->get_price_html();
   $is_on_sale = $values['data']->is_on_sale();
   if ( $is_on_sale ) {
      $price = $slashed_price;
   }
   return $price;
}


/*
 add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Российский рубль', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = ' руб.'; break;
     }
     return $currency_symbol;
}
*/

/**
 * Code should be placed in your theme functions.php file.
 */
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    return $html;
}

add_filter( 'woocommerce_product_tabs', 'devise_woo_rename_reviews_tab', 98);
function devise_woo_rename_reviews_tab($tabs) {

$tabs['additional_information']['title'] = 'Характеристики';

return $tabs;
}



