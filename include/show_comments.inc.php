<?php
include 'dbh.inc.php';
$all_comments = "SELECT * FROM comment_table";
$result_comments = mysqli_query($conn, $all_comments);
if (mysqli_num_rows($result_comments) > 0) {
  while ($row = mysqli_fetch_assoc($result_comments)){
    echo "<p>";
    echo "<br>";
    echo $row['message'];
    echo "</p>";
  }
} else {
  echo "There are no comments!";
}