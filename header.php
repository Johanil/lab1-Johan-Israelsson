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
          echo '<script src="assets/js/login.js"></script>';
          echo '<form name="loginbox" action="include/login.inc.php" method="POST">
            <input type="text" name="username" placeholder="Användarnamn/e-post"
            >
            <input type="password" name="pwd" placeholder="Lösenord">
            <button type="submit" id="loginsubmit" name="submit">Logga in</button>
          </form>
          <a href="signup.php">Skapa konto</a>';
        }
         ?>
      </div>
    </div>
  </nav>
</header>
