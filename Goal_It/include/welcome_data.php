<?php
include_once "conn.php";
session_start();

$days=$_POST["days"];
$name=$_SESSION['name'];

$count=0;
for($i=1;$i<50;$i++)
{
    if(isset($_POST["task$i"]))
    {
        $count++;       
        ${"task$i"}=$_POST["task$i"];
    }
}

for($i=1;$i<=$count;$i++)
{
    $t[$i]=${"task$i"};
}

$final=implode(',',$t);

for($i=1;$i<=$days;$i++)
{
    
       $sql= "UPDATE usertask SET day$i='$final' WHERE name='$name'";
       mysqli_query($conn,$sql);
    
}

// login set 1
$sql="UPDATE usertask SET login='1' WHERE name='$name'"; 
mysqli_query($conn,$sql);

// set goaldays
$sql="UPDATE usertask SET goaldays=$days+1 WHERE name='$name'"; 
mysqli_query($conn,$sql);

// setdate
$sql="UPDATE usertask
SET date = curdate()
WHERE name = '$name'";
mysqli_query($conn,$sql);

header("Location:../goal.php");
exit();
