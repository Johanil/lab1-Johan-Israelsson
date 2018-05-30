<?php
  include_once 'header.php';
?>
  <body>

    <div class"main-wrapper">
      <h5>Skapa konto</h5>
        <form name="regbox"class="signup-form" action="include/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="Skriv ditt förnamn här...">
          <input type="text" name="last" placeholder="Skriv ditt efternamn här...">
          <input type="text" name="email" placeholder="Skriv din e-post här...">
          <input type="text" name="username" placeholder="Skriv in ett annvändarnamn här...">
          <input type="password" name="regpassword"  placeholder="Skriv in ett lösenord här...">
          <button type="submit" id="regsubmit" name="regsubmit">Registrera</button>
        </form>
        <p class="form-message"></p>
    </div>
    <script src="assets/js/register.js"></script>
  </body>


<?php
  include_once 'footer.php'
?>
