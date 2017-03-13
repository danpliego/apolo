<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

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
        <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/photo.png" alt="" class="photo img-responsive center-block">
      </div>
      <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/noise-logo.png" alt="" class="photo-noise img-responsive center-block">
      <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png" alt="" class="logo img-responsive">
    </div>
  </div>

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
