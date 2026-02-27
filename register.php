<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
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

<h2 style="text-align:center;">Event Registration</h2>

<form action="save_registration.php" method="POST">

<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>

<select name="event" required>
<option value="">Select Event</option>
<option>💻 Web Development Workshop</option>
<option>🤖 AI Seminar</option>
<option>🔐 Cyber Security Talk</option>
<option>☁️ Cloud Computing Workshop</option>
<option>🏆 Hackathon 2026</option>
<option>🦾 Robotics Workshop</option>
<option>📊 Data Science Bootcamp</option>
<option>🎨 UI/UX Design Seminar</option>
<option>🔗 Blockchain Basics</option>
</select>

<button type="submit">Register Now</button>

</form>

<div class="footer">© 2026 EventSphere</div>

<script>
function toggleMode(){
document.body.classList.toggle("dark-mode");
}
</script>

</body>
</html>
