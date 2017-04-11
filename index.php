<?php
  session_start(); //every page needs this
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Home
  </title>
  <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<script>
function translateToEnglish(){
  // just reloading the page currently
  history.go(0);
}
function translateToSpanish() {
  document.getElementById("mainContent").innerHTML = "<h1>Will translate to Spanish soon!</h1>";
}
function translateToArabic(){
  document.getElementById("mainContent").innerHTML = "<h1>Will translate to Arabic later!</h1>";
}
</script>

<body>
  <div id = "pageContainer">
    <div id = "header">
      <div id = "navigationBar">
        <ul>
          <li><a href="/~lm877/OldHomePage/index.php">Old Home Page</a></li>
          <li><a href="/~lm877/About/index.php">About Me</a></li>
          <li><a href="/~lm877/Contact/index.php">Contact</a></li>
          <li><a href="/~lm877/LearningSites/index.php">Great Sites For Learning Arabic</a></li>
          <li><a href="/~lm877/Resume/index.php" target="_blank">Résumé</a></li>
        <?php 
        if (!isset($_SESSION['uid'])) {
          echo "<li><a href='/~lm877/phpInteractivity/users.php'>Login</a></li>";
        } else {
          echo "<li><a href='/~lm877phpInteractivity/users.php'>Logout</a></li>";
        echo "<li><a href='/~lm877/phpInteractivity/messanger.php'>Messanger</a></li>";
        echo "<li><a href='/~lm877/phpInteractivity/inbox.php'>Inbox</a></li>";
        }
        ?>
        </ul>
      </div>
    </div>

    <div id = "leftSideBar">
      <ul>
        <li>
          <button onclick="translateToEnglish()">
            <img src= "images/americanFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToSpanish()">
            <img src= "images/spanishFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToArabic()">
            <img src= "images/arabicFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
      </ul>

      <div id = "notificationBar">
        <ul>
          Notifications
          <li>Visual enhancments</li>
          <li>Language support coming</li>
        </ul>
      </div>

    </div>

    <div id = "mainContent">
      <h1>Luis Montes</h1>
      <h1>لويس منتس</h1>

      <img src= "images/picOfMe.jpg" style="width:400px;height:300px;">

      <h1>Stay tuned for incoming tech how-tos, javascript games, boardgame reviews, and much more!</h1>
      <ul>
          <li><a href = "https://www.cefns.nau.edu/~pek7/" target="_blank">Here is a link to another great CEFNS website!</a></li>
      </ul>
    </div>

    <div id ="footer">
      <div id = "contactBar">
        <ul>
          <li><a href="https://plus.google.com/u/0/101781539549443431358/posts">Google+</a></li>
          <li><a href="https://www.youtube.com/channel/UCO07PCFm8hcgPFOYH6j5Msg">YouTube</a></li>
          <li><a href="https://twitter.com/louiemontes">Twitter (@louiemontes)</a></li>
          <li><a href="https://github.com/louiemontes">Github (@louiemontes)</a></li>
          <li><a>Skype: evilgorky</a></li>
          <li><a>Email: lm877@nau.edu</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
