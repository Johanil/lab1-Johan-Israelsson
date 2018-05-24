<?php

session_start();

if (isset($_POST['submit'])) {
  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $salt = '5%]3#£iu/hd¤6edfv&856rt=?531';
//Errorhandlers
//Kolla om input är tom
if (empty($uid) || empty($pwd)) {
  header("Location: ../index.php?login=empty");
} else {
  $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email='$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header("Location: ../index.php?login=error");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      //De-hashing lösenordet
      $hashedPwdCheck = md5_verify($salt.$pwd, $row['user_pwd']);
      if ($hashedPwdCheck == false) {
        header("Location: ../index.php?login=error");
        exit();
      } elseif ($hashedPwdCheck == true) {
        //Loggar in användaren.
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_irst'] = $row['user_first'];
        $_SESSION['u_last'] = $row['user_last'];
        $_SESSION['u_email'] = $row['user_email'];
        $_SESSION['u_uid'] = $row['user_password'];
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
