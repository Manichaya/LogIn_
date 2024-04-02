<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
        <div class="nav">
            <div class="logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
            </div>  
            <div class="navbar">
                <ul>
                    <li><a href="#">page1</a></li>
                    <li><a href="#">page2</a></li>
                    <li><a href="#">page3</a></li>
                    <li><a href="#">page4</a></li>
                    <li><a href="#">page5</a></li>
                </ul>
            </div>
            <div class="user">
                <?php
                    session_start();
                    echo "Welcome ".$_SESSION['check_log_1'];  
                ?>
                <button class="btn"> <a href=" logout.php">Log Out</a></button>
            </div>
           
        </div>
       

    
</body>
</html>

