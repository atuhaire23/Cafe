
<?php  
session_start();
unset($_SESSION['id']);
unset($_SESSION['names']);
session_destroy();
session_commit();

echo "<script> window.location.href='login.php' </script>";

?>