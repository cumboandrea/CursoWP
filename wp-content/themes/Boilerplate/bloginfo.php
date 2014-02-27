	<h2>Función bloginfo</h2>

	<p>Nombre del Sitio: <strong><?php bloginfo( "name" ); ?></strong> <i>(name)</i></p>
	<p>Descripción del Sitio: <strong><?php bloginfo( "description" ); ?></strong> <i>(description)</i></p>
	<p>Email del Administrador de WP: <strong><?php bloginfo( "admin_email" ); ?></strong> <i>(admin_email)</i></p><br />

	<p>Versión: <strong><?php bloginfo( "version" ); ?></strong> <i>(version)</i></p>
	<p>Dirección de la página HTML de WP: <strong><?php bloginfo( "text_direction" ); ?></strong> <i>(text_direction)</i></p>
	<p>Idioma de WP: <strong><?php bloginfo( "language" ); ?></strong> <i>(language)</i></p>
	<p>Encoding de la página: <strong><?php bloginfo( "charset" ); ?></strong> <i>(charset)</i></p>
	<p>Content-Type de WP: <strong><?php bloginfo( "html_type" ); ?></strong> <i>(html_type)</i></p><br />
	
	<p>CSS Primario: <strong><?php bloginfo( "stylesheet_url" ); ?></strong> <i>(stylesheet_url)</i></p>
	<p>Url WP: <strong><?php bloginfo( "wpurl" ); ?></strong> <i>(wpurl)</i></p>
	<p>Url: <strong><?php bloginfo( "url" ); ?></strong> <i>(url)</i></p>
	<p>Url del CSS: <strong><?php bloginfo( "stylesheet_directory" ); ?></strong> <i>(stylesheet_directory)</i></p>
	<p>Url del Template: <strong><?php bloginfo( "template_url" ); ?></strong> <i>(template_url)</i></p>
	<p>Url del Template: <strong><?php bloginfo( "template_directory" ); ?></strong> <i>(template_directory)</i></p>
	<p>Url Pingback XML-RPC: <strong><?php bloginfo( "pingback_url" ); ?></strong> <i>(pingback_url)</i></p><br />
	
	<p>Url Atom feed URL: <strong><?php bloginfo( "atom_url" ); ?></strong> <i>(atom_url)</i></p>
	<p>Url RDF/RSS 1.0 feed: <strong><?php bloginfo( "rdf_url" ); ?></strong> <i>(rdf_url)</i></p>
	<p>Url Atom feed: <strong><?php bloginfo( "rss_url" ); ?></strong> <i>(rss_url)</i></p>
	<p>Url RSS 2.0 feed: <strong><?php bloginfo( "rss2_url" ); ?></strong> <i>(rss2_url)</i></p>
	<p>Url de los comentarios Atom feed: <strong><?php bloginfo( "comments_atom_url" ); ?></strong> <i>(comments_atom_url)</i></p>
	<p>Url de los comentarios RSS 2.0 feed: <strong><?php bloginfo( "comments_rss2_url" ); ?></strong> <i>(comments_rss2_url)</i></p>