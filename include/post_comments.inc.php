<?php
if (isset($_POST['submit_comment'])) {
date_default_timezone_set('Europe/Berlin');
  include_once 'dbh.inc.php';
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  $userfirst = mysqli_real_escape_string($conn, $_SESSION['user_first']);
  $userlast = mysqli_real_escape_string($conn, $_SESSION['user_last']);
  //$user_id = $_POST['user_id'];
  //$user_username = $_POST['realName'];
  //$comment_time = $_POST['date'];


if (empty($comment)){
  header("Location: ../index.php?comment=empty");
  exit();
} else {
  $sql = "INSERT INTO comment_table (comment_com, user_first, user_last) VALUES ('$comment', '$userfirst', '$userlast');";
  $result = mysqli_query($conn, $sql);
  header("Location: ../index.php?comment=sucess");
}
}
