<?php
    session_start();
    session_destroy();
    setcookie("email","",time()-1);
    setcookie("pass","",time()-1);
    header("Location: userlogin.php")
?>