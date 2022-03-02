<?php
    $header_info = "<a href='admin.php'>Create Users for Fuel Test Lab</a>";
    $title = 'FUEL TEST | Admin';
    include 'header.php';
    include 'admin-auth.php';

    $admin_id = $_SESSION['id'];
    echo $admin_id;
    $sql_admin = "SELECT * FROM admin_ WHERE id = '$admin_id';";
    $sql_query = mysqli_query($conn_admin, $sql_admin);
    $result_admin = mysqli_fetch_all($sql_query, MYSQLI_ASSOC);

    $create_user_name = mysqli_real_escape_string($conn_admin, $_POST['create_user_name']);
    $create_user_email = mysqli_real_escape_string($conn_admin, $_POST['create_user_email']);
    $create_user_password = mysqli_real_escape_string($conn_admin, $_POST['create_user_password']);

if(isset($_POST['create_user'])) {

    $sql = "INSERT INTO fuel_test_users (name, email, password) VALUES ('$create_user_name', '$create_user_email', '$create_user_password');";
    $query = mysqli_query($conn_admin, $sql);


    if (empty($create_user_name)) {
        $error_name = ' * Enter Full Name';
    } elseif (empty($create_user_email)) {
        $error_email = ' * Enter Email..';
    } elseif (empty($create_user_password)) {
        $error_password = ' * Enter Password';
    } else {
        echo "<div class='alert'>
                    <div>
                        User with the name $create_user_name and email $create_user_email have been created successfully..
                    </div>        
              </div>";
    }

}

?>
    
    
    <style>  

        .records-nav a:nth-child(2) {
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
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method='post'>
                    <div class="auth">
                        <h1>ADMIN - Create User</h1> 
                        <br /> 
                        <label for="name">Name</label> <span><?= $error_name; ?></span> <br />
                        <input type="text" value="<?= $name; ?>" name="create_user_name" placeholder="Enter Name"/>
                        <br />
                        <label for="email">Email</label> <span><?= $error_email; ?></span> <br />
                        <input type="email" value="<?= $email; ?>" name="create_user_email" placeholder="example@depasamarine.com"/>
                        <br />
                        <label for="password">Password</label> <span><?= $error_password; ?></span> <br />
                        <input type="password" name="create_user_password" placeholder="8+ Characters.." />
                        <br />
                        <button type="submit" name='create_user'>Create User</button>                  
                        <br /> 
                    </div>
                </div>
            </form>
        </div>
    
<?php
    include 'footer.php'
?>
