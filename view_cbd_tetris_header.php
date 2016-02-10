<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title ?></title>

    <!-- Boottrap CSS -->
    <link href="<?php echo base_url() ?>assets/bs.css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/cbd-master.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/proj-css/tetris-demo-proj/tetris-proj.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/hover-master/css/hover.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/lightbox/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/js/jQuery/jquery-2.1.4.min.js"></script>
    <!-- Boottrap JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bs.js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jQuery/jquery.fittext.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jQuery/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lightbox/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/customJS.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
    /* <![CDATA[ */
	
	//JavaScript for breadcrumb delayed expand
    /* ]]> */
	</script>
    <style>
    </style>
  </head>
  <body class="<?php echo $pg_title ?> cbd">
	<?php
//Includes Custom Functions file
	include "./assets/scripts/customFunctions.php";
?>
	<script type="text/javascript">
    /* <![CDATA[ */
    // But JavaScript code can go wherever it needs to be, including in the body.
    /* ]]> */
	</script>
	<header>
		<div class="cbd-header container-fluid" id="top">
			<div class="header-default">
				<h2 class="site-header">
					<strong>
						<a href="<?php echo site_url('site/home') ?>">
							<?php echo $comp_name; ?>
						</a>
					</strong>
				</h2>
			</div>
		</div>
	</header>
