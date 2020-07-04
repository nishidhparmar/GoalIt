<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="apps.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/wel.css">
    <title>Goal_It</title>
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
            <!-- <div class="logout">
                <button class="logout_btn" >Logout</button>
            </div> -->
            <div class="fill">
            <?php
                session_start();
                echo "<h1>Welcome"." ".$_SESSION['name']."</h1>";
            ?>
                <p>Enter your goal</p>
                <div class="field">
                    <input type="text" name="" id="name">
                    <div class="add" id="add"></div>
                </div>
                <form action="./include/welcome_data.php" method="post">
                <div id="goal"></div>
                <div style="margin-top: 20px;" ><p>Select days for your goals (between 1 to 60)</p></div>
                <div class="days">
                    <input type="number" class="days" name="days" id="days" min="1" max="60">
                </div>
                <div class="buttons">
                    <button type="submit" id="submit" style="display:none;" class="submit_btn">submit</button>
                    </form>

                    
                </div>
                <button id="delete" style="display:none;" class="clear_btn" >Clear your goals</button>
            </div>
        </div>
    </div>
    <!-- Enter your Goals:<input type="text" name="" id="name" >

    <button id="add">Add</button>
    
    <form action="./include/welcome_data.php" method="post">
     
        <div id="goal"></div>
     
        <p> Select days for your goal (Between 1 to 60) : <input type="number"  name="days" id="days" min="1" max="60"> </p>

        <button type="submit" id="submit" style="display:none;">Submit</button>
    
    </form>
    <button  id="delete" style="display:none;">Clear your goals</button><br> -->
</body>
</html>