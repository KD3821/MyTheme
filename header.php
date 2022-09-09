<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php the_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php wp_nav_menu([
                'theme_location' => 'menu',
                'container' => 'div',
                'container_class' => 'container-fluid',
                'menu_class' => 'navbar',
                'menu_id' => 'my_top_menu'
                ]); ?>
        </nav>