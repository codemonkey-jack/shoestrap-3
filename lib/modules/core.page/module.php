<?php

/*
 * The page core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_page_options' ) ) {
  function shoestrap_module_page_options($sections) {

    // Page Options
    $section = array(
    		'title' => __("Page", "shoestrap"),
    		'icon' => SOF_URL.'img/glyphicons/glyphicons_036_file.png',
    	);

    $fields[] = array(
      "name"      => __("Custom Page Layout", "shoestrap"),
      "desc"      => __("Set a default layout for your blob/post pages. Default: OFF.", "shoestrap"),
      "id"        => "page_layout_toggle",
      "std"       => 0,
      "type"      => "switch",
      "customizer"=> array(),
    );

    $fields[] = array(
      "name"      => __("Page Layout", "shoestrap"),
      "desc"      => __("Override your default stylings. Choose between 1, 2 or 3 column layout.", "shoestrap"),
      "id"        => "page_layout",
      "std"       => shoestrap_getVariable('layout', 1),
      "type"      => "images",
      "fold"      => "page_layout_toggle",
      "customizer"=> array(),
      "options"   => array(
        0         => SOF_URL.'img/1c.png',
        1         => SOF_URL.'img/2cr.png',
        2         => SOF_URL.'img/2cl.png',
        3         => SOF_URL.'img/3cl.png',
        4         => SOF_URL.'img/3cr.png',
        5         => SOF_URL.'img/3cm.png',
      )
    );

    $section['fields'] = $fields;

    do_action( 'shoestrap_module_page_options_modifier' );
    
    array_push($sections, $section);
    
    return $sections;

  }
}
add_action( 'shoestrap_add_sections', 'shoestrap_module_page_options', 76 ); 

/*
Disabled by roots by default. No real need, but the code here anyways
function shoestrap_core_page_comments_toggle() {
  if (is_page() && shoestrap_getVariable('page_comments_toggle')) {
    add_filter('get_comments_number', '__return_false', 10, 3);
  }
}
add_action( 'init','shoestrap_core_page_comments_toggle', 76 );
*/
