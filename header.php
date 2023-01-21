<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>festival</title>

    <?php wp_head(); ?>
  </head>
  <body> 
    <header class="header" style="background: url(&quot;<?php echo get_background_image(); ?>&quot;)">
      <div class="header__content">
        <nav class="nav container-xxl"> 
          <ul> 

            <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'container' => null,
            'menu_class' => 'container-min',
            'menu_id' => '',
            'items_wrap' => '%3$s'
            )); ?>

            <li class="menu_nav">
              <div class="srick"></div>
              <div class="srick"></div>
              <div class="srick"></div>
            </li>
          </ul>
        </nav>
        <div class="menu">
          <div class="srick"></div>
          <div class="srick"></div>
          <div class="srick"></div>
        </div>
        <div class="header__text container-xxl">
          <div class="header__left">
            <h3><?php the_field('header_title_text_h1', 18);?></h3>
            <h1><?php the_field('header_title_text_h3', 18);?></h1>
          </div>
          <div class="header__right">
            <h2><?php the_field('header_title_text_h2', 18);?>	</h2>
            <p><?php the_field('header_text_p', 18);?></p>
            <a href="<?php the_field('header_button', 18);?>"> read more</a>
          </div>
        </div>
      </div>
    </header>