<header>
    <div class="masthead clearfix">
      <div class="inner">
        <h3 class="masthead-brand">PHP site - <?= $page; ?></h3>
        <nav>
          <ul class="nav masthead-nav">
            <li><a class="nav-link <?php if($page === 'home'): ?>active <?php endif; ?>" href="index.php">Home</a></li>
            <li><a class="nav-link <?php if($page === 'about'): ?>active <?php endif; ?>" href="about.php">About</a></li>
            <li><a class="nav-link <?php if($page === 'contact'): ?>active <?php endif; ?>" href="contact.php">Contact</a></li>
            <li><a class="nav-link <?php if($page === 'imageUpload'): ?>active <?php endif; ?>" href="imageUpload.php">Upload image</a></li>
            <li><a class="nav-link <?php if($page === 'login'): ?>active <?php endif; ?>" href="login.php">Login</a></li>
            <!-- <li><a class="nav-link <?php if($page === 'logout'): ?>active <?php endif; ?>" href="logout.php">Logout</a></li> -->
          </ul>
        </nav>
      </div>
</div>    
</header>
<body>