<!--   RMIT University Vietnam
  Course: COSC2430 Web Programming
  Semester: 2023A
  Assessment: Assignment 2
  Author: Ho Dac Quang Minh
  ID: s3893444
  Acknowledgement:  student's sample
                    https://validator.w3.org/
                    https://jigsaw.w3.org/css-validator/ -->
<?php 
session_start();

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    unset($_SESSION["loggedin"]);
    unset($_SESSION["username"]);
    unset($_SESSION["role"]);
    header("Location: index.php");
    exit;
}
