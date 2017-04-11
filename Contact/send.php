<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$body = $_POST["body"];
$messageType = $_POST["messageType"];
$wantsAResponse = $_POST["wantsAResponse"];

// All checks and errors are taken out of this send.php for project 8 purposes
// $nameerr = "";
// $emailerr= "";
// $subjecterr = "";
// $bodyerr="";

// $nameCheck="";
// $emailCheck="";
// $subjectCheck="";
// $bodyCheck="";


$to = "lm877@nau.edu";



// //name checks
// if(empty($_POST["name"])) {
//   $nameerr = "Enter a valid name.";
// } else {
//   $nameCheck = "1";
// }

// // email checks
// if(empty($_POST["email"])) {
//   $emailerr = "Enter an email this message can be answered to.";
// } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//   $emailerr = "Entered email is not a valid email, try again.";
// } else {
//   $emailCheck="1";
// }

// //subject checks
// if(empty($_POST["subject"])) {
//   $subjecterr = "Enter a subject.";
// } else {
//   $subjectCheck="1";
// }

// //body checks
// if(empty($_POST["body"])) {
//   $bodyerr = "Enter a body.";
// } else {
//   $bodyCheck="1";
// }

//wants a response checks
if(empty($_POST["wantsAResponse"])) {
  $wantsAResponse = "No";
} else {
  $wantsAResponse = "Yes";
}


// if($nameCheck === "1" && $emailCheck==="1" && $subjectCheck==="1" && $bodyCheck==="1") {
  $date = date("d/m/Y");
  $time = date("h:i:sa");
  $body = "From: " . $email . "\n" . "Name: " . $name . "\n" . "Message Type: " . $messageType . "\n" . "\n" . $body . "\n" . "\n"
  . "---Apache Server is in Flagstaff, Arizona, USA---" . "\n"
  . "Server date: " . $date . "\n" . "Server time: " . $time . "\n"
  . "Wants a response: " . $wantsAResponse . "\n";
  mail($to, $subject, $body);
  echo "Message sent! <a href='index.php'>Click here to send another email!</a>";
// }
// else {
//   echo $nameerr;
//   echo "<br>";
//   echo $emailerr;
//   echo "<br>";
//   echo $subjecterr;
//   echo "<br>";
//   echo $bodyerr;
//   echo "<br>";
//   echo "Message not sent. <a href='index.html'>Click here to try again!</a>";
// }
?>