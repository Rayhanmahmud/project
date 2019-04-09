<?php 


function project_element_text($attr){

extract(
shortcode_atts(array(

 'element_title_one' => 'This is title',
 'element_des_one' => 'This is description',
 'element_title_two' => 'This is title',
 'element_title_three' => 'This is title',
 'element_title_four' => 'This is title',
 'element_title_five' => 'This is title',
 'element_title_six' => 'This is title',
 'element_des_two' => 'This is description',
 
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
									<p><?php echo esc_html($element_des_one);?></p>
									<h2><?php echo esc_html($element_title_two);?></h2>
									<h3><?php echo esc_html($element_title_three);?></h3>
									<h4><?php echo esc_html($element_title_four);?></h4>
									<h5><?php echo esc_html($element_title_five);?></h5>
									<h6><?php echo esc_html($element_title_six);?></h6>
									<p><?php echo esc_html($element_des_two);?></p>

   
		</div>
						</div>
					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('element_text_section','project_element_text');









?>