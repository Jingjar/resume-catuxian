<?php
    include "../base.php";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $table=$tables[$_POST['table']];
    // if(!empty($_POST['li'])){
    //     $items=$Exp_i->all();
    //     // echo "<pre>";
    //     // print_r($items);
    //     // echo "</pre>";
    //     foreach($items as $item){
    //         echo "<pre>";
    //         print_r($item);
    //         echo "</pre>";
    //     }
    // }
    $db=new DB($table);
    foreach($_POST['id'] as $key => $id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $db->del($id);    
        }else{
            $row=$db->find($id);
            if(!empty($_POST['text'])){
                $row['text']=$_POST['text'][$key];
            }

            switch($table){
                case "resume_contact":
                    $row['phone']=$_POST['phone'][$key];
                    $row['email']=$_POST['email'][$key];
                break;
                case "resume_img":
                    $row['sh']=($id==$_POST['sh'])?1:0;
                break;
                case "resume_exp_edu":
                    $row['edu']=$_POST['edu'][$key];
                    $row['start_e']=$_POST['start_e'][$key];
                    $row['end_e']=$_POST['end_e'][$key];
                    $row['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case "resume_exp_title":
                    $row['title']=$_POST['title'][$key];
                    $row['start']=$_POST['start'][$key];
                    $row['end']=$_POST['end'][$key];
                    $row['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case "resume_skills":
                    $row['title']=$_POST['title'][$key];
                    $row['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case "resume_works":
                    $row['title']=$_POST['title'][$key];
                    $row['text']=$_POST['text'][$key];
                    $row['href']=$_POST['href'][$key];
                break;
                default:
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            }
        $db->save($row);
        }
        // echo"<pre>";
        // print_r($row);
        // echo "</pre>";
    }
    to("../backend.php?do={$_POST['table']}");
?>