<?php
include_once "conn.php";
session_start();
$name=$_SESSION['name'];
$date=$_SESSION['date'];
$day="day".strval($date+1);
$today=$date+1;
$sql="SELECT $day FROM usertask WHERE name='$name'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goals</title>
    <link rel="stylesheet" href="./css/gol.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="goal.js" defer></script>
</head>
<body>
<div class="main">
        <div class="orange_triangle">
            <div class="logo">
                <div class="logo_img"></div>
                <div class="logo_txt">GOALIT</div>
            </div>
            <div class="todo_svg"></div>
        </div>
        <div class="white">
            <div class="logout">
                <form action="./include/logout_data.php" method="post">
                    <button type="submit" class="logout_btn">Logout</button>
                </form>
            </div>
            <div class="fill">
            <?php
            $sql="SELECT goaldays FROM usertask WHERE name='$name'";
$run=mysqli_query($conn,$sql);
$goal=mysqli_fetch_assoc($run);
// echo $today;
// echo $goal['goaldays'];
if(($today)<$goal['goaldays'])
{
  echo "<center><h1>".$day."</h1></center>";
  if($row["$day"]==NULL)
  {
    $sql= "UPDATE usertask SET $day='Completed' WHERE name='$name'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
  }
  elseif($row["$day"]=="Completed")
  {    
    echo "<h3>Congratulations you have completed your ".$day." goals</h3>"; 
  }
  else
  {
    $a=explode(",",$row["$day"]);
    echo "<form action='./include/goal_data.php' method='post'>";

    for($i=0;$i<count($a);$i++)
    { 
      echo "<div class='inputs'>";
      echo "<input class='input_check' type='checkbox' name='".$i."' class='check' value='0' >";
      echo "<input class='input_text' type='text' value='".$a[$i]."' readonly>"."<br><br>"; 
      echo "</div>";
    }
    echo "<div class='buttons'>";
    echo "<button class='submit_btn' name='submit'>submit</button>";
    echo "</form>";  
  } 
}
else
{
  echo "<h3>Congratulations you have completed your all days</h3>";
}

?>               
                    <form action="log.php" method="post">
                        <button type="submit" name="show" class="log_btn" >Log</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
