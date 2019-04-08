<?php 


function element_sec(){


//Elements header

vc_map(array(

      'name' => __('Element section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'element_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'element_title',
            'type' => 'textfield',
            'heading'=> 'the element title',
            'value' => 'placeholder'
        ),
      )

  ));


  //Elements text section

  require_once get_template_directory() . '/template-parts/elements/text.php';

  //elements list section


  require_once get_template_directory() . '/template-parts/elements/list.php';

//Elements icon section

require_once get_template_directory() . '/template-parts/elements/icon.php';


}
add_action("vc_before_init","element_sec");













?>