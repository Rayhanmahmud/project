<?php



function project_element_icon($attr){

extract(
shortcode_atts(array(

 'element_title_one' => 'This is title',
 'element_title_two' => 'This is title',
 'element_title_three' => 'This is title',
 'element_title_four' => 'This is title',
 'element_title_five' => 'This is title',
 'element_title_six' => 'This is title',
 'element_title_seven' => 'This is title',
 'element_title_eight' => 'This is title',
 'element_title_nine' => 'This is title',
 'element_title_ten' => 'This is title',
 
),$attr)
);

ob_start();
?>

<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-6 col-12-medium">

<h3><?php echo esc_html($element_title_one);?></h3>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label"><?php echo esc_html($element_title_two);?></span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label"><?php echo esc_html($element_title_three);?></span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label"><?php echo esc_html($element_title_four);?></span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label"><?php echo esc_html($element_title_five);?></span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label"><?php echo esc_html($element_title_six);?></span></a></li>
										<li><a href="#" class="icon fa-tumblr"><span class="label"><?php echo esc_html($element_title_seven);?></span></a></li>
										<li><a href="#" class="icon fa-apple"><span class="label"><?php echo esc_html($element_title_eight);?></span></a></li>
										<li><a href="#" class="icon fa-windows"><span class="label"><?php echo esc_html($element_title_nine);?></span></a></li>
										<li><a href="#" class="icon fa-500px"><span class="label"><?php echo esc_html($element_title_ten);?></span></a></li>
									</ul>





<?php

return ob_get_clean();

}

add_shortcode('element_icon_section','project_element_icon');





?>