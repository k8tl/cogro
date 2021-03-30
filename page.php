<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

		<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<div id="menu" class="site-main" role="main">
            
        
            <div class="row">
  <div class="col-8">
				 <h2>
		Download our app
	  </h2>
				</div>
  <div class="col-4">
	  <h2>
		  About Us
	  </h2>
	  <p>
		  Common Ground is a popular coffee shop on Queen’s University campus, located on the second floor of the Queen’s Centre, and owned by your student government, the Alma Mater Society. Both the main location and The Brew are run by a staff and management team that is comprised entirely of students. This means that from the music to our menu, we know what students want and strive to exceed your expectations! Common Ground, or CoGro as it has been lovingly nicknamed, offers a menu of quality food and drinks at prices reasonable for your student budget. Not only is CoGro a delicious option for breakfast, lunch, or dinner, it is a wonderful place to hang out with friends between classes or meet up for study sessions. Common Ground’s atmosphere attracts a great mix of Queen’s students and our smiling staff will keep you coming back for more!
	  </p>
				
				</div>
</div>
            
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
