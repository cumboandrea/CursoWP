<?php get_header(); ?>

<div id="wrapper" class="page-x">
	<?php // include( 'bloginfo.php' ); ?>

	<h1><?php the_title(); ?></h1>

  <div>
    <?php the_post(); ?>
    <?php the_content(); ?>
  </div>

  <a href="<?php bloginfo('url'); ?>" class="inicio">Página de Inicio</a>
</div>

<?php get_footer(); ?>