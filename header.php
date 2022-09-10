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
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu([
                    'theme_location' => 'menu',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarNav',
                    'menu_class' => 'navbar-nav',
                    'menu_id' => 'my_top_menu'
                    ]); ?>
                </div>
            </nav>
        </div>