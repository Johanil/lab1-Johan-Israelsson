<!DOCTYPE html>
<link href="assets/css/comment_register.css" rel="stylesheet">
<h2>Vällkommen till Världsträdet</h2>
<div>
  <div class="box-comment">
    <img src="assets/img/white-tree-hi.png" class="logo">
    <h2>Skriv din kommentar här</h2>
    <form name="comment_box" class="comment_box" action="include/post_comments.inc.php" method="POST">
      <p>Kommentar:</p>
      <textarea type="text" name="comment" rows="6" placeholder="Skriv din text här.."></textarea>
      <input class="button" type="submit" name="submit_comment" value="Skicka">
    </form>
  </div>
</div>
  <div id="comment_box">
  <?php
  include 'get_comments.inc.php';
  ?>
</div>
