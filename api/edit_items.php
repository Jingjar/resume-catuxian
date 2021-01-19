<?php
    include_once "../base.php";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    foreach($_POST['id'] as $key=>$id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            //刪除
            $Exp_i->del($id);
        }else{
            if(!empty($id)){
                $item=$Exp_i->find($id);
                $item['title_id']=$_POST['title_id'];
                $item['li']=$_POST['li'][$key];
                print_r($item);
                $Exp_i->save($item);
            }else{
                $row=[];
                $row['title_id']=$_POST['title_id'];
                $row['li']=$_POST['li'][$key];
                print_r($row);
                $Exp_i->save($row);
            }
        }
    }
    to("../backend.php?do=exp");
?>
