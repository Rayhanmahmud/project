<?php 


require_once get_template_directory().'/inc/setup.php';
require_once get_template_directory().'/inc/sidebar.php';
require_once get_template_directory().'/inc/enqueue.php';





 require_once get_template_directory() . '/template-parts/theme_option.php';
 require_once get_template_directory() . '/template-parts/theme_element.php';


 require_once get_template_directory() . '/template-parts/project_element.php';
 require_once get_template_directory() . '/template-parts/project_option.php';






if(!class_exists('ReduxFramework')&& file_exists(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php')){
  require_once(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php');
}

if(!isset($redux_demo) && file_exists(dirname(__FILE__).'/redux-framework/sample/function-config.php')){
require_once(dirname(__FILE__).'/redux-framework/sample/function-config.php');
}



?>