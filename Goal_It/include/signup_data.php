<?php
include_once 'conn.php';
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    if(empty($name) || empty($pass) || empty($repass) )
    {
        header("Location:../index.php?error=empty&username=".$name);
        exit();
    }
    else
    {
        if($pass != $repass)
        {
            header("Location:../index.php?error=password&username=".$name);
            exit();
        }
        else
        {
            $sql = "SELECT * FROM userinfo WHERE name='$name'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result); 
                if($row['name'] == $name)
                {
                    header("Location:../index.php?error=usertaken&username=".$name);
                    exit();
                }
            }
            else 
            {
                $sql = "INSERT INTO userinfo (name, password)
                        VALUES ('$name', '$pass')";
                mysqli_query($conn, $sql);
            
                $sql = "INSERT INTO usertask (name)
                        VALUES ('$name')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
            
                echo "<h1> Please Login ".$name."</h1>";
                header("Location:../login.php?error=success");
            }
        }
        
    }
}
?>
