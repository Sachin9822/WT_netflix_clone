<?php 
session_start();
?>

<?php 
$_SESSION['user'] = '';
header("location:login.html");
?>