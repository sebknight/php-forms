<?php 
//Start with setting session variables
session_start();

//Get form input and validate
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
    if($_POST['username'] == 'seb' && $_POST['password'] == 'yasqueen'){
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'seb';
        echo ('logged in');
    } else {
        echo('wrong username/password');
    }
}


$page = "login";
require "templates/meta.php";
include "templates/header.php";

?>

<div class="site-wrapper">

<div class="site-wrapper-inner">

<div class="cover-container">
<div class="inner cover">
<h1 class="cover-heading">Login</h1>

<?php 
    $msg = ''; 
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<?php echo $msg; ?>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password" required> <br>
        <button type="submit" name="login" class="btn btn-default">Submit</button>
   </div>
   <a href="logout.php"><h5>Log out</h5></a>
</form>

<?php
include "templates/footer.php";
?>
