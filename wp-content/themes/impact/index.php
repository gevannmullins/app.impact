<!-- The Silent One -->
<?php


//Image Slider


//slider_image = field
//portfolio_slider = subfield

function agero_slider() {

if( have_rows('slider_image') ):
echo '<div class="slider-for">';
 	// loop through the rows of data
    while ( have_rows('slider_image') ) : the_row();
    // display a sub field value
    //vars
    $image = get_sub_field('portfolio_slider');
    ?>
	<div><img src="<?php echo $image['url']; ?>"/></div>
  <?php
    endwhile;
echo '</div>
      <div class="slider-nav">';
 	// loop through the rows of data
    while ( have_rows('slider_image') ) : the_row();
    // display a sub field value
    //vars
    $image = get_sub_field('portfolio_slider');
    ?>
	<div><img src="<?php echo $image['url']; ?>"/></div>
  <?php
    endwhile;
echo '</div>';

else :

    // no rows found

endif;

}