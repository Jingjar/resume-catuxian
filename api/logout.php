<?php
    include_once "../base.php";
    $_SESSION['login']=null;
    session_unset();
    to("../index.php");
?>