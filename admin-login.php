
<?php
  error_reporting(0);
  include "config.php";
  $title = "Admin";
  include "header.php";

  if(isset($_POST["submit"])) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]); 
    $password = mysqli_real_escape_string($conn, $_POST["password"]); 

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    print_r($result);

    if(empty($username)) {
      $username_error = "Enter Username";
    } elseif(empty($password)) {
      $password_error = "Enter Password";
    } else {
      $wrong_credentials = "Wrong Username/Password";
    }

    if(mysqli_num_rows($query) == 1) {
      session_start();
      $_SESSION['username'] = true;
      header('Location: admin-inbox.php');
    } 

  }

?>
<style> 
  .admin-login span {
    color: red;
  }
</style>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="admin-login">
    <div> 
        <span><?= $wrong_credentials; ?></span>
        <h1>Log In</h1>
        <input type="text" name="username" placeholder="Enter Username"><br>
        <span><?= $username_error; ?></span>
        <input type="password" name="password" placeholder="Password"><br>
        <span><?= $password_error; ?></span>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </div>
</form>

<?php
  include "footer.php";
?>