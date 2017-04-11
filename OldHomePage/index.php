<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Lord Luis
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../stylesheet.css"/>
    </head>    
    
    <body>
        <h1>Luis Montes</h1>
        <h1>لويس منتس</h1>

        <img src= "../images/picOfMe.jpg" style="width:400px;height:300px;">

        <h1>Stay tuned for incoming tech how-tos, javascript games, boardgame reviews, and much more!</h1>
        <ul>
          <li><a href="../../~lm877/index.php">Home Page</a></li>
          <li><a href="../About/index.php">About Me</a></li>
          <li><a href="../Contact/index.php">Contact</a></li>
          <li><a href="../LearningSites/index.php">Great Sites For Learning Arabic</a></li>
          <li><a href="../Resume/index.php" target="_blank">Résumé</a></li>
        <?php 
        if (!isset($_SESSION['uid'])) {
          echo "<li><a href='../phpInteractivity/users.php'>Login</a></li>";
        } else {
          echo "<li><a href='../phpInteractivity/users.php'>Logout</a></li>";
        echo "<li><a href='../phpInteractivity/messanger.php'>Messanger</a></li>";
        echo "<li><a href='../phpInteractivity/inbox.php'>Inbox</a></li>";
        }
        ?>
        </ul>

    </body>
    
    
</html>
