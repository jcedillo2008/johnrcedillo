<section class="<?php echo $scheme_name ?> main-opening" id="site-entry">
  <article class="cbd-content">
    <div class="container-fluid cbd-img-tag text-center">
      <div clas="row">
        <div class="col-lg-12">
          <div>
            <br />
            <br />
            <h2>Canvas / Javascript - Tetris Demo</h2>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis nec arcu at elementum. 
                Vivamus accumsan iaculis interdum. Maecenas fringilla risus massa. Cras vel felis eu risus 
                molestie eleifend. Quisque enim nulla, volutpat a bibendum at, finibus eu ligula. In eu 
                pretium nunc, sed tempor nulla. Ut pulvinar erat lacus, sit amet imperdiet lorem tempor sed. 
                Curabitur dictum posuere nisi, eget pretium ante semper at. Aliquam porta venenatis gravida. 
                Morbi convallis aliquam leo, vel imperdiet nunc ultrices eget. Mauris cursus tellus ut elit 
                fringilla posuere.
              </p>
              <br />
            <div id="tetris">
              <div id="menu">
                <p id="start"><a href="javascript:play();">Press Space to Play.</a></p>
                <p><canvas id="upcoming"></canvas></p>
                <p>Score: <span id="score">00000</span></p>
                <p>Level: <span id="rows">0</span></p>
              </div>
              <canvas id="canvas">
                Sorry, this example cannot be run because your browser does not support the &lt;canvas&gt; element
              </canvas>
            </div>
          </div>
          <script type="text/javascript"></script>
          <script type="text/javascript" src="<?php echo base_url() ?>assets/js/proj-js/tetris-demo-proj/stats.js"></script>
          <script type="text/javascript" src="<?php echo base_url() ?>assets/js/proj-js/tetris-demo-proj/tetris-proj.js"></script>
        </div>
      </div>
    </div>
  </article>
</section>
