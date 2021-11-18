<?php
date_default_timezone_set("Asia/tehran");
include "lib/lib-helper.php";
include "conf/constans.php";
include "conf/config.php";
include "proccess/add-task.php";
include "vendor/autoload.php";


$connect = mysqli_connect($DB_conf["host"],$DB_conf["user"],$DB_conf['password'],$DB_conf['DB_Name']);
if($connect)
{
    $s = "hi";

}else
{
    diepage("failed to connect database. check config and try again...");


}

include "lib/lib-tasks.php";
include "lib/lib-auth.php";


?>