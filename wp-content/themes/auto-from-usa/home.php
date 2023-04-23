<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
<main class="main">
  <section class="services">
    <div class="container">
      <h2 class="title">НАШИ УСЛУГИ</h2>
      <div class="services__inner">
        <div class="services__content">
          <?php the_field('services-text'); ?>
          <a href="#" class="button button_type_decor">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>                
        </div>
        <?php the_field('services-item'); ?>
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <img src="<?php the_field('benefits-image'); ?>" alt="car" class="benefits__image">
        <div class="benefits__content">
          <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
          <?php the_field('benefits-text'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="carousel">
    <div class="container">
      <h2 class="title">ПРИГНАННЫЕ НАМИ АВТО</h2>
      <div class="carousel__inner">
      <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
    'category' => 2,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>

        <div class="carousel__item">
          <div class="carousel__item-box">
          <?php the_post_thumbnail(
            array(380, 250),
            array(
                'class' => 'carousel__item-img'
            )
            ); ?>
            <h3 class="carousel__item-title"><?php the_title(); ?></h3>
            <p class="carousel__item-price"><?php the_content(); ?></p>
          </div>
        </div>
		
        <?php 
	}
}

wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">КОНТАКТЫ</h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">Адрес</p>
              <p class="contacts__item-text"><?php the_field('adress'); ?></p>
              <p class="contacts__item-text"></p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Время работы</p>
              <p class="contacts__item-text"><?php the_field('working-hours'); ?></p>
              <p class="contacts__item-text"></p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Телефон</p>
              <p class="contacts__item-text"><a href="tel:<?php the_field('phone-number');?>"><?php the_field('phone');?></a></p>
            </li>
          </ul>
        </div>
        <form class="contacts__form">
          <h2 class="title contacts__title">Оставить заявку</h2>
          <?php echo do_shortcode('[contact-form-7 id="30" title="Контактная форма"]'); ?>
        </form>
      </div>
    </div>
  </section>
</main>

<?php get_footer();?>