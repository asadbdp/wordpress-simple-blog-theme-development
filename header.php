<!DOCTYPE html >
<html <?php language_attributes();?>>
<head>
<meta charset="UTF-8">
<?php wp_head();?>
<?php 
    /*$arg="this is new values";
    echo apply_filter('some', $arg);*/

 ?>
</head>

<body <?php body_class();?>>
    <?php 
        wp_nav_menu(array(
            'theme-location' => 'main-menu',
            'menu_id' => 'page'
        ))

    ?>
    