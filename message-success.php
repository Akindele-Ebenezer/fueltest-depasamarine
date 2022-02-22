<?php
include "config.php";
$title = "Message Sent";
include "header.php";

if(isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO admin_inbox (first_name, last_name, email, message, time) VALUES ('$first_name', '$last_name', '$email', '$message', now())";
    $query = mysqli_query($conn, $sql);
}

?>

<div class="message-success">
    <div>
        <h1>Message Sent</h1>
        <p>Hello, <?= ucwords($first_name) . " " . ucwords($last_name); ?>. Your Message has been sent successfully. I hope to respond within 24 hours. You can also contact me through <a href="https://api.whatsapp.com/send?phone=2348023704304">WHATSAPP</a>.</p>
    </div>
</div>

<?php
    include "footer.php";
?>
