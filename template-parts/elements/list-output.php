<?php 



function project_element_list($attr){

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
 'element_title_eleven' => 'This is title',
 'element_title_tweleve' => 'This is title',
 'element_title_thirten' => 'This is title',
 'element_title_fourtin' => 'This is title',
 'element_title_fifteen' => 'This is title',
 'element_title_sixten' => 'This is title',
 'element_title_seventen' => 'This is title',
 'element_title_eightten' => 'This is title',
 'element_title_nineten' => 'This is title',
 'element_title_twenten' => 'This is title',
 'element_title_tone' => 'This is title',
 'element_title_ttwo' => 'This is title',
 'element_title_tthree' => 'This is title',
 'element_des_one' => 'This is description',
 'element_title_tfour' => 'This is title',
 'element_des_two' => 'This is description',
 'element_title_tfive' => 'This is title',
'element_des_three' => 'This is description',
 
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
									<div class="row">
										<div class="col-6 col-12-small">
											<h4><?php echo esc_html($element_title_two);?></h4>
											<ul>
												<li><?php echo esc_html($element_title_three);?></li>
												<li><?php echo esc_html($element_title_four);?></li>
												<li><?php echo esc_html($element_title_five);?></li>
											</ul>
											<h4><?php echo esc_html($element_title_six);?></h4>
											<ul class="alt">
												<li><?php echo esc_html($element_title_seven);?></li>
												<li><?php echo esc_html($element_title_eight);?></li>
												<li><?php echo esc_html($element_title_nine);?></li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<h4><?php echo esc_html($element_title_ten);?></h4>
											<ol>
												<li><?php echo esc_html($element_title_eleven);?></li>
												<li><?php echo esc_html($element_title_tweleve);?></li>
												<li><?php echo esc_html($element_title_thirten);?></li>
												<li><?php echo esc_html($element_title_fourtin);?></li>
												<li><?php echo esc_html($element_title_fifteen);?></li>
												<li><?php echo esc_html($element_title_sixten);?></li>
												<li><?php echo esc_html($element_title_seventen);?></li>
												<li><?php echo esc_html($element_title_eightten);?></li>
												<li><?php echo esc_html($element_title_nineten);?></li>
												<li><?php echo esc_html($element_title_twenten);?></li>
												<li><?php echo esc_html($element_title_tone);?></li>
											</ol>
										</div>
									</div>
									<h4><?php echo esc_html($element_title_ttwo);?></h4>
									<dl>
										<dt><?php echo esc_html($element_title_tthree);?></dt>
										<dd>
											<p><?php echo esc_html($element_des_one);?></p>
										</dd>
										<dt><?php echo esc_html($element_title_tfour);?></dt>
										<dd>
											<p><?php echo esc_html($element_des_two);?></p>
										</dd>
										<dt><?php echo esc_html($element_title_tfive);?></dt>
										<dd>
											<p><?php echo esc_html($element_des_three);?></p>
										</dd>
									</dl>                           
	</div>
						</div>
					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('element_list_section','project_element_list');









?>