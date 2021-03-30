<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<div id="menu" class="site-main" role="main">
            <div>
 
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Hot Drinks</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cold Drinks</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Bagels + Sandwiches</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Baked Goods</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Soups</a></li>
  </ul>
 
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <table>
  <tr>
    <th>Hot Drinks</th>
    <th>Class</th>
    <th>Exam</th>
  </tr>
  <tr>
    <td>COFFEE
TEA
SPECIALTY TEA
ESPRESSO
AMERICANO
LATTE
CAPPUCCINO
CARAMEL MACCHIATO
CARAMILK LATTE
SPICED LATTE
DARK/WHITE MOCHA
DARK/WHITE HOT CHOCOLATE
CHAI LATTE
LONDON/GOLDEN FOG
MATCHA LATTE
</td>
    <td>$1.77
$1.77
$1.85
$1.50
$1.99
$3.10
$3.10
$3.98
$3.98
$3.98
$3.98
$3.23
$3.70
$3.35
$4.40</td>
    <td>
        1.99

1.77
1.85

2.65
3.75
3.75
4.50
4.50
4.50
4.50
3.89
4.29
3.98
4.90</td>
      <td>
          EXTRA ESPRESSO SHOT
 | $0.75
SUBSTITUTE OAT OR SOY MILK
 | $0.50
FLAVOUR SHOT
 | $0.60
Vanilla, sugar free vanilla, caramel, coconut, cinnamon, hazelnut, peppermint, pumpkin, lemon, raspberry, white peach, habanero, blueberry, eggnog, gingerbread, marshmallow
DELUXE FLAVOUR SHOT
 | $0.80
Creamy Dark Chocolate, creamy caramel, creamy white chocolate
YOGURT
 | $1.00
Add to your smoothie!
HEMP
 | $0.60
Add to your smoothie!
      </td>
  </tr>
</table>
      </div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>
 
</div>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
>