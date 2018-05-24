<?php
  include_once 'header.php';
?>
<section class="main-container">
  <div class"main-wrapper">

    <h2>Vällkommen till Världsträdet</h2>
    <?php
    if (isset($_SESSION['u_id'])) {
      echo '<link href="assets/css/comments.css" rel="stylesheet">
      <div class="box">
      <img src="assets/img/white-tree-hi.png" class="logo">
      <h2 id="htitle">Skriv din kommentar här</h2>
      <form name="loginbox">
        <p>Kommentar:</p>
        <textarea type="text" name="comment" rows="6" placeholder="Skriv din text här.."></textarea>
        <input class="button" type="button" name="button" value="Skicka">
      </form>
    </div>';
    }
    else {

    }
    ?>
  </div>
</section>

<?php
  include_once 'footer.php'
?>
