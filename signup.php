<?php
  include_once 'header.php';
?>
  <body>
    <script src="assets/js/register.js"></script>
    <div class"main-wrapper">
      <h5>Skapa konto</h5>
        <form name="regbox"class="signup-form" id="registration_form" action="include/signup.inc.php" method="POST">
          <input type="text" name="first" id="form_fname" placeholder="Skriv ditt förnamn här...">
          <input type="text" name="last" id="form_lname" placeholder="Skriv ditt efternamn här...">
          <input type="text" name="email" id="form_email" placeholder="Skriv din e-post här...">
          <input type="text" name="username" id="form_uname" placeholder="Skriv in ett annvändarnamn här...">
          <input type="password" name="regpassword" id="form_password" placeholder="Skriv in ett lösenord här...">
          <button type="submit" name="submit" id="regsubmit">Registrera</button>
        </form>
        <p class="form-message"></p>
    </div>
  </body>


<?php
  include_once 'footer.php'
?>
