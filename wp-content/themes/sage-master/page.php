<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="top-header text-center">
    <div class="container">
      <div class="social-icons block">
        <ul class="list-inline">
          <li><a href="https://www.facebook.com/apolomx/?fref=ts"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/icons/facebook.png" alt=""></a></li>
          <li><a href="https://www.instagram.com/apolomx/"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/icons/instagram.png" alt=""></a></li>
          <li><a href="https://www.youtube.com/user/APOLOMXTV"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/icons/youtube.png" alt=""></a></li>
          <li><a href="https://twitter.com/apolomx"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/icons/twitter.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header text-center">
    <div class="container">
      <div class="photo-container">
        <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/photo.png" alt="" class="photo">
      </div>
      <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/noise-logo.png" alt="" class="photo-noise">
      <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png" alt="" class="logo">
    </div>
  </div>
  <a href="#" class="scroll-icon text-center block">
    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/scroll-icon.png" alt="">
  </a>
  <div class="container video block">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="block">
          <p class="lead unmargin"><em>Nuevo Video</em></p>
          <h1 class="unmargin">
            Polaris
          </h1>
        </div>
      </div>
      <div class="col-sm-7">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/GmivsQUxOHw" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="container section">
    <div class="row">
      <div class="col-sm-8">
        <h3>Biografía</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a justo ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque erat ante, ultricies in blandit quis, maximus non diam. Duis rutrum sem ut quam consectetur, ut iaculis urna eleifend. Vivamus congue velit magna, eu consequat sapien finibus sed. Donec faucibus ex vitae semper commodo. Nam gravida sapien vitae imperdiet ultrices. Duis faucibus, ipsum a faucibus consectetur, sapien dui molestie augue, non porta libero velit eget ipsum. Morbi sed dapibus nisi. Nulla facilisi. Nulla egestas sem a ligula porta iaculis. Praesent commodo sapien non tellus ultrices pharetra. Aenean dictum metus ac malesuada faucibus. Donec id lacinia velit. Donec porta, lectus a mattis sodales, dolor arcu dignissim nunc, non hendrerit enim mi vitae urna.

Suspendisse non fermentum neque, at ullamcorper justo. Praesent consectetur felis sit amet consectetur vulputate. Curabitur feugiat et odio at cursus. Sed a placerat arcu. Proin sed lobortis metus. Integer porta venenatis sagittis. Duis in magna eget ipsum laoreet semper vel sed erat. Proin venenatis sodales tellus, dignissim efficitur turpis posuere vel. Aliquam eu varius enim. Phasellus non accumsan risus, in semper nibh. Maecenas dui enim, mollis id ullamcorper vitae, tincidunt id felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        </p>
      </div>
      <div class="col-sm-4">
        <h3>Música</h3>
        <div class="media album">
          <div class="media-left">
            <img src="#" alt="disco 1">
          </div>
          <div class="media-body">
            <em>2008</em>
            <a href="#">Escuchar en spotify</a>
            <a href="#">Comprar</a>
          </div>
        </div>
        <div class="media album">
          <div class="media-left">
            <img src="#" alt="disco 1">
          </div>
          <div class="media-body">
            <em>2008</em>
            <a href="#">Escuchar en spotify</a>
            <a href="#">Comprar</a>
          </div>
        </div>
        <div class="media album">
          <div class="media-left">
            <img src="#" alt="disco 1">
          </div>
          <div class="media-body">
            <em>2008</em>
            <a href="#">Escuchar en spotify</a>
            <a href="#">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tour section">
    <div class="container">
      <h1 class="text-center">Próximas fechas</h1>
      <script type='text/javascript' src='http://widget.bandsintown.com/javascripts/bit_widget.js'></script><a href="http://www.bandsintown.com/Felipe%20el%20Hombre" class="bit-widget-initializer" data-prefix="fbjs" data-artist="Felipe el Hombre">Felipe el Hombre Tour Dates</a>
    </div>
  </div>
  <div class="footer section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Management</h3>
          <a href="mailto:cesar@313agency.com">cesar@313agency.com</a>
          <h3>Booking</h3>
          <a href="mailto:contactoapolo@gmail.com">contactoapolo@gmail.com</a>
        </div>
        <div class="col-sm-8">
          <h3>Contrataciones</h3>
          <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
