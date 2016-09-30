<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Fan site for the game Tom Clancy's: The Division. Provides patch notes and a detailed image database of in-game gear and appearance.">
    <meta name="author" content="Kasey Wright and Kody Wright">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

    <title>The Quotient<?php echo !empty($title) ? ': ' . $title : ''; ?></title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS -->
    <script href="<?php echo BASE_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme -->
    <link href="<?php echo BASE_URL; ?>assets/css/quotient-extras.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL; ?>assets/css/justified-nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-75324415-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>

    <div class="container">

        <!-- The justified navigation menu is meant for single line per list item.
        Multiple lines will require custom code not provided by Bootstrap. -->
        <div class="masthead" style="padding-bottom: 50px;">
            <nav>
                <a href="<?php echo BASE_URL; ?>" class="navbar-brand text-primary">THE QUOTIENT TO <i style="color:#fff;">TOM CLANCY'S: THE DIVISION</i></a>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if (!empty($activeHeading) && $activeHeading == 'home') { echo 'class="active"'; } ?>><a href="<?php echo BASE_URL; ?>">HOME</a></li>
                    <li <?php if (!empty($activeHeading) && $activeHeading == 'patches') { echo 'class="active"'; } ?>><a href="<?php echo BASE_URL; ?>patches/">PATCH NOTES</a></li>
                    <li <?php if (!empty($activeHeading) && $activeHeading == 'gear') { echo 'class="active"'; } ?>><a href="<?php echo BASE_URL; ?>items/gear">GEAR</a></li>
                    <li <?php if (!empty($activeHeading) && $activeHeading == 'appearance') { echo 'class="active"'; } ?>><a href="<?php echo BASE_URL; ?>items/appearance">APPEARANCE ITEMS</a></li>
                </ul>
            </nav>
        </div>
