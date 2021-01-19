<?php
    include_once "../base.php";

    $table=$tables[$_POST['table']];
    $db=new DB($table);
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $data=[];
    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
        $data['img']=$_FILES['img']['name'];
    }
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }

    switch($table){
        case "resume_img":
            $data['sh']=0;   
        break;
        case "resume_about":
            $data['about']=$_POST['about'];
        break;
        case "resume_exp_edu":
            $data['edu']=$_POST['edu'];
            $data['start_e']=$_POST['start_e'];
            $data['end_e']=$_POST['end_e'];
        break;
        case "resume_exp_title":
            $data['title']=$_POST['title'];
            $data['start']=$_POST['start'];
            $data['end']=$_POST['end'];
        break;
        case "resume_skills":
            $data['title']=$_POST['title'];
        break;
        case "resume_works":
            $data['title']=$_POST['title'];
            $data['href']=$_POST['href'];
        break;
    }
    // echo $table;    
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    $db->save($data);
    to("../backend.php?do={$_POST['table']}");
?>
