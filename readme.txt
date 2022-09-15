<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('stylesheet_directory')?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php bloginfo('stylesheet_directory')?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_directory')?>/css/freelancer.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

# Fetch Site Name and TagLine
Replace the Freelancer Name, <h1> tag content with

<?php bloginfo('name') ?>
Replace the Freelancer Profession / Skill-set, <h2> tag content with

<?php bloginfo('description') ?>