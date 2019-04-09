<?php


function project_banner($attr){

extract(
shortcode_atts(array(

 'banner_title' => 'This is title',
 'banner_des' => 'This is description',
 
),$attr)
);

ob_start();
?>
<section id="banner">
				<div class="inner">
					<h1><?php echo esc_html($banner_title);?></h1>
					<p><?php echo esc_html($banner_des);?></p>
				</div>
				<video autoplay loop muted playsinline src="<?php echo get_template_directory_uri().'/images/banner.mp4'?>"></video>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('banner_section','project_banner');


//highlight

function project_highlight($attr){

extract(
shortcode_atts(array(

 'sec_icon_grp' => '',
 'high_title' => 'This is title',
 'high_des' => 'This is description',
 'icon_section' => '',
 'icon_title' => 'This is icon title',
 'icon_description' => 'This is icon description',
 
),$attr)
);

ob_start();
?>


<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_html($high_title);?></h2>
						<p><?php echo esc_html($high_des);?></p>
					</header>
					<div class="highlights">
               
 <?php 

	$sec_icon_key=vc_param_group_parse_atts($sec_icon_grp);

	foreach($sec_icon_key as $sec_icon_value){

?>

						<section>
							<div class="content">
								<header>
									<a href="#" class="icon"><span class="<?php echo esc_attr($sec_icon_value['icon_section']);?>"></span></a>
									<h3><?php echo esc_html($sec_icon_value['icon_title']);?></h3>
								</header>
								<p><?php echo esc_html($sec_icon_value['icon_description']);?></p>
							</div>
						</section>


		 <?php } ?>



					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('high_section','project_highlight');


//cta section


function project_cta($attr){

extract(
shortcode_atts(array(

 'cta_title' => 'This is title',
 'cta_des' => 'This is description',
 
),$attr)
);

ob_start();
?>

<section id="cta" class="wrapper">
				<div class="inner">
					<h2><?php echo esc_html($cta_title);?></h2>
				    <p><?php echo esc_html($cta_des);?></p>
				</div>
			</section>




<?php

return ob_get_clean();

}

add_shortcode('cta_section','project_cta');


//Testimonial


function project_testimonial($attr){

extract(
shortcode_atts(array(

 'testi_title' => 'This is title',
 'testi_des' => 'This is description',
 'testi_des_one' => 'This is description',
 'testi_img_one' => '',
 'testi_des_two' => 'This is description',
 'testi_img_two' => '',
 'testi_des_three' => 'This is description',
 'testi_img_three' => '',
 
),$attr)
);

ob_start();
?>


<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_html($testi_title);?></h2>
				        <p><?php echo esc_html($testi_des);?></p>
					</header>
					<div class="testimonials">

					
						<section>
							<div class="content">
								<blockquote>
									<p><?php echo esc_html($testi_des_one);?></p>
								</blockquote>
								<div class="author">
									<div class="image">

						<?php 
						$sec_image = wp_get_attachment_image_src($testi_img_one,'full');

						if($sec_image ){ ?>

							<img src="<?php echo esc_url($sec_image[0]);?>" alt="" />

						<?php
						}
						?>
										
									</div>
									<p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>



						<section>
							<div class="content">
								<blockquote>
									<p><?php echo esc_html($testi_des_three);?></p>
								</blockquote>
								<div class="author">
									<div class="image">
											<?php 
						$sec_image_two = wp_get_attachment_image_src($testi_img_two,'full');

						if($sec_image_two ){ ?>

							<img src="<?php echo esc_url($sec_image_two[0]);?>" alt="" />

						<?php
						}
						?>
							
									</div>
									<p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>




						<section>
							<div class="content">
								<blockquote>
									<p><?php echo esc_html($testi_des);?></p>
								</blockquote>
								<div class="author">
									<div class="image">
															<?php 
						$sec_image_three = wp_get_attachment_image_src($testi_img_three,'full');

						if($sec_image_three ){ ?>

							<img src="<?php echo esc_url($sec_image_three[0]);?>" alt="" />

						<?php
						}
						?>
									</div>
									<p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>



					</div>
				</div>
			</section>


<?php

return ob_get_clean();

}

add_shortcode('testi_section','project_testimonial');


//Generic header title

function project_generic_title($attr){

extract(
shortcode_atts(array(

 'gheader_title' => 'This is title',
 
),$attr)
);

ob_start();
?>

<div id="heading" >
				<h1><?php echo esc_html($gheader_title);?></h1>
			</div>


<?php

return ob_get_clean();

}

add_shortcode('gheader_section','project_generic_title');

//Generic section

function project_generic($attr){

extract(
shortcode_atts(array(

 'generic_title' => 'This is title',
 'generic_des_one' => 'This is description one',
 'generic_des_two' => 'This is description two',
 'generic_title_one' => 'This is title',
 'generic_des_three' => 'This is description three',
 'generic_des_four' => 'This is description four',
 
 
),$attr)
);

ob_start();
?>

<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2><?php echo esc_html($generic_title);?></h2>
						</header>
						<p><?php echo esc_html($generic_des_one);?></p>
						<p><?php echo esc_html($generic_des_two);?></p>
						<hr />
						<h3><?php echo esc_html($generic_title_one);?></h3>
						<p><?php echo esc_html($generic_des_three);?></p>
						<p><?php echo esc_html($generic_des_four);?></p>
					</div>
				</div>
			</section>



<?php

return ob_get_clean();

}

add_shortcode('generic_section','project_generic');

?>