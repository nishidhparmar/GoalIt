<?php
include_once "conn.php";

session_start();
$name=$_SESSION['name'];
$date=$_SESSION['date'];
$day="day".strval($date+1);

$sql="SELECT $day FROM usertask WHERE name='$name'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$a=explode(",",$row["$day"]);

if(isset($_POST["submit"]))
{
    $p=array(); 
    for($i=0;$i<count($a);$i++)
    {
        if(isset($_POST["$i"])=="0")
        {      
            array_push($p,$a[$i]);
        }  
    }
  
    $sr=implode(",",$p);
    
    $sql="UPDATE usertask
        SET $day = '$sr' 
        WHERE name = '$name'";
    mysqli_query($conn,$sql);
    
    header("Location:../goal.php");
    exit();
}
 