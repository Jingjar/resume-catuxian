<?php
    include_once "../base.php";

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    if(($Login->count(['acc'=>$acc,'pw'=>$pw]))>0){
        $row=$Login->find(['acc'=>$acc,'pw'=>$pw]);
        print_r($row);
        $_SESSION['login']=$row['name'];
        echo $_SESSION['login'];
        to("../backend.php");
    }else{
        to("../login.html");
    }


?>