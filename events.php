<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Events</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
<a href="index.html">Home</a>
<a href="events.php">Events</a>
<a href="register.php">Register</a>
<button id="darkToggle">🌙</button>
</div>

<h2 style="text-align:center;">Upcoming Events</h2>

<div class="event-grid">

<?php
$events = [
["💻 Web Development Workshop","Hands-on HTML, CSS, JS and PHP training.","VIT Chennai Auditorium","9:00 AM - 4:00 PM"],
["🤖 AI Seminar","Introduction to Artificial Intelligence and Machine Learning.","Chennai Convention Hall","10:00 AM - 1:00 PM"],
["🔐 Cyber Security Talk","Learn about ethical hacking and security measures.","VIT Seminar Hall","11:00 AM - 2:00 PM"],
["☁️ Cloud Computing Workshop","Explore AWS, Azure and cloud deployment.","Chennai Tech Park","9:30 AM - 3:30 PM"],
["🏆 Hackathon 2026","24-hour coding challenge with prizes.","Online Event","24 Hours"],
["🦾 Robotics Workshop","Build and program robots using sensors.","VIT Robotics Lab","10:00 AM - 4:00 PM"],
["📊 Data Science Bootcamp","Learn Python and data visualization.","Chennai IT Center","9:00 AM - 5:00 PM"],
["🎨 UI/UX Design Seminar","Modern UI design principles and case studies.","Online Webinar","2:00 PM - 4:00 PM"],
["🔗 Blockchain Basics","Understanding cryptocurrency and blockchain.","VIT Hall B","11:00 AM - 1:00 PM"]
];

foreach($events as $event){
echo "
<div class='event-card'>
<h3 class='event-title' onclick='toggleDetails(this)'>{$event[0]}</h3>

<div class='details'>
<p><strong>Description:</strong> {$event[1]}</p>
<p><strong>Venue:</strong> {$event[2]}</p>
<p><strong>Time:</strong> {$event[3]}</p>
<br>
<a href='register.php'><button>Register</button></a>
</div>

</div>
";
}
?>

</div>

<script>
function toggleDetails(title){

// Close all other tabs
let allDetails = document.querySelectorAll(".details");
allDetails.forEach(function(detail){
detail.style.maxHeight = null;
});

// Open clicked one
let details = title.nextElementSibling;

if(details.style.maxHeight){
details.style.maxHeight = null;
}else{
details.style.maxHeight = details.scrollHeight + "px";
}
}

document.getElementById("darkToggle").addEventListener("click",function(){
document.body.classList.toggle("dark-mode");
});
</script>

</body>
</html>
