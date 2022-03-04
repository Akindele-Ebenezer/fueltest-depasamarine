<?php

$title = "FUEL TEST | Users";

    include 'header.php';
    include 'admin-auth.php';


    $sql_users = "SELECT * FROM fuel_test_users;";
    $query_users = mysqli_query($conn_admin, $sql_users);
    $result_users = mysqli_fetch_all($query_users, MYSQLI_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // $export = $_POST['export'];
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=DEPASA Fuel Test Users.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");

    }
?>

<style>

    .records-nav a:first-child {
        background: var(--color-1);
        color: #fff;
    }
 

</style>


<div class="login-wrapper">  
        <div class="records"> 
            <form action="" method="post" class="table">
                <button type="submit" name="export" id="export">Export to Excel</button>
                <div class="all-records">
                    <table class="users">
                        <tr>
                            <th> Name</th>
                            <th> Email </th>
                            <th> Id</th>
                        </tr>

                        <?php foreach($result_users as $users) : ?>

                        <tr>
                            <td><?= $users['name']; ?></td>
                            <td><?= $users['email']; ?></td>
                            <td><?= $users['id']; ?></td>
                        </tr>

                        <?php endforeach; ?> 

                    </table>
                </div>
            </form>
    </div>


<?php

    include 'footer.php'; ?>

?>