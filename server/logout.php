<?php
    session_start();
  
    session_destroy();

    header('Location:../app/home.php');
?>