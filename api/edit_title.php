<?php
include_once "../base.php";
foreach($_POST['id']  as $key => $id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
//del
    $Title->del($id);
    }else{
//update
    $data['id']=$id; 
    $data['text']=$_POST['text'][$key]; 
    $data['sh']=($_POST['sh'] == $id)?1:0;
    $Title ->save($data);
    }

}
to("../back.php?do=".$Title->$table);

?>