<?php
include_once "conn.php";
session_start();
$name=$_SESSION['name'];
$date=$_SESSION['date'];
$day=strval($date+1);

$sql="SELECT goaldays FROM usertask WHERE name='$name'";
$run=mysqli_query($conn,$sql);
$goal=mysqli_fetch_assoc($run);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/log.css">
    <title>Log</title>
</head>
<body>
<div class="main">
        <div class="orange ">
            <div class="logo">
                <div class="logo_img"></div>
                <div class="logo_txt">GOALIT</div>
                <form action="goal.php" method="post">
<button type="submit" class="back_btn">Back</button>
</form>

            </div>
        </div>
        <?php
        echo "<h1>$name Your Incompleted Goals</h1>";
        ?>
        <div class="days">
            <div class="days_num">
            <?php

if($day<$goal["goaldays"])
{
    for($i=1;$i<=$day;$i++)
    {   
        $sql="SELECT day$i from usertask WHERE name='$name'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        echo "<p>Day".$i." = ". $row["day$i"]."</p>";
    }
}
else
{
    for($i=1;$i<$goal["goaldays"];$i++)
    {   
    
        $sql="SELECT day$i from usertask WHERE name='$name'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        echo "<p>Day".$i." = ". $row["day$i"]."</P>";
    }
}
?>
            </div>
        </div>
    </div>


</body>
</html>