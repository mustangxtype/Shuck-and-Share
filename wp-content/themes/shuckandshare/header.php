<html>
<head>
  <title>Shuck and Share</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
  <?php wp_head(); ?>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <?php the_custom_logo(); ?>
        <h4>Shuck and Share</h4>
      </div>
      <div class="col-md-6">
        <nav class="navbar navbar-default center">
          <div class="container-fluid">
            <div class="collapse navbar-collapse navbar-inner">
              <?wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => false, 'menu_class' => 'nav navbar-nav ' ) ); ?>
            </div>
          </div>
        </nav>
    </div>
    </div>
  </div>
