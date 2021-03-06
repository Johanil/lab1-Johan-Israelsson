<?php

if (isset($_POST['regsubmit'])) {

  include_once 'dbh.inc.php';
  include 'functions.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['regpassword']);
  //Salt till lösenord
  $salt = saltgen ();
  //error hantering
  //Kolla efter tomma fält
  if (empty($first) || empty($last) || empty($email) || empty($username) || empty($pwd)){
    header("Location: ../signup.php?signup=empty");
    exit();
  } else {
    //Kollar om input är korrekta
    if (!preg_match("/^[a-öA-Ö]*$/", $first) || !preg_match("/^[a-öA-Ö]*$/", $last)) {
      header("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      //Kollar om email är korrekt
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
      } else {
        $sql = "SELECT * FROM user WHERE user_uname='$username' OR user_email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        //Kollar om det finns en användare som redan har användarnamnet
        if ($resultCheck > 0) {
          echo "<script>";
          echo "alert('Användarnamn eller e-post är upptagen!');";
          echo "location.replace('../signup.php?signup=username_or_email_taken')";
          echo "</script>";
          exit();
        } else {
          //Saltning av lösenordet
          $saltedpwd = $pwd. $salt;
          //Hashing av lösenord
          $hashedPwd = hash('sha256',$saltedpwd);
          //Insert the user into the database
          //
          $sqlinsert = "INSERT INTO user (user_email, user_first, user_last, user_uname, user_pwd, user_salt) VALUES ('$email', '$first', '$last', '$username', '$hashedPwd', '$salt');";
          mysqli_query($conn, $sqlinsert);
          header("Location: ../index.php?signup=sucess");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../signup.php");
  exit();
}
