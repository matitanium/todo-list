<?php


function getTasks()
{
    global $connect;
    $query = "SELECT * FROM `task-list`";
    $get = mysqli_query($connect,$query);
    $records = mysqli_fetch_all($get);
    return $records;
}

function addtask($taskName,$creator)
{
   
    global $connect;
    $constans = BASE_URL;
    mysqli_query($connect,"insert into `task-list` (taskName,taskCrator) values('$taskName','$creator')");
    header("location:$constans");

    
}
function deltast($id)
{
    global $connect;
    $constans = BASE_URL;
    mysqli_query($connect,"DELETE FROM `task-list` WHERE id='$id'");
    header("location:$constans");

}
?>