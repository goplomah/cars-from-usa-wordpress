<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auto express</title>
  <?php wp_head(); ?>



</head>
<body class="root">
  <header class="header">
    <div class="container">
      <div class="header__top">
        <?php the_custom_logo(); ?>
      <a href="tel:<?php the_field('phone-number');?>" class="phone"><?php the_field('phone');?></a>
      </div>
      <div class="header__content">
        <h1 class="header__title"><?php the_field('title'); ?></h1>
        <h2 class="header__subtitle"><?php the_field('trigger'); ?></h2>
        <p class="header__text"><?php the_field('text'); ?></p>
        <a href="#" class="button">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">
          <a href="<?php the_field('instagram-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="иконка инстаграма." class="social__img"></a>
          <a href="<?php the_field('telegram-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/telegram.svg" alt="иконка телеграма." class="social__img"></a>
          <a href="<?php the_field('whatsapp-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/whatsapp.svg" alt="иконка ватсапа." class="social__img"></a>
          <a href="<?php the_field('facebook-link'); ?>" class="social__link"><img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="иконка файсбука." class="social__img"></a>
        </div>
        <img src="<?php the_field('top-image');?>" alt="форд мустанг." class="header__image">
      </div>
    </div>
  </header>