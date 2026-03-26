<?php
// Start session to display popup message
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback</title>
<link rel="stylesheet" href="style.css">
<style>
/* Feedback form container */
.feedback-form-container {
    width: 50%;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background: #f5f5f5;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Inputs and textarea */
.feedback-form-container input,
.feedback-form-container textarea {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
    resize: none;       /* Fixed size */
}

.feedback-form-container textarea {
    min-height: 150px;  /* Bigger textarea */
    line-height: 1.5;
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

/* Dark mode styles */
.dark-mode {
    background-color: #121212;
    color: #fff;
}

.dark-mode .feedback-form-container {
    background-color: #1e1e1e;
}

.dark-mode input,
.dark-mode textarea {
    background-color: #2c2c2c;
    color: #fff;
    border: 1px solid #555;
}

/* Popup confirmation */
.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background:white;
    padding:60px;
    border-radius:40px;
    text-align:center;
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
    animation:pop 0.6s ease;
    z-index: 1000;
}

@keyframes pop {
    0%{transform:scale(0.5); opacity:0;}
    100%{transform:scale(1); opacity:1;}
}
</style>
</head>
<body>

<!-- Dark mode toggle button -->
<div class="navbar" style="text-align:center;margin-top:20px;">
    <button onclick="toggleMode()">🌙 Toggle Mode</button>
</div>

<h2 style="text-align:center;">Submit Your Feedback</h2>

<div class="feedback-form-container">
    <form action="save_feedback.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <textarea name="message" placeholder="Your Feedback" rows="8" required></textarea>
        <div class="form-button">
            <button type="submit">Submit Feedback</button>
        </div>
    </form>
</div>

<!-- Popup confirmation -->
<?php
if(isset($_SESSION['feedback_success'])) {
    echo '<div class="popup">
            <h2>🎉 Thank you for your feedback!</h2>
          </div>';
    unset($_SESSION['feedback_success']);
}
?>

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
