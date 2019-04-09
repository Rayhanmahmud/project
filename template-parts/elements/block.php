<?php



vc_map(array(

      'name' => __('Element block section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'element_block_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'element_title_one',
            'type' => 'textfield',
            'heading'=> 'the element title Block',
            'value' => 'placeholder'
        ),
        array(

            'param_name' => 'element_des_one',
            'type' => 'textarea',
            'heading'=> 'the element description one',
            'value' => 'placeholder'
        ),
       
          
      )

  ));









?>