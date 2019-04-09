<?php



function project_element_block($attr){

extract(
shortcode_atts(array(

 'element_title_one' => 'This is title',
 'element_des_one' => 'This is desc',

 
 
),$attr)
);

ob_start();
?>

<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					
                        <h3><?php echo esc_html($element_title_one);?></h3>
							<blockquote><?php echo esc_html($element_des_one);?></blockquote> 
 
    



	
					</div>
				</div>
			</section>


<?php

return ob_get_clean();

}

add_shortcode('element_block_section','project_element_block');





?>