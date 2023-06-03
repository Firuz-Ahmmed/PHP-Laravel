<?php
include('database.php');
$obj=new query();
$condition_arr=["id"=>"2","name"=>"bithi"];
$result=$obj->getData("user","*",$condition_arr,"id","asc",1);
echo "<pre>";
print_r($result);
?>