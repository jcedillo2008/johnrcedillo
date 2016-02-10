<section class="<?php echo $scheme_name ?> main-opening" id="site-entry">
	<article class="cbd-content">
		<div class="cbd-jumbotron jumbotron text-center text-white" id="main-jumbotron-1">
			<div class="container cbd-img-tag">
				<div clas="row">
					<div class="col-lg-12">
					  <h2>Hello, world!</h2>
					  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					  <p><a class="btn btn-primary btn-md" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
		<img class="img-responsive cbd-img" src="<?php echo base_url() ?>/assets/img/cbd-main/web-dev-img-1.jpg">
	</article>
</section>
<section class="<?php echo $scheme_name ?> main" id="services">
		<div class="main-article">
			<div class="container-fluid cbd-row-container">
				<div class="row cbd-row">
					<div class="col-lg-12 text-center">
						<h2 class="row-title" id="about-service">A Bit About Myself</h2>
						<hr class="primary">
					</div>
				</div>
			</div>
			<div class="container cbd-row-container-1">
				<div class="row cbd-row">
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<i class="fa fa-4x fa-code wow bounceIn text-primary hvr-float" style="visibility: visible; animation-name: bounceIn;"></i>
							<h3>Front End Development</h3>
							<p class="text-justify text-muted">I utilize a wide array of the latest front-end technologies:</p>
							<ul class="text-left text-muted">
								<li>HTML5</li>
								<li>CSS3</li>
								<li>Wordpress</li>
								<li>Javascript/jQuery</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<i class="fa fa-4x fa-mobile-phone wow bounceIn text-primary hvr-float" style="visibility: visible; animation-name: bounceIn;"></i>
							<h3>Responsive Web Design (RWD)</h3>
							<p class="text-justify text-muted">Use of flexible grids and layouts that can dynamically resize themselves within browsers. RWD, based off the width of the browser, can adjust and optimize user experience regardless of browser size or device.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<i class="fa fa-4x fa-database wow bounceIn text-primary hvr-float" style="visibility: visible; animation-name: bounceIn;"></i>
							<h3>Back End Development</h3>
							<p class="text-justify text-muted">I have dabbled in backend development with my own personal projects. This site being one of those projects since it was developed using PHP/MySQL with a PHP based framework, <a href="http://www.codeigniter.com/" target="_blank">Codeigniter</a></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<i class="fa fa-4x fa-windows wow bounceIn text-primary hvr-float" style="visibility: visible; animation-name: bounceIn;"></i>
							<h3>.Net Framework Development</h3>
							<p class="text-justify text-muted">
								I have worked within the Microsoft .Net Framework with both C# based WinForm Apps/Plugins for MS Dynamics.
							<a data-toggle="collapse" href="#service-collapse-1" aria-expanded="true" aria-controls="service-collapse-1">
        						Click for additional information.
     						</a>
							<div class="collapse text-justify" id="service-collapse-1" aria-expanded="true">
      							<div>
       								<p>
       									Recently, I have been able to gain some experience working within a powerful CRM 
	       								(Client Relationship Management) tool, Microsoft Dynamics. With Dynamics, I was 
	       								able to craft business solutions to tackle business needs and assisted in
	       								 developing/testing/implementing plugins with C# to extend Dynamics beyond its 
	       								 out of box capabilities.
       								 </p>
       								 <p>
       								 	I have also built WinForm apps with C# with MS Visual Studio, which is quickly
       								 	becoming my favorite IDE, to make a WebBrowser control. WebBrowser
       								 	controls are ActiveX controls that use protocols within IE to enable web surfing.
       								 </p>
      							</div>
    						</div>
							</p>
							<ul class="text-left text-muted">
								<li>Microsoft Dynamics Plugins</li>
								<li>C#</li>
								<li>WinForm Apps: WebBrowser Control</li>
								<li>ActiveX</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="<?php echo $scheme_name ?> main" id="project-demos">
		<div class="main-article">
			<div class="container-fluid cbd-row-container">
				<div class="row cbd-row">
					<div class="col-lg-12 text-center">
						<h2 class="row-title" id="about-service">Some Fun Stuff</h2>
						<hr class="primary">
					</div>
				</div>
			</div>
			<div class="container cbd-row-container-1">
				<div class="row cbd-row">
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<div id="geoLoc-frame">
						        <div class="">
						            <div id="geoLoc" class="itemFrame">
						              <div id="output"></div>
						              <br />
						              <p><button onclick="geoFindMe()">Show my location</button></p>
						            </div>
						        </div>
					     	 </div>
							<h3>Geolocation / Javascript / Canvas</h3>
							<p class="text-justify text-muted">I have dabbled in backend development with my own personal projects. This site being one of those projects since it was developed using PHP/MySQL with a PHP based framework, <a href="http://www.codeigniter.com/" target="_blank">Codeigniter</a></p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<div id="canvasFrame">
						        <div>
						          <canvas id="myCanvas" class="itemFrame demo-canvas" width="300" height="300"></canvas>
						        </div>
						    </div>
							<h3>Javascript / Canvas - Solar System</h3>
							<p class="text-justify text-muted">
								I have worked within the Microsoft .Net Framework with both C# based WinForm Apps/Plugins for MS Dynamics.
								<a data-toggle="collapse" href="#service-collapse-2" aria-expanded="true" aria-controls="service-collapse-2">
        						<br />
        						Click for additional information.
     						</a>
							<div class="collapse text-justify" id="service-collapse-2" aria-expanded="true">
      							<div>
       								<p>
       									Recently, I have been able to gain some experience working within a powerful CRM 
	       								(Client Relationship Management) tool, Microsoft Dynamics. With Dynamics, I was 
	       								able to craft business solutions to tackle business needs and assisted in
	       								 developing/testing/implementing plugins with C# to extend Dynamics beyond its 
	       								 out of box capabilities.
       								 </p>
       								 <p>
       								 	I have also built WinForm apps with C# with MS Visual Studio, which is quickly
       								 	becoming my favorite IDE, to make a WebBrowser control. WebBrowser
       								 	controls are ActiveX controls that use protocols within IE to enable web surfing.
       								 </p>
      							</div>
    						</div>
							</p>
						</div>
					</div>
				</div>
				<div class="row cbd-row">
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive cbd-img" src="<?php echo base_url() ?>/assets/img/hexagon-proj/hexagon-img.jpg">
							<h3><a href="<?php echo site_url('hexagon-demo-proj/hexagon/hexagon_demo'); ?>">Canvas / Javascript - Hexagon Demo<br />(Click Here To See Demo)</a></h3>
							<p class="text-justify">
								Curabitur bibendum sem sed nisl ultrices ullamcorper. Maecenas mattis nunc sed ligula 
								fermentum tincidunt vel vel felis. Quisque vel auctor ex. Nullam ut est dui. Fusce accumsan 
								lacus non nisi mattis sodales. Morbi aliquam mi ac lobortis finibus. In vulputate ex ac 
								vehicula molestie. Morbi lobortis, augue quis pharetra tempor, nibh arcu lacinia lacus, 
								quis blandit tellus tortor ac velit. Sed vitae sem a felis ullamcorper tincidunt. Quisque 
								in dignissim quam. Etiam tempor, arcu in molestie tincidunt, ligula ipsum finibus magna, a 
								mollis nisl felis nec est. Maecenas velit ligula, commodo nec imperdiet ac, aliquet sed arcu. 
								Suspendisse eget sodales enim. Aenean sit amet sem leo.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive cbd-img" src="<?php echo base_url() ?>/assets/img/digital-clock-proj/digital-clock-img.jpg">
							<h3><a href="<?php echo site_url('digital-clock-proj/clock/digital_clock'); ?>">Javascript / CSS3 - LED Clock display<br />(Click Here To See Demo)</a></h3>
							<p class="text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis nec arcu at elementum. 
								Vivamus accumsan iaculis interdum. Maecenas fringilla risus massa. Cras vel felis eu risus 
								molestie eleifend. Quisque enim nulla, volutpat a bibendum at, finibus eu ligula. In eu 
								pretium nunc, sed tempor nulla. Ut pulvinar erat lacus, sit amet imperdiet lorem tempor sed. 
								Curabitur dictum posuere nisi, eget pretium ante semper at. Aliquam porta venenatis gravida. 
								Morbi convallis aliquam leo, vel imperdiet nunc ultrices eget. Mauris cursus tellus ut elit 
								fringilla posuere.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="<?php echo $scheme_name ?> main" id="site-components">
		<div class="main-article">
			<div class="container-fluid cbd-row-container">
				<div class="row cbd-row">
					<div class="col-lg-12 text-center">
						<h2 class="row-title" id="about-service">Site Technology:</h2>
						<hr class="primary">
					</div>
				</div>
			</div>
			<div class="container cbd-row-container-1">
				<div class="row cbd-row">
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/HTML5-logo.png">
							<h3>HTML5</h3>
							<p class="text-justify text-muted">
								Duis ut metus a risus imperdiet fermentum et fermentum massa. 
								Vestibulum maximus ipsum tellus, in blandit dolor porttitor eget. 
								Proin porta libero sed luctus accumsan. Phasellus lacinia placerat 
								pharetra. Curabitur quam augue, vestibulum ut justo nec, lobortis 
								imperdiet magna. Vestibulum vel semper elit. Aliquam bibendum eu 
								lacus ac faucibus. Nam varius libero nec orci facilisis, non 
								finibus tortor imperdiet. Pellentesque venenatis, ex ac feugiat 
								placerat, mi ante rutrum felis, sed convallis eros est sit amet 
								arcu. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas. Donec arcu nisl, convallis eget 
								vestibulum sed, faucibus quis purus. Nullam nec ipsum ac ipsum 
								fermentum posuere. Nullam ultrices varius sem nec venenatis. In non 
								justo faucibus, aliquet magna ut, mollis mauris. Suspendisse 
								tristique felis nec nulla finibus aliquam. Nam lacinia mi nisl, vel 
								malesuada mi vehicula ut.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/CSS3-logo.png">
							<h3>CSS3</h3>
							<p class="text-justify text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Sed sagittis nec arcu at elementum. Vivamus accumsan iaculis interdum. 
							Maecenas fringilla risus massa. Cras vel felis eu risus molestie 
							eleifend. Quisque enim nulla, volutpat a bibendum at, finibus eu ligula. 
							In eu pretium nunc, sed tempor nulla. Ut pulvinar erat lacus, sit amet 
							imperdiet lorem tempor sed. Curabitur dictum posuere nisi, eget pretium 
							ante semper at. Aliquam porta venenatis gravida. Morbi convallis aliquam 
							leo, vel imperdiet nunc ultrices eget. Mauris cursus tellus ut elit 
							fringilla posuere.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/jQuery-logo.png">
							<h3>jQuery</h3>
							<p class="text-justify text-muted">
							Nulla vestibulum dapibus nibh. Proin sed lectus est. Nulla malesuada 
							molestie facilisis. Nam maximus euismod turpis sollicitudin aliquet. 
							Sed vel metus quam. Maecenas nec turpis ac ipsum porttitor dapibus. 
							Donec ex eros, feugiat vel malesuada lacinia, congue a mauris. 
							Phasellus dictum rutrum ultricies.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/PHP-logo.png">
							<h3>PHP</h3>
							<p class="text-justify text-muted">
								Curabitur bibendum sem sed nisl ultrices ullamcorper. Maecenas mattis nunc sed ligula 
								fermentum tincidunt vel vel felis. Quisque vel auctor ex. Nullam ut est dui. Fusce accumsan 
								lacus non nisi mattis sodales. Morbi aliquam mi ac lobortis finibus. In vulputate ex ac 
								vehicula molestie. Morbi lobortis, augue quis pharetra tempor, nibh arcu lacinia lacus, 
								quis blandit tellus tortor ac velit. Sed vitae sem a felis ullamcorper tincidunt. Quisque 
								in dignissim quam. Etiam tempor, arcu in molestie tincidunt, ligula ipsum finibus magna, a 
								mollis nisl felis nec est. Maecenas velit ligula, commodo nec imperdiet ac, aliquet sed arcu. 
								Suspendisse eget sodales enim. Aenean sit amet sem leo.
							</p>
						</div>
					</div>
				</div>
				<div class="row cbd-row">
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/bootstrap-logo.png">
							<h3>Bootstrap Framework</h3>
							<p class="text-justify text-muted">
								Duis ut metus a risus imperdiet fermentum et fermentum massa. 
								Vestibulum maximus ipsum tellus, in blandit dolor porttitor eget. 
								Proin porta libero sed luctus accumsan. Phasellus lacinia placerat 
								pharetra. Curabitur quam augue, vestibulum ut justo nec, lobortis 
								imperdiet magna. Vestibulum vel semper elit. Aliquam bibendum eu 
								lacus ac faucibus. Nam varius libero nec orci facilisis, non 
								finibus tortor imperdiet. Pellentesque venenatis, ex ac feugiat 
								placerat, mi ante rutrum felis, sed convallis eros est sit amet 
								arcu. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas. Donec arcu nisl, convallis eget 
								vestibulum sed, faucibus quis purus. Nullam nec ipsum ac ipsum 
								fermentum posuere. Nullam ultrices varius sem nec venenatis. In non 
								justo faucibus, aliquet magna ut, mollis mauris. Suspendisse 
								tristique felis nec nulla finibus aliquam. Nam lacinia mi nisl, vel 
								malesuada mi vehicula ut.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
						<div class="service-block">
							<img class="img-responsive wow bounceIn hvr-float" id="ci-logo-main" src="<?php echo base_url() ?>/assets/img/cbd-main/site-components/codeigniter-logo.png">
							<h3>Codeigniter Framework</h3>
							<p class="text-justify text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Sed sagittis nec arcu at elementum. Vivamus accumsan iaculis interdum. 
							Maecenas fringilla risus massa. Cras vel felis eu risus molestie 
							eleifend. Quisque enim nulla, volutpat a bibendum at, finibus eu ligula. 
							In eu pretium nunc, sed tempor nulla. Ut pulvinar erat lacus, sit amet 
							imperdiet lorem tempor sed. Curabitur dictum posuere nisi, eget pretium 
							ante semper at. Aliquam porta venenatis gravida. Morbi convallis aliquam 
							leo, vel imperdiet nunc ultrices eget. Mauris cursus tellus ut elit 
							fringilla posuere.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="<?php echo $scheme_name ?> main" id="contact">
		<div class="main-article">
			<div class="container-fluid cbd-row-container">
				<div class="row cbd-row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h2 class="row-title" id="contact-title">How to Get In Touch With Me!</h2>
						<hr class="primary">
						<p>
							Ready to put your next project into motion with me? That's awesome! Feel free to reach out to me via 
							phone or send me an email and I will get back to you as soon as I can!
						</p>
					</div>
				</div>
			</div>
			<div class="container cbd-row-container-1">
				<div class="row cbd-row">
					<div class="col-lg-12 text-center">
						<div class="col-lg-4 text-center service-block">
							<i class="fa fa-phone fa-2x wow bounceIn" style="visibility: visible; animation-name: bounceIn;"></i>
							<p>
								<a href="tel:4695311770">(469)-531-1770</a>
							</p>
						</div>
						<div class="col-lg-4 text-center service-block">
							<i class="fa fa-envelope fa-2x wow bounceIn" style="visibility: visible; animation-name: bounceIn;"></i>
							<p>
								<a href="mailto:john.cedillo.2008@outlook.com">john.cedillo.2008@outlook.com</a>
							</p>
						</div>
						<div class="col-lg-4 text-center service-block">
							<ul class="list-unstyled list-inline list-social-icons">
								<li>
									<a href="https://www.facebook.com/john.cedillo.12?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/pub/john-cedillo/87/a66/329" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
