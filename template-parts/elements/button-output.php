<?php



function project_element_button($attr){

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
 'element_title_elevent' => 'This is title',
 'element_title_tweleve' => 'This is title',
 'element_title_thrteen' => 'This is title',
 'element_title_fourten' => 'This is title',
 'element_title_fiften' => 'This is title',
 
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
									<ul class="actions">
										<li><a href="#" class="button primary"><?php echo esc_html($element_title_two);?></a></li>
										<li><a href="#" class="button"><?php echo esc_html($element_title_three);?></a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary large"><?php echo esc_html($element_title_four);?></a></li>
										<li><a href="#" class="button"><?php echo esc_html($element_title_five);?></a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button small"><?php echo esc_html($element_title_six);?></a></li>
										<li><a href="#" class="button wide"><?php echo esc_html($element_title_seven);?></a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button primary fit"><?php echo esc_html($element_title_eight);?></a></li>
										<li><a href="#" class="button fit"><?php echo esc_html($element_title_nine);?></a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button primary fit small"><?php echo esc_html($element_title_ten);?></a></li>
										<li><a href="#" class="button fit small"><?php echo esc_html($element_title_elevent);?></a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon fa-search"><?php echo esc_html($element_title_tweleve);?></a></li>
										<li><a href="#" class="button icon fa-download"><?php echo esc_html($element_title_thrteen);?></a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled"><?php echo esc_html($element_title_fourten);?></span></li>
										<li><span class="button disabled"><?php echo esc_html($element_title_fiften);?></span></li>
									</ul>


	</div>
						</div>
					</div>
				</div>
			</section>


<?php

return ob_get_clean();

}

add_shortcode('element_button_section','project_element_button');





?>