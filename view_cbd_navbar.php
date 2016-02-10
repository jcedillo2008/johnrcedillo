<div class="navigation-default max-width">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cbd-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-uppercase" href="<?php echo site_url('site/home'); ?>"><?php echo $author_name; ?></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="cbd-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo site_url('site/home'); ?>">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo site_url('site/about'); ?>">About</a></li>
          <li class="dropdown">
            <a href="javascript:void(null)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <i class="fa fa-angle-double-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('dc-comics-proj/dccomics/dccomics_proj'); ?>">DC Comics - Fan Project</a></li>
              <li><a href="<?php echo site_url('solar-system-proj/solar/solar_system'); ?>">Solar System - Project</a></li>
              <li><a href="<?php echo site_url('digital-clock-proj/clock/digital_clock'); ?>">Digital LED Clock - Project</a></li>
              <li><a href="<?php echo site_url('hexagon-demo-proj/hexagon/hexagon_demo'); ?>">Canvas / JS Hexagon - Project</a></li>
              <li><a href="<?php echo site_url('tetris-demo-proj/tetris/tetris_demo'); ?>">Canvas / JS Tetris - Project</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url('site/home/#contact'); ?>">Contact</a></li>
          <li class="dropdown">
            <a href="javascript:void(null)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('site/home/#top'); ?>">Home (Top of Page)</a></li>
              <li><a href="<?php echo site_url('site/home/#services'); ?>">Services</a></li>
              <li><a href="<?php echo site_url('site/home/#project-demos'); ?>">Project Demonstrations</a></li>
              <li><a href="<?php echo site_url('site/home/#site-components'); ?>">Site Technology</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default btn-md cbd-submit-btn">Submit</button>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
