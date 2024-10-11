<?php 

 session_start();

  if (!isset($_SESSION['firstname'])) {
      header("Location: login.php");
      exit();
  };

  if (isset($_SESSION['LAST_ACTIVITY'])) {
    if (time() - $_SESSION['LAST_ACTIVITY'] > 600) {
        session_unset(); 
        session_destroy(); 
        header("Location: login.php");
        exit();
    }
}
?>