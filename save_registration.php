<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php";
include "db.php";
if(isset($_POST['name'], $_POST['email'], $_POST['event'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $event = mysqli_real_escape_string($conn, $_POST['event']);

    // Check for duplicate registration
    $check = mysqli_query($conn, "SELECT * FROM users u 
        JOIN registration r ON u.id = r.user_id 
        WHERE u.email='$email' AND r.event_name='$event'");

    if(mysqli_num_rows($check) > 0){
        echo "<h2 style='text-align:center;margin-top:50px;'>You have already registered for <strong>$event</strong>!</h2>";
        exit;
    }

    // Insert into users
    mysqli_query($conn,"INSERT INTO users(name,email) VALUES('$name','$email')");
    $user_id = mysqli_insert_id($conn);

    // Insert into registration
    mysqli_query($conn,"INSERT INTO registration(user_id,event_name) VALUES('$user_id','$event')");
}
?>
