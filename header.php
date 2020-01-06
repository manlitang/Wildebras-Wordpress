<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,700i&display=swap" rel="stylesheet">
    <title>Wildebras Clothing | 'Cause shopping second-hand is cool</title>

    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav>
        <div id="burger-button" class="burger">
	        <div class="line1"></div>
	        <div class="line2"></div>
	        <div class="line3"></div>
        </div>  
        <a class="logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img src="<?php bloginfo('template_directory');?>/images/logo1.png" alt="Wildebras Clothing logo">
        </a>

        <div class="nav-links nav-links--mobile">
        <ul id="nav-container">
            <div class="search-bar search-bar--mobile">
                <input type="text" placeholder="Search product...">
                <button type="submit"><img src="<?php bloginfo('template_directory');?>/images/search.svg" alt="Search product"></button>
            </div>

            <?php $locations = get_nav_menu_locations();
            // if there's a location for the primary menu
            if (isset( $locations['top-menu'])) {
                $menu = get_term( $locations['top-menu'], 'nav_menu');
                // if there are items in the primary menu
                if ($items = wp_get_nav_menu_items($menu->name)) {
                    // loop through all menu items to display their content
                    foreach ($items as $item) {
                        // if the current item is not a top level item, skip it
                        if ($item->menu_item_parent != 0) {
                            continue;
                        }
                        // get the ID of the current nav item
                        $curNavItemID = $item->ID;
                        // get the custom classes for the item
                        $classList = implode(" ", $item->classes);
                        echo "<li class=\"{$classList}\">";
                        echo "<a href=\"{$item->url}\">{$item->title}</a>";
                        // build the mega-menu
                        // if 'mega-menu'  exists within the class
                        if (in_array('is-mega-menu', $item->classes)) { ?>
                            <div class="mega-menu">
                                <div class="<?php 
                                    if ($item->title == "Shop vintage") {
                                        echo "mega-menu-column--small";
                                    }
                                    if ($item->title == "Shop collections") {
                                        echo "mega-menu-column--biggest";
                                    }
                                ?> mega-menu-column">
                                    <ul id="nav-container-links1">
                                    <?php
                                        if ($item->title == "Shop vintage") {
                                            echo "<li class=\"mega-menu-title\" id=\"shop-by-product\"><a href=\"#\">Shop by product</a></li>";
                                        }
                                    ?>
                                    <?php // cycle through the menu items and get the subnav
                                        foreach ($items as $subnav) {
                                            $classList = implode(" ", $subnav->classes);
                                            if ($subnav->menu_item_parent == $curNavItemID && in_array('subnav-column1', $subnav->classes)) {
                                                echo "<li class=\"{$classList}\"><a href=\"{$subnav->url}\">{$subnav->title}</a></li>";
                                                if ($item->title == "Shop collections") {
                                                    echo "<p>{$subnav->description}</p>"; 
                                                    ?>
                                                    </ul>
                                                    <img class="subnav-img" src="<?php bloginfo('template_directory');?>/images/wordart.png" alt="WordArt collection">
                                                <?php                              
                                                } 
                                            }
                                        } 
                                    ?>
                                    
                                </div>
                                <div class="<?php 
                                    if ($item->title == "Shop vintage") {
                                        echo "mega-menu-column--small";
                                    }
                                    if ($item->title == "Shop collections") {
                                        echo "mega-menu-column--biggest";
                                    }
                                ?> mega-menu-column">
                                    <ul id="nav-container-links2">
                                    <?php
                                        if ($item->title == "Shop vintage") {
                                            echo "<li class=\"mega-menu-title\" id=\"shop-by-brand\"><a href=\"#\">Shop by brand</a></li>";
                                        }
                                    ?>
                                    <?php // cycle through the menu items and get the subnav
                                        foreach ($items as $subnav) {
                                            $classList = implode(" ", $subnav->classes);
                                            if ($subnav->menu_item_parent == $curNavItemID && in_array('subnav-column2', $subnav->classes)) {
                                                echo "<li class=\"{$classList}\"><a href=\"{$subnav->url}\">{$subnav->title}</a></li>";
                                                if ($item->title == "Shop collections") {
                                                    echo "<p>{$subnav->description}</p>";
                                                    ?>
                                                    </ul>
                                                    <img class="subnav-img" src="<?php bloginfo('template_directory');?>/images/contant.png" alt="CONTANT collection">
                                                <?php 
                                                }
                                            }
                                        } 
                                    ?>
                                </div>
                                <?php
                                    if ($item->title == "Shop vintage") {
                                        ?> <div class="mega-menu-column mega-menu-column--big">
                                            <ul>
                                                <li class="mega-menu-title mega-menu-title--new"><a href="#">What's new</a></li>
                                                <div class="new-items-container">
                                                    <img src="<?php bloginfo('template_directory');?>/images/navimg1.jpg" alt="New products">
                                                    <img src="<?php bloginfo('template_directory');?>/images/navimg2.jpg" alt="New products">
                                                    <img src="<?php bloginfo('template_directory');?>/images/navimg3.jpg" alt="New products">
                                                </div>
                                            </ul>
                                        </div>
                                        <?php 
                                    }
                                ?>
                            </div>
                <?php }
                    echo '</li>';
                        }
                    }
                } ?>
                <div class="user-functions user-functions--mobile">
                    <div class="user-function--mobile">
                        <div class="user-function-icon">
                            <img src="<?php bloginfo('template_directory');?>/images/user-icon.svg" alt="User log in">
                        </div>
                        <a href="#">Log in</a>
                    </div>
                    <div class="user-function--mobile">
                        <div class="user-function-icon">
                            <img src="<?php bloginfo('template_directory');?>/images/heart-icon.svg" alt="Favourites">
                        </div>    
                        <a href="#">Faves</a>
                    </div>
                    <div class="user-function--mobile">
                        <div class="user-function-icon">
                            <img src="<?php bloginfo('template_directory');?>/images/bag-icon.svg" alt="Add to bag">
                        </div>
                        <a href="#">Bag</a>
                    </div>
                </div>
            </ul>
        </div>

        <div class="search-bar search-bar--desktop">
            <input type="text" placeholder="Search product...">
            <button type="submit"><img src="<?php bloginfo('template_directory');?>/images/search.svg" alt="Search product"></button>
        </div>

        <div class="user-functions user-functions--desktop">
            <img src="<?php bloginfo('template_directory');?>/images/user-icon.svg" alt="User log in">
            <img src="<?php bloginfo('template_directory');?>/images/heart-icon.svg" alt="Favourites">
            <img src="<?php bloginfo('template_directory');?>/images/bag-icon.svg" alt="Add to bag">
        </div>
    </nav>
</header>
