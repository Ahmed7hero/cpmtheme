<!-- registering nav menu -->
<?php
function wpdocs_theme_name_scripts(){
    wp_enqueue_style( 'google','https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap', array(),'5.1.1', 'all');
    wp_enqueue_style( 'icon','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(),'5.1.1', 'all');
    wp_enqueue_style( 'gfont','https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap', array(),'5.1.1', 'all');
    wp_enqueue_style( 'fWeight','https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap', array(),'5.1.1', 'all');
    wp_enqueue_style( 'wpdocs_style', '/wp-content/themes/cpmtheme/style.css', array(),'1.0.0', 'all');

    wp_enqueue_script( 'cdm','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(),'5.1.3', true);
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/scripts.js', array(),'5.1.1',true);  
    // wp_enqueue_script( 'forms','https://cdn.startbootstrap.com/sb-forms-latest.js', array(),'5.1.1', true);
        
}

add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
require_once('customizer.php');
/* Registering the menu. */
register_nav_menus( array(
    'primary_menu' => __( 'Primary Menu', 'bootstrapTemplate' ),
    'footer_menu'  => __( 'Footer Menu', 'boostrapTemplate' ),
) );

//styling
function add_class_li($classes,$item,$args){
    if(isset($args->li_class)){
        $classes[]=$args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class','add_class_li',10,3);


function add_anchor_class($attr,$item,$args){
    if(isset($args->a_class)){
        $attr['class']=$args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes','add_anchor_class',10,3);
    ?>