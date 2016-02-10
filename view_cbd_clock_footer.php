<?php
//Includes Custom Functions file
  include "./assets/scripts/customFunctions.php";
?>
<footer>
		<div class="cbd-footer container-fluid max-width shadow">
			<div class="row cbd-content-block">
				<br />
				<div class="container-fluid footer-navbar">
					<div class="row">
						<div class="col-lg-4"><a href="<?php echo site_url('site/home') ?>" class="footer-navbar-item"><strong>Home</strong></a></div>
						<div class="col-lg-4"><a href="<?php echo site_url('site/about') ?>" class="footer-navbar-item"><strong>About</strong></a></div>
						<div class="col-lg-4"><a href="#" class="footer-navbar-item"><strong>Contact</strong></a></div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 text-right"><span class="elapsedTime">Page rendered in <strong>{elapsed_time}</strong> seconds</span></div>
						<div class="col-lg-12 text-right"><span class="ci_version"><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></span></div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 text-right copyright">
							<h3 class="hidden">Copyright notice</h3><?php echo $footerCR ?>
							<br />
							<br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    Comment line: Include all compiled plugins (below), or include individual files as needed 
    <script src="js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/proj-js/digital-clock-proj/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/proj-js/digital-clock-proj/digital-clock.js"></script>
  </body>
</html>
