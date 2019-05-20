<?php
session_start();
if(isset($_SESSION['adminnom'])  AND isset($_SESSION['adminprenom']))
{
  session_destroy();
  header('Location:index.php');
}
else{
     header('Location:../index.php');
    }
 ?>
