<?php
session_start();
if (!empty($_SESSION['username'])) {
    unset($_SESSION['username']); //remove session variables - unset rather than destroy so ID remains
    echo ('You have been logged out... redirecting in 2 seconds');
    header('Refresh:2; URL=login.php');
} else {
    echo ('You have to be logged in to log out...');
}


$page = "logout";
require "templates/meta.php";
include "templates/header.php";

?>
<div class="site-wrapper">

<div class="site-wrapper-inner">

<div class="cover-container">
<div class="inner cover">
<!-- <h1 class="cover-heading">Logged out</h1> -->

<?php
include "templates/footer.php";
?>
