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

                'type' => 'param_group',
                'heading' => 'icon section group',
                'param_name' => 'sec_icon_grp',
                'params' => array(

                    
                    array(
        
                        'param_name' => 'icon_section',
                        'type' => 'iconpicker',
                        'heading' => 'crossfit icon section'
                       
                    ),
        
        
                    array(
        
                        'param_name' => 'icon_title',
                        'type' => 'textfield',
                        'heading' => 'the crossfit title',
                        'value' => 'title',
                        'group' => 'Rayhan'
                    ),
        
                    array(
        
                        'param_name' => 'icon_description',
                        'type' => 'textarea',
                        'heading' => 'the crossfit description',
                        'value' => 'description',
                        'group' => 'Rayhan'
                    ),

                )
            ),


      )

  ));


//CTA


vc_map(array(

      'name' => __('cta section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'cta_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'cta_title',
            'type' => 'textfield',
            'heading'=> 'the cta title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'cta_des',
            'type' => 'textarea',
            'heading'=> 'the cta description',
            'value' => 'placeholder'
        ),
      )

  ));


  //Testimonials


  vc_map(array(

      'name' => __('testi section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'testi_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'testi_title',
            'type' => 'textfield',
            'heading'=> 'the cta title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'testi_des',
            'type' => 'textarea',
            'heading'=> 'the cta description',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'testi_des_one',
            'type' => 'textarea',
            'heading'=> 'the cta description',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'testi_img_one',
            'type' => 'attach_image',
            'heading'=> 'the testi image',
           
        ),

         array(

            'param_name' => 'testi_des_two',
            'type' => 'textarea',
            'heading'=> 'the testi description two',
            'value' => 'placeholder'
        ),

          array(

            'param_name' => 'testi_img_two',
            'type' => 'attach_image',
            'heading'=> 'the testi image',
           
        ),

           array(

            'param_name' => 'testi_des_three',
            'type' => 'textarea',
            'heading'=> 'the testi description three',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'testi_img_three',
            'type' => 'attach_image',
            'heading'=> 'the testi image',
           
        ),

      )

  ));



  //Generic header


  vc_map(array(

      'name' => __('Gheader section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'gheader_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'gheader_title',
            'type' => 'textfield',
            'heading'=> 'the banner section',
            'value' => 'placeholder'
        ),

      )

  ));


  //Generic section


  vc_map(array(

      'name' => __('Generic section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'generic_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'generic_title',
            'type' => 'textfield',
            'heading'=> 'the generic title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'generic_des_one',
            'type' => 'textarea',
            'heading'=> 'the generic description one',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'generic_des_two',
            'type' => 'textarea',
            'heading'=> 'the generic description two',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'generic_title_one',
            'type' => 'textfield',
            'heading'=> 'the generic title one',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'generic_des_three',
            'type' => 'textarea',
            'heading'=> 'the generic description three',
            'value' => 'placeholder'
        ),

         array(

            'param_name' => 'generic_des_four',
            'type' => 'textarea',
            'heading'=> 'the generic description four',
            'value' => 'placeholder'
        ),
      )

  ));


 }
add_action("vc_before_init","banner_sec");



?>