<?php



function project_header(){

wp_enqueue_style("project-main",get_theme_file_uri("assets/css/main.css"),null,"2.0");
wp_enqueue_style("project-style",get_stylesheet_uri());



wp_enqueue_script("project-min",get_theme_file_uri("assets/js/jquery.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-browser",get_theme_file_uri("assets/js/browser.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-breakpoints",get_theme_file_uri("assets/js/breakpoints.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-util",get_theme_file_uri("assets/js/util.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-main_js",get_theme_file_uri("js/jquery-3.3.1.min.js"),array('jquery'),null,"2.0");

}
add_action("wp_enqueue_scripts","project_header");






?>