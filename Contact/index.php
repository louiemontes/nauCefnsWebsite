<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Contact
  </title>
  <link type="text/css" rel="stylesheet" href="../stylesheet.css"/>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>


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
var nameOkay = false;
var emailOkay = false;
var subjectOkay = false;
var bodyOkay = false;


function checkName() {
  var nameInput = document.getElementById("name").value;

  // top answer from stackoverflow for an quick way to check an input for only numbers 
  // borrowed from http://stackoverflow.com/questions/5778020/check-whether-an-input-string-contains-number
  function isNumeric(n) { 
    return !isNaN(parseFloat(n)) && isFinite(n);
  }
  if (isNumeric(nameInput)) {
    document.getElementById("nameErr").innerHTML = "ERROR: Only numbers entered.";
  } else if(nameInput.length === 0) {
    document.getElementById("nameErr").innerHTML = "ERROR: No name entered.";
  } else {
    nameOkay = true;
    document.getElementById("nameErr").innerHTML = "";
  }
  return 
}

function checkEmail() {
  var emailInput = document.getElementById("email").value;
  if (emailInput.includes("@") && emailInput.includes(".")) {
    emailOkay = true;
    document.getElementById("emailErr").innerHTML = "";
  } else if(emailInput.length === 0) {
    document.getElementById("emailErr").innerHTML = "ERROR: No email entered.";
  } else {
    document.getElementById("emailErr").innerHTML = "ERROR: Invalid email.";
  }
  return emailOkay;
}

function checkSubject() {
  var subjectInput = document.getElementById("subject").value;
  if (subjectInput.includes("<") || subjectInput.includes(">")) {
    document.getElementById("subject").innerHTML = "ERROR: Bad character entered.";
  } else if (subjectInput.length > 50){
    document.getElementById("subject").innerHTML = "ERROR: Subject too long.";
  } else if(subjectInput.length === 0) {
    document.getElementById("subjectErr").innerHTML = "ERROR: No subject entered.";
  } else {
    subjectOkay = true;
    document.getElementById("subjectErr").innerHTML = "";
  }
}

function checkBody() {
  var bodyInput = document.getElementById("body").value;
  if (bodyInput.length === 0) {
    document.getElementById("bodyErr").innerHTML = "ERROR: No body entered.";
  } else {
    bodyOkay = true;
    document.getElementById("bodyErr").innerHTML = "";
  }
  return bodyOkay;
}

function finalValidator() {
  // I did not know how else to trigger a radio button checker
  if (!document.getElementById("messageTypeQuestion").checked && 
    !document.getElementById("messageTypeComment").checked && 
    !document.getElementById("messageTypeUrgent").checked) {
      document.getElementById("typeErr").innerHTML = "ERROR: Nothing checked.";
  } else {
    typeOkay = true;
    document.getElementById("typeErr").innerHTML = "";

  }
  
  // see if I can use my php function
  if (nameOkay && emailOkay && subjectOkay && bodyOkay && typeOkay === true) {
    document.getElementById("finalizer").innerHTML ="<button type='submit'>Send!</button>";
    // document.getElementById("finalizer").innerHTML ="fdsf";

  } else {
    document.getElementById("errorsReminder").innerHTML = "Fix the above errors first.";
  }
}
</script>

 <form action="send.php" method="POST">
        <h1>Say something to me!</h1>

        Name: <input type="text" name="name" size = "25" id ="name" onblur="checkName()"> <span id="nameErr" class="err" value=""></span>
        <br>
        Your email: <input type="text" name="email" size = "25" id="email" onblur="checkEmail()"> <span id="emailErr" class="err" value=""></span>
        <br>
        Subject: <input type="text" name="subject" size = "25" id="subject" onblur="checkSubject()"> <span id="subjectErr" class="err" value=""></span>
        <br>
        <br>
        <br>
        <span id="bodyErr" class="err" value=""></span>
        <br>
        Body:  <textarea name="body" rows="4" cols="50" id="body" onblur="checkBody()"></textarea>
        <br>
        <br>
        <br>
        <span style="margin-left: 10%;">Message Type:</span>
        <p><input type="radio" id="messageTypeQuestion" name="messageType" value="Question" onblur="finalValidator()"> Question<p>
        <p><input type="radio"  id="messageTypeComment" name="messageType" value="Comment" onblur="finalValidator()"> Comment</p>
        <p><input type="radio" id="messageTypeUrgent" name="messageType" value="Urgent" onblur="finalValidator()"> Urgent</p>
        <span id="typeErr" class="err"></span>
        <br>
        <br>
        <p><input type="checkbox" name="wantsAResponse" value="Yes"> Do you want a response?</p>
        <br>
        <span id="errorsReminder" class="err" value=""></span>
        <br>
        <div id ="finalizer"></div>
      </form>

    <div id ="footer">
      <div id = "contactBar">
        <ul>
          <li><a href="https://plus.google.com/u/0/101781539549443431358/posts">Google+</a></li>
          <li><a href="https://www.youtube.com/channel/UCO07PCFm8hcgPFOYH6j5Msg">YouTube</a></li>
          <li><a href="https://twitter.com/louiemontes">Twitter (@louiemontes)</a></li>
          <li><a href="https://github.com/louiemontes">Github (@louiemontes)</a></li>
          <li><a>Skype: evilgorky</a></li>
          <li><a href="http://cefns.nau.edu/~lm877/Contact/index.html">Email: lm877@nau.edu</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>