<?php

    session_start();
if(isset($_SESSION['User']))
{
?>
    
 <!DOCTYPE html>       
<html>
            
 <head>
    <title>VINI CREATIONS</title>
    <link rel ="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <header>
        <div class="main">
            <div class="logo">
                <img src="logo3.png">
            </div>
            <ul>
            <li class="active"> <a href="#">Home</a></li>
                 <li> <a href="#">Services</a></li>
                 <li> <a href="#">Gallery</a></li>
                 <li> <a href="#">Contact</a></li>
                 <li> <a href="#">About</a></li>
                <li><a href="logout.php?logout">Logout</a></li>
            </ul>
            
            </div>
            <div class="title">
                <h1>FEEL LIKE HEAVEN</h1>
            </div>
            <div class="button">
            <a href="#" class="btn">WATCH VIDEO</a>
            <a href="#" class="btn">LEARN MORE</a>    
            </div>
        
        </header>
        
    </body>

</html>
<?php     
}
else
     {
         header("Location: index.php");
	      exit();
     }
?>