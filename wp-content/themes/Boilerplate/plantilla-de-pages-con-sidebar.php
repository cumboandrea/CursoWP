<?php 
/*
Template Name: Plantilla de Pages con Slidebar
*/
?>
<?php get_header('plantillapage'); ?>

<div id="wrapper">
	<?php // include( 'bloginfo.php' ); ?>

	<h1><?php the_title(); ?></h1>

	<div class="content">
    <?php the_post(); ?>
    <?php the_content(); ?>
  </div>

  <div class="sidebar">
  	<?php get_sidebar(); ?>
  </div>

	<a href="<?php bloginfo('url'); ?>" class="inicio">Página de Inicio</a>
</div>  
  

<?php get_footer(); ?>