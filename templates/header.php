          <!DOCTYPE html>
            <html lang="en">
              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <meta name="description" content="">
                <meta name="author" content="">
                <link rel="icon" href="../../favicon.ico">

                <title><?= $page; ?></title>

                <!-- Bootstrap core CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


                <!-- Custom styles for this template -->
                <link href="css/style.css" rel="stylesheet">
        </head>
          <header>
             <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">PHP site - <?= $page; ?></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a class="nav-link <?php if($page === 'home'): ?>active <?php endif; ?>" href="index.php">Home</a></li>
                  <li><a class="nav-link <?php if($page === 'about'): ?>active <?php endif; ?>" href="about.php">About</a></li>
                  <li><a class="nav-link <?php if($page === 'contact'): ?>active <?php endif; ?>" href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>    
          </header>
          <body>