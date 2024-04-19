<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

    <?php 
    wp_nav_menu(
        array(
            "menu_location" => "main-menu"
        )
    );
    ?>

<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <ul class="nav-bar">
                <li class="nav-text"><a href="/">Home</a></li>
                <li class="nav-text"><a href="work">Work</a></li>
                <li class="nav-text"><a href="#about">About</a></li>
            </ul>
        </div>
    </div>
</div> -->
    
