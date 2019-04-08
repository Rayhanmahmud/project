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
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>




<?php

return ob_get_clean();

}

add_shortcode('banner_section','project_banner');


//highlight

function project_highlight($attr){

extract(
shortcode_atts(array(

 'high_title' => 'This is title',
 'high_des' => 'This is description',
 'high_title_sm' => 'This is title small',
 'high_des_sm' => 'This is description small',
 
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


						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3><?php echo esc_html($high_title_sm);?></h3>
								</header>
								<p><?php echo esc_html($high_des_sm);?></p>
							</div>
						</section>


						



					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('high_section','project_highlight');

?>