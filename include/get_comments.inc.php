<?php
include 'dbh.inc.php';
$all_comments = "SELECT * FROM comment ORDER BY `comment_id` DESC";
$result_comments = mysqli_query($conn, $all_comments);
$check_comments = mysqli_num_rows($result_comments);
if ($check_comments > 0) {
  while ($row=mysqli_fetch_assoc($result_comments)){
    echo "<link href='assets/css/style.css' rel='stylesheet'>";
    echo "<div class='get--comments'>";
    echo "<p>";
    echo "Av: ";
    echo $row['user_first']." ".$row['user_last']."<br><br>";
    echo "</p>";
    echo "<p>";
    echo $row['comment_com']."<br>";
    echo "</p>";
    echo "<br>";
    echo "</div>";
  }
} else {
  echo "<link href='assets/css/style.css' rel='stylesheet'>";
  echo "<div class='box--comments'>";
  echo "Det finns inga kommentarer att visa!"."<br>";
  echo "<br>";
  echo "</div>";
}
