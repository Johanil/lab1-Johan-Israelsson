<?php

session_start();

if (isset($_POST['loginsubmit'])) {
  include 'dbh.inc.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $salt = mysqli_real_escape_string($conn, $_POST['salt']);
//Errorhandlers
//Kolla om input är tom
if (empty($username) || empty($pwd)) {
  header("Location: ../index.php?login=empty");
} else {
  $sql = "SELECT * FROM user WHERE user_username = '$username' OR user_email='$username'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header("Location: ../index.php?login=error");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //De-hashing lösenordet
      $existingPwd = $row['user_pwd'];
      $saltQuery = "SELECT user_salt FROM user WHERE user_username = '$username' OR user_email='$username'";
      $saltResult = mysqli_query($conn, $saltQuery);
      $saltRow = mysqli_fetch_assoc($saltResult);
      $salt = $saltRow['user_salt'];
      $saltedPwd = $pwd .$salt;
      $hashedPwdCheck = hash('sha256', $saltedPwd);

      if ($hashedPwdCheck == !$existingPwd) {
        header("Location: ../index.php?login=error");
        exit();
      } elseif ($hashedPwdCheck == $existingPwd ) {
        //Loggar in användaren.
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_first'] = $row['user_first'];
        $_SESSION['u_last'] = $row['user_last'];
        $_SESSION['u_email'] = $row['user_email'];
        $_SESSION['u_username'] = $row['user_password'];
        header("Location: ../index.php?login=success");
        exit();
      }
    }
  }
}
} else {
  header("Location: ../index.php?login=error");
  exit();

}
