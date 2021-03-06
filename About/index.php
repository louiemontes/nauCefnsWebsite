<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            About Me
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../stylesheet.css"/>
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
      </div>
    </div>

    <div id = "leftSideBar">
      <ul>
        <li>
          <button onclick="translateToEnglish()">
            <img src= "../images/americanFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToSpanish()">
            <img src= "../images/spanishFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToArabic()">
            <img src= "../images/arabicFlag.jpeg" style="width:40px;height:30px;">
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
        <h1>About Me</h1>


        <img src= "../images/working.jpg" style="width:400px;height:300px;">
        <p>Hello everyone! My name is Luis Montes as this website suggest. </p>

        <p> I work for a company called Iced Development based out of Mesa, Ariona and I am currently a Computer Science student at Northern Arizona University. </p>

        <p>My work involves myself writing <a href="https://www.npmjs.com/">Node.js libraries</a> compatible with the <a href="https://github.com/rwaldron/johnny-five">Johnny-Five</a> library so as to use JavaScript functions through the Firmata protocol to easily control I2C devices (<a href="https://learn.adafruit.com/adafruit-led-backpack/overview">like Adafruit's LED lineup</a>).</p>

        <br></br>
        <p>Here is work that I am especially proud of:</p>

        <ol>
            <li><p><a href = "https://github.com/monteslu/pagenodes/graphs/contributors">Contributing</a> a few "nodes" and bug fixes to Iced Dev's <a href="https://www.pagenodes.com">PageNodes</a> IoT platform</p></li>

            <li><p>Writing and connecting the <a href = "http://faces.surge.sh/">webpage</a> for my local <a href= "http://www.heatsynclabs.org/">lab</a>'s old window <a href ="https://twitter.com/louiemontes/status/738162205804240896">display</a></p></li>
            
            <li><p>Making my latest node.js library: <a href = "https://github.com/louiemontes/node-led">node-led</a>, which can be also be readily pulled from <a href = "https://www.npmjs.com/package/node-led">"npm install node-led"</a>, thanks NPM!</p></li>
        </ol>

        <p>Here's me debuting that node-led library at <a href = "http://hackarizona.org/winners/">Hackaz</a>:</p>

        <img src= "../images/showing.jpg" style="width:500px;height:400px;">

        <br></br>
        <br></br> <!-- // somehow needed two -->

        <p>My tech areas of interests include Internet Of Things, making Javascript games with Node.js, and making progressive web applications.  My minor is in Arabic and I would love to someday work on educational technology to help learn such a wonderful languag.  This site is very much a work in construction, but thank you NAU for covering the web hosting fees!  Expect to see homemade Javascript games, educational tools, and even boardgame reviews. </p>

        <p>Outside of tech I thoroughly enjoy tennis, dancing, and watching <a href = "http://www.imdb.com/title/tt3398228/">Bojack Horseman</a>.</p>

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