<?php
//Includes Custom Functions file
	include "./assets/scripts/customFunctions.php";
?>
	<section class="<?php echo $scheme_name ?> main-opening" id="about-entry">
		<article class="cbd-content">
			<div>
			<img class="img-responsive cbd-img" src="<?php echo base_url() ?>/assets/img/cbd-main/web-dev-img-2.jpg">
			</div>
		</article>
	</section>
	<section>
		<article>
				<div class="content-header">
					<?php
						foreach($results as $row){
							$title = $row->title;
							$text1 = $row->text1;
						}
					?>
				</div>
				<div class="container-fluid">
					<h2><?php echo $title; ?></h2>
					<p class="text-justify">
						<?php echo $text1; ?>
					</p>
				</div>
			</div>
		</article>
	</section>
