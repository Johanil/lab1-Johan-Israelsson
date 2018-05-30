<?php
  include_once 'header.php';
?>
<section class="main-container">
  <link href="assets/css/style.css" rel="stylesheet" >
  <div>


    <?php
    if (isset($_SESSION['u_id'])) {
      include("include/body.inc.php");
    }
    else {
      include("include/no_session_body.php");
    }
    ?>
  </div>
</section>

<?php
  include_once 'footer.php'
?>
