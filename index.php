<?php
  include_once 'header.php';
?>
<section class="main-container">
  <div class"style.css">

    <h2>Vällkommen till Världsträdet</h2>
    <?php
    if (isset($_SESSION['u_id'])) {
      include("include/body.php");
    }
    else {

    }
    ?>
  </div>
</section>

<?php
  include_once 'footer.php'
?>
