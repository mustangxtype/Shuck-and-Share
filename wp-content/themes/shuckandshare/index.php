<?php get_header(); ?>

  <div class="container">

    <div class="text-center">
      <h1><?php echo get_bloginfo( 'name' ); ?></h1>
    </div>

    <div class="row text-center">
      <div class="col-sx-9 col-sm-9 col-md-9">
        <h3>Main div</h3>
      </div>
      <div class="col-sx-3 col-sm-3 col-md-3">
        <h3>Sidebar</h3>
  		<?php get_sidebar(); ?>
  	</div>
    </div>
  </div>


<?php get_footer(); ?>
