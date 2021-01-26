<?php require_once('includes/header.php')?>
<?php require_once('includes/nav.php')?>

    <h2>Enter The Code</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="cu.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Generated User Code</b></label>
    <input type="text" placeholder="######" name="recover-code" required>
    <button type="submit">Send Code Reset</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>

  </div>
</form>

<?php require_once('includes/footer.php')?>
