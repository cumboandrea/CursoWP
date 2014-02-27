<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php the_title(); ?></title>
  <meta name="description" content="Función de wordpress bloginfo">
  <meta name="author" content="Andrea Cumbo">

  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>

<body>