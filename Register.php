<?php require_once('includes/header.php')?>
<?php require_once('includes/nav.php')?>

<form action="/action_page.php">
  <div class="container">
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="login.php">LoginPage</a>
      <a href="#contact">Contact</a>
      <div class="login-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Username" name="username">
          <input type="text" placeholder="Password" name="psw">
        <a href="login.php"><button type="submit">LoginPage</button></a>
        </form>
      </div>
    </div>

    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="FirstName"><b>Email</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" required>

    <label for="LastName"><b>Email</b></label>
    <input type="text" placeholder="Enter LastName" name="LastName" id="LastName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <a href="Register.php"><button type="submit" class="registerbtn">Register</button></a>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

<?php require_once('includes/footer.php')?>
