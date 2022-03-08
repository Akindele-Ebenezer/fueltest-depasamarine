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
 
        form {
            transform: translate(0);
        }

        form .delete {
            background: #ff3e3e;
            border: none;
            color: #fff;
            padding: .5rem;
        }

        .login-wrapper button {
            padding-block: .3rem;
        }

        .records-nav a:nth-child(4) {
            background: var(--color-1);
            color: #fff;
        } 
 
    </style> 

            <div class="box box-2">
                    <div class="auth">
                        <h1>ADMIN - Remove User</h1>    

                        <?php
                            $sql_users = "SELECT * FROM fuel_test_users;";
                            $query_users = mysqli_query($conn_admin, $sql_users);
                            $result_users = mysqli_fetch_all($query_users, MYSQLI_ASSOC);
                             
                        ?>
 
                        <table class='users'>
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
                                        <button class='delete' name="remove_user" type="submit" class="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>

                                <?php endforeach; ?>

                        </table>        
                         
                    </div>
                </div>  
    
<?php
    include 'footer.php'
?>
