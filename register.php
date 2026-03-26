<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link rel="stylesheet" href="style.css">
<style>
/* Centered form container */
.register-form-container {
    width: 50%;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background: #f5f5f5;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Inputs */
.register-form-container input,
.register-form-container select {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Centered button */
.form-button {
    text-align: center;
}

.form-button button {
    padding: 14px 40px;
    border: none;
    border-radius: 40px;
    font-weight: bold;
    background: linear-gradient(135deg, #FF9A9E, #A18CD1);
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.form-button button:hover {
    transform: scale(1.05);
}

/* Dark mode */
.dark-mode {
    background-color: #121212;
    color: #fff;
}

.dark-mode .register-form-container {
    background-color: #1e1e1e;
}

.dark-mode input,
.dark-mode select {
    background-color: #2c2c2c;
    color: #fff;
    border: 1px solid #555;
}
</style>
</head>
<body>

<!-- Dark mode toggle -->
<div class="navbar" style="text-align:center;margin-top:20px;">
    <button onclick="toggleMode()">🌙 Toggle Mode</button>
</div>

<h2 style="text-align:center;">Event Registration</h2>

<div class="register-form-container">
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

        <div class="form-button">
            <button type="submit">Register Now</button>
        </div>
    </form>
</div>

<script>
// Dark mode toggle
function toggleMode() {
    document.body.classList.toggle("dark-mode");
    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("darkMode", "enabled");
    } else {
        localStorage.setItem("darkMode", "disabled");
    }
}

// Load dark mode preference
window.onload = function() {
    if(localStorage.getItem("darkMode") === "enabled"){
        document.body.classList.add("dark-mode");
    }
}
</script>

</body>
</html>
