<?php
include_once 'conn.php';
if(isset($_POST["login"]))
{
    
    $name=$_POST["name"];
    $pass=$_POST["pass"];


    if(empty($name) || empty($pass))
    {
        header("Location:../login.php?error=empty&username=".$name);
        exit();
    }
    else
    {
        $sql = "SELECT * FROM userinfo WHERE name='$name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result); 
           
                if($row['password'] == $pass)
                {
                    
                    session_start();
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['pass'] = $row['password'];

                    $sql="SELECT login FROM usertask WHERE name='$name'"; 
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                    
                    if($row["login"]=="0")
                    {
                        header("Location:../welcome.php");
                        exit();
                    }
                    else
                    {
                        $sql="SELECT date FROM usertask WHERE name='$name'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        
                        $logindate=date_create($row["date"]);
                        $todaydate=date_create(date("Y/m/d"));
                        $diff=date_diff($logindate,$todaydate);
                        session_start();
                        $_SESSION['date'] = $diff->format("%a");
                        
                        header("Location:../goal.php");
                        exit();
                    }
               }
                else
                {
                    header("Location:../login.php?error=invalidpass&username=".$name);
                    exit();
                }                     
        }
        else
        {
            header("Location:../login.php?error=nouser&username=".$name);
            exit();
        }
    
    }
}

?>