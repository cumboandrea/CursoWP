<?php get_header(); ?>

<div id="wrapper">

	<h1>Página de Inicio del curso WordPress</h1>
	
	<div class="element">
		<p>Páginas:</p>
		<ul>
	    <li><a href="<?php bloginfo( 'url' ); ?>?page_id=10">¿Quien somos?</a></li>
	    <li><a href="<?php bloginfo( 'url' ); ?>?page_id=8">Contacts</a></li>
	    <li><a href="<?php bloginfo( 'url' ); ?>?page_id=16">Plantilla con sidebar</a></li>
	  </ul>
	</div>

	<div class="element">
		<p>Una Entrada:</p>
		<a href="<?php bloginfo( 'url' ); ?>?p=6">Primera Entradas (<?php the_title(); ?>)</a>
	</div>

	<div class="element">
		<p>Todas las Entradas:</p>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				<div><?php the_title(); ?></div>
			<?php 
			endwhile;
		else :
			echo wpautop( 'Sorry, no posts were found' );
		endif;
		?>
	</div>

</div>

<?php get_footer(); ?>