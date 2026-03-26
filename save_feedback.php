<?php
include "db.php";

// Check if form was submitted
if(isset($_POST['name'], $_POST['message'])) {

    // Sanitize user input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert feedback into database
    $result = mysqli_query($conn, "INSERT INTO feedback(name,message) VALUES('$name','$message')");

    // Check if insert was successful
    if(!$result){
        die("Feedback submission failed: " . mysqli_error($conn));
    }

    // Redirect to thankyou page
    header("Location: thankyou.php");
    exit();

} else {
    die("Form not submitted correctly!");
}
?>
