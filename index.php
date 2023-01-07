<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset=<?php bloginfo( 'charset' ) ?>>
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class( 'custom-class-name' ); ?>>
    <?php wp_body_open(); ?>

    <h1>Hello world!</h1>

    <?php wp_footer(); ?>
</body>
</html>
