<?php

if (isset($_post["submit"])) {
    
 $name = $_post["name"];
 $email = $_post["email"];
 $username = $_post["uid"];
 $pwd = $_post["pwd"];
 $repwd = $_post["repwd"];

require_once 'dbh.inc.php'; 
require_once 'function.inc.php';

if (emptyinputSignup($name, $email, $username, $pwd, $repwd) !== false) {
   header("location: ../signup.php?error=emptyinput");
   exit();
}

if (invalidUid($username) !== false) {
    header("location: ../signup.php?error=invaliduid");
    exit();
 }

if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
 }

if (pwdmatch($pwd, $repwd) !== false) {
    header("location: ../signup.php?error=passwdDontmatch");
    exit();
 }

 if (uidexist($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
 } 

 createUser($conn, $name, $email, $username, $pwd);
 
}
else {
    header(
        "location: ../signup.php" 
    );
    exit();
}