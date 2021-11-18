<?php

include "conf/init.php";
#first php project
$rec = getTasks();
if(isset($_POST['sub']))
{
    $name =$_POST['taskname'] ;
    $crat = $_POST['taskcreat'];
    addtask($name,$crat);
    
}
if(isset($_GET['id']))
{
    deltast($_GET['id']);
}
echo date("y/m/d").date("h:i:sa");
include  "assets/index.php";



?>