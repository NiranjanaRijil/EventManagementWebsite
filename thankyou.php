<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank You</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
<a href="index.html">Home</a>
<a href="events.php">Events</a>
<a href="register.php">Register</a>
<button onclick="toggleMode()">🌙</button>
</div>

<div class="hero">
<h1>🎉 Thank You!</h1>
<p>Hope you enjoyed the event experience.</p>
<a href="index.html"><button>Back to Home</button></a>
</div>

<div class="footer">© 2026 EventSphere</div>

<script>
function toggleMode(){
document.body.classList.toggle("dark-mode");
}
</script>

</body>
</html>
