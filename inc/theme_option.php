<?php


//banner

function banner_sec(){



vc_map(array(

      'name' => __('Banner section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'banner_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'banner_title',
            'type' => 'textfield',
            'heading'=> 'the banner section',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'banner_des',
            'type' => 'textarea',
            'heading'=> 'the banner description',
            'value' => 'placeholder'
        ),
      )

  ));


  //HIGHLIGHT

  vc_map(array(

      'name' => __('High section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'high_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'high_title',
            'type' => 'textfield',
            'heading'=> 'the banner section',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'high_des',
            'type' => 'textarea',
            'heading'=> 'the banner description',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'high_title_sm',
            'type' => 'textfield',
            'heading'=> 'the banner section',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'high_des_sm',
            'type' => 'textarea',
            'heading'=> 'the banner description',
            'value' => 'placeholder'
        ),


      )

  ));





 }
add_action("vc_before_init","banner_sec");



?>