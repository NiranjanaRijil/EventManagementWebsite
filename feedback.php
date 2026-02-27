<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
<a href="index.html">Home</a>
<a href="events.php">Events</a>
<a href="register.php">Register</a>
<a href="feedback.php">Feedback</a>
<button onclick="toggleMode()">🌙</button>
</div>

<h2 style="text-align:center;">💬 We Value Your Feedback</h2>

<form action="save_feedback.php" method="POST">
<input type="text" name="name" placeholder="Your Name" required>
<textarea name="message" placeholder="Share your experience..." required></textarea>
<button type="submit">Submit Feedback</button>
</form>

<div class="footer">© 2026 EventSphere</div>

<script>
function toggleMode(){
document.body.classList.toggle("dark-mode");
}
</script>

</body>
</html>
