<?php
session_start();


    if(session_destroy()) {
        header("Location: index.php");
      //  $_SESSION['login_user']=="";

    }

?>