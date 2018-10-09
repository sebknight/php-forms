    <?php
      $page = "home";
      $bodyText = "This is some text about the page.";
      require("templates/meta.php");
      include("templates/header.php");
      // require();
    ?>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <h1 class="cover-heading">This is the home page.</h1>
            <p class="lead"><?php echo $bodyText; ?></p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <?php
                include("templates/footer.php");
          ?>
