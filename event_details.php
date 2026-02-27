<?php
$id = $_GET['id'];

$events = [

1 => ["💻 Web Development Workshop","VIT Chennai Auditorium","9:00 AM - 4:00 PM",
"Hands-on HTML, CSS, JavaScript and PHP training."],

2 => ["🤖 AI Seminar","Chennai Convention Hall","10:00 AM - 1:00 PM",
"Introduction to Artificial Intelligence and Machine Learning."],

3 => ["🔐 Cyber Security Talk","VIT Seminar Hall","11:00 AM - 2:00 PM",
"Understanding cyber threats and protection strategies."],

4 => ["☁️ Cloud Computing Workshop","Chennai Tech Park","9:30 AM - 3:30 PM",
"Learn about cloud platforms and deployment."],

5 => ["🏆 Hackathon 2026","Online Event","24 Hours",
"24-hour coding competition with exciting prizes."],

6 => ["🦾 Robotics Workshop","VIT Robotics Lab","10:00 AM - 4:00 PM",
"Build and program robots using sensors."],

7 => ["📊 Data Science Bootcamp","Chennai IT Center","9:00 AM - 5:00 PM",
"Learn Python, analytics and visualization."],

8 => ["🎨 UI/UX Design Seminar","Online Webinar","2:00 PM - 4:00 PM",
"Modern user experience design principles."],

9 => ["🔗 Blockchain Basics","VIT Hall B","11:00 AM - 1:00 PM",
"Explore blockchain and cryptocurrency fundamentals."]
];

$event = $events[$id];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $event[0]; ?></title>
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

<div class="details-container">
<h2><?php echo $event[0]; ?></h2>
<p><strong>Venue:</strong> <?php echo $event[1]; ?></p>
<p><strong>Time:</strong> <?php echo $event[2]; ?></p>
<br>
<p><?php echo $event[3]; ?></p>
<br>
<a href="register.php"><button>Register Now</button></a>
</div>

<div class="footer">© 2026 EventSphere</div>

<script>
function toggleMode(){
document.body.classList.toggle("dark-mode");
}
</script>

</body>
</html>
