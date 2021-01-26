<?php require_once('includes/header.php')?>
<?php require_once('includes/nav.php')?>
<form action="/action_page.php">
  <div class="container">
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <div class="login-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Username" name="username">
          <input type="text" placeholder="Password" name="psw">
        <a href="login.php"><button type="submit">Login</button></a>
        </form>
      </div>
    </div>
    <h2>Recover Your Password</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="cu.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>User Email</b></label>
    <input type="text" placeholder="Enter User Email" name="email" required>
  <a href="code.php">  <button type="submit">Send Code</button></a>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>

  </div>
</form>

<?php require_once('includes/footer.php')?>
