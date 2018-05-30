<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Världsträdet</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<header>
  <nav>
    <div class="main-wrapper">
      <ul>
          <li><a href="index.php">Världsträdet</a></li>
      </ul>
      <div class="nav-login">
        <?php
        if (isset($_SESSION['u_id'])) {
          echo '<form action="include/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Logga ut</button>
                  </form>';
        } else {

          echo '<form name="loginbox" onsubmit="return loginvalidateForm();" action="include/login.inc.php" method="POST">
            <input type="text" name="email" placeholder="E-post">
            <input type="password" name="password" placeholder="Lösenord">
            <button type="submit" id="loginsubmit" name="loginsubmit">Logga in</button>
          </form>
          <a href="signup.php">Skapa konto</a>';
          echo '<script src="assets/js/login.js"></script>';
        }
         ?>
      </div>
    </div>
  </nav>
</header>
