<!DOCTYPE html>
<link href="assets/css/style.css" rel="stylesheet">
<body>
  <h2>Vällkommen till forumet!</h2>
  <div>
    <div class="comment-box">
        <h4>Skriv din kommentar här</h3>
      <form name="comment_box" class="" action="include/post_comments.inc.php" method="POST">
        <p>Kommentar:</p>
        <textarea type="text" name="comment" rows="6" placeholder="Skriv din text här.."></textarea>
        <div class="center">
          <button type="submit" name="submit_comment" value="Skicka">Skicka</button>
        </div>
      </form>
    </div>
  </div class="">
    <?php include 'get_comments.inc.php';?>
</body>
