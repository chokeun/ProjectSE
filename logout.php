<?php
 session_start();

  echo "Logout Successfully ";
  unset ($_SESSION['user']);
  session_destroy();   // function that Destroys Session ลบsession
  header("Location: login.php");
?>