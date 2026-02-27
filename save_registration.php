<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];

mysqli_query($conn,"INSERT INTO users(name,email) VALUES('$name','$email')");
$user_id = mysqli_insert_id($conn);

mysqli_query($conn,"INSERT INTO registration(user_id,event_name) VALUES('$user_id','$event')");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Successful</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background: linear-gradient(135deg,#FFD6E0,#E4D0FF,#CFF5E7);
  background-size:400% 400%;
  animation:gradientMove 10s ease infinite;
}

@keyframes gradientMove{
  0%{background-position:0% 50%;}
  50%{background-position:100% 50%;}
  100%{background-position:0% 50%;}
}

.popup{
  background:white;
  padding:60px;
  border-radius:40px;
  text-align:center;
  box-shadow:0 20px 40px rgba(0,0,0,0.15);
  animation:pop 0.6s ease;
}

@keyframes pop{
  0%{transform:scale(0.5); opacity:0;}
  100%{transform:scale(1); opacity:1;}
}

.popup h2{
  font-size:30px;
  margin-bottom:20px;
}

.popup p{
  margin-bottom:30px;
  font-size:18px;
}

button{
  padding:14px 30px;
  border:none;
  border-radius:40px;
  font-weight:bold;
  background:linear-gradient(135deg,#FF9A9E,#A18CD1);
  color:white;
  cursor:pointer;
  transition:0.3s;
}

button:hover{
  transform:scale(1.1);
}
</style>

</head>

<body>

<div class="popup">
  <div class="popup-box">
    <h2>🎉 Registration Successful!</h2>
    <p>Thank you for registering for <strong><?php echo $event; ?></strong></p>
    <br>
    <a href="index.html"><button>Go Home</button></a>
  </div>
</div>

</body>
</html>
