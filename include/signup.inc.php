<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  //Salt till lösenord
  $salt = '5%]3#£iu/hd¤6edfv&856rt=?531';
  //error hantering
  //Kolla efter tomma fält
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
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
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../signup.php?signup=usertaken");
          exit();
        } else {
          //Hashing av lösenord
          $hashedPwd = md5($salt.$hashing);
          //Insert the user into the database
          //
          $sqlinsert = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
          mysqli_query($conn, $sqlinsert);
          header("Location: ../signup.php?signup=sucess");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../signup.php");
  exit();
}