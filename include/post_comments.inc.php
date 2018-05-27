<?php

if (isset($_POST['submit_comment'])) {

  include_once 'dbh.inc.php';

$comment = mysqli_real_escape_string($conn, $_POST['comment']);

if (empty($comment)){
  header("Location: ../index.php?comment=empty");
  exit();
} else {
  $sqlCommentInsert = "INSERT INTO comment_table (comment_com, user_id, user_username, comment_time) VALUES ('$comment', TIMESTAMP);";
  mysqli_query($conn, $sqlCommentInsert);
  header("Location: ../index.php?comment=sucess");
  exit();
}
}
