<?php
    $header_info = "<a href='admin.php'>Create Users for Fuel Test Lab</a>";
    $title = 'FUEL TEST | ADMIN - Remove User';
    include 'header.php';
    include 'admin-auth.php';

    $admin_id = $_SESSION['id'];
    
    $sql_admin = "SELECT * FROM admin_ WHERE id = '$admin_id';";
    $sql_query = mysqli_query($conn_admin, $sql_admin);
    $result_admin = mysqli_fetch_all($sql_query, MYSQLI_ASSOC);

    $remove_user_id = mysqli_real_escape_string($conn_admin, $_POST['remove_user_id']); 

    if(isset($_REQUEST['remove_user'])) {

        $sql = "DELETE FROM fuel_test_users WHERE id = {$_REQUEST['user_id']}";
        $query = mysqli_query($conn_admin, $sql);


    if (empty($remove_user_id)) {
        $error_name = ' * Enter User Id..';
    } else {
        echo "<div class='alert'>
                    <div>
                        User with the ID $remove_user_id : Removed..
                    </div>        
              </div>";
    }

}

?>
    
    
    <style>

        button {
            width: fit-content !important;
        }
 
        .login-wrapper button {
            padding-block: .3rem;
        }

        .records-nav a:nth-child(4) {
            background: var(--color-1);
            color: #fff;
        } 
 
    </style>

            <div class="login-wrapper admin"> 

                <div class="admin-dashboard">
                    <div id="admin-dashboard-inner">
                        
                    <h1>DEPASA Marine Int'l</h1>
                    
                    <div class="form-body-wrapper">
                        <div class="contact"> 
                            <div class="record-button"><a href="records.php">VIEW ALL RECORDS</a></div>
                        </div> 
                        <div class="contact"> 
                            <div class="record-button"><a href="admin.php">CREATE NEW USER</a></div>
                        </div> 
                        <div class="contact"> 
                            <div class="record-button"><a href="users.php">VIEW ALL USERS</a></div>
                        </div> 
                        <div class="contact"> 
                            <div class="record-button"><a href="remove-users.php">REMOVE USER</a></div>
                        </div>  
                        <div class="contact"> 
                            <div class="record-button"><a href="logout.php">LOG OUT</a></div>
                        </div> 
                        <div>
                            <p><?php echo $result_admin[0]['name']; ?></p>
                            <p><?php echo $result_admin[0]['email']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box box-2">
                    <div class="auth">
                        <h1>ADMIN - Remove User</h1>    

                        <?php
                            $sql_users = "SELECT * FROM fuel_test_users;";
                            $query_users = mysqli_query($conn_admin, $sql_users);
                            $result_users = mysqli_fetch_all($query_users, MYSQLI_ASSOC);
                             
                        ?>
 
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>

                                <?php foreach ($result_users as $users) : ?>

                            <tr>
                                <td><?= $users["id"]; ?></td>
                                <td><?= $users["name"]; ?></td>
                                <td><?= $users["email"]; ?></td>
                                <td>
                                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method='post'>
                                        <input type="hidden" name="user_id" value="<?= $users['id'] ?>">
                                        <button name="remove_user" type="submit" class="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>

                                <?php endforeach; ?>

                        </table>        
                         
                    </div>
                </div>
            </form>
        </div>
    
<?php
    include 'footer.php'
?>
