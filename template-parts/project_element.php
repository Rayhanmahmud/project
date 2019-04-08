<?php 

//Elements header

function project_element_header($attr){

extract(
shortcode_atts(array(

 'element_title' => 'This is title',
 
),$attr)
);

ob_start();
?>

<div id="heading" >
				<h1><?php echo esc_html($element_title);?></h1>
			</div>


<?php

return ob_get_clean();

}

add_shortcode('element_section','project_element_header');


//Elements section
?>




     <?php

       //Text section

       
require_once get_template_directory() . '/template-parts/elements/text-output.php';


//Elements list section

require_once get_template_directory() . '/template-parts/elements/list-output.php';

//Elements icon section

require_once get_template_directory() . '/template-parts/elements/icon-output.php';

?>
         



		
