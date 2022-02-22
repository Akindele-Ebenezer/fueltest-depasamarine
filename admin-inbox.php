
<?php

session_start();
if(!$_SESSION["username"]) { 
  header('Location: admin-login.php'); 
}

  $title = "Admin Inbox";  
  include "config.php";

  $sql = "SELECT * FROM admin_inbox;";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC); 


          
  if(isset($_POST["export_excel"])) {
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=Depasa.xls"); 
  }
?>
 
<!-- <link rel="stylesheet" href="styles/styles.css"> -->

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post"> 

  <div class="admin-inbox">
      <table>
          <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Time</th>
          </tr>
          <?php foreach($result as $data): ?>
          <tr>
              <td><?= $data["id"]; ?></td>
              <td><?= $data["first_name"]; ?></td>
              <td><?= $data["last_name"]; ?></td>
              <td><?= $data["email"]; ?></td>
              <td><?= $data["message"]; ?></td>
              <td><?= $data["time"]; ?></td>
          </tr>
          <?php endforeach; ?>
      </table>
  </div>
<input type="submit" name="export_excel" value="Export">
</form>

<?php 
?>