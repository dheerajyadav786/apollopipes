<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_destroy();
   header('Refresh: 1; URL = login');
   echo 'Redirecting...';
?>