<?php get_header(); ?>

<div id="wrapper" class="single">
	<?php // include( 'bloginfo.php' ); ?>

	<h1><?php the_title(); ?></h1>
	
  <div>
    <?php the_post(); ?>
    <?php the_content(); ?>
  </div>

  <a href="<?php bloginfo('url'); ?>" class="inicio">Página de Inicio</a>
</diV>
  
<?php get_footer(); ?>