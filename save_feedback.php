<?php
include "db.php";

$name = $_POST['name'];
$message = $_POST['message'];

mysqli_query($conn,"INSERT INTO feedback(name,message) VALUES('$name','$message')");

header("Location: thankyou.php");
exit();
?>
