<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php";
echo "<pre>Form data received: ";
print_r($_POST);
echo "</pre>";// only once

if(isset($_POST['name'], $_POST['email'], $_POST['event'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $event = mysqli_real_escape_string($conn, $_POST['event']);

    // Check if this user already exists
    $user_check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if(mysqli_num_rows($user_check) > 0){
        $user = mysqli_fetch_assoc($user_check);
        $user_id = $user['id'];
    } else {
        // Insert new user
        $result = mysqli_query($conn,"INSERT INTO users(name,email) VALUES('$name','$email')");
        if(!$result){
            die("User insert failed: " . mysqli_error($conn));
        }
        $user_id = mysqli_insert_id($conn);
    }

    // Check if user already registered for this event
    $check_event = mysqli_query($conn,"SELECT * FROM registration WHERE user_id='$user_id' AND event_name='$event'");
    if(mysqli_num_rows($check_event) > 0){
        die("<h2 style='text-align:center;margin-top:50px;'>You have already registered for <strong>$event</strong>!</h2>");
    }

    // Insert registration
    $reg_result = mysqli_query($conn,"INSERT INTO registration(user_id,event_name) VALUES('$user_id','$event')");
    if(!$reg_result){
        die("Registration insert failed: " . mysqli_error($conn));
    }

    echo "<h2 style='text-align:center;margin-top:50px;'>🎉 Registration Successful for <strong>$event</strong>!</h2>";
} else {
    die("Form data not submitted!");
}
?>
