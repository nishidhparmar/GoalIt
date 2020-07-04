<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="password.js"></script>
    <title>Signup</title>
</head>
<body>
<div class="main">
        <div class="orange ">
            <div class="logo">
                <div class="logo_img"></div>
                <div class="logo_txt">GOALIT</div>
            </div>
            <div class="main_svg"></div>
            <div class="quote"><div class="quote_txt">"It's not knowing what to do,It's doing what you know."<br>Tony Robbins</div></div>
        </div>   
        <div class="white">
            <div class="form">
                <p class="heading">Hello <br> Signup to <span style="color: #E76F51;" >Goal </span> it</p>
                <p class="subheading">Signup for free and track your work :)</p>
                <form action="./include/signup_data.php" method="post">
                <div class="input">
                    <div class="field"><div class="user icon u"></div><input type="text" name="name" id="username" placeholder="Username"><div class="icon"></div></div>
                    <div class="field"><div class="lock icon pi1"></div><input type="password" name="pass" id="password1" placeholder="Password"><div class="p1 icon eyeclose"></div></div>
                    <div class="field"><div class="lock icon pi2"></div><input type="password" name="repass" id="password2" placeholder="Verify Password"><div class="p2 icon eyeclose"></div></div>
                </div>
                <div class="button" >
                    <?php

                        if(isset($_GET["error"]))
                        {
                            if($_GET["error"]=="empty")
                            {
                                echo "<p class='error'>Somthing is missing<p>";
                            }
                            else if($_GET['error']=="password")
                            {
                                echo "<p class='error'>Password is not match<p>";
                            } 
                            else if($_GET['error']=="usertaken")
                            {
                            echo "<p class='error'>Username is taken<p>";
                            } 
             
                        }
                    ?>
                    <button type="submit" name="signup"> Sign Up</button>
                </div>
                </form>
                <div class="login"><a href="login.php">Already have an account? Login</a></div>
            </div>
        </div>
    </div>
    
</body>
</html>