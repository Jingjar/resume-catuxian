<?php
    include_once "../base.php";

    $table=$tables[$_POST['table']];
    $db=new DB($table);
    $data=[];

    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../media/img/".$_FILES['img']['name']);
        $data['img']=$_FILES['img']['name'];
    }
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }

    switch($table){
        case "resume_img":
            $data['sh']=0;   
        break;
    }
    print_r($data);
    $db->save($data);
    to("../backend.php?do={$_POST['table']}");
?>
