<?php
// No PHP needed if you use separate save_feedback.php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback</title>
<link rel="stylesheet" href="style.css">
<style>
.feedback-form-container {
    width: 50%;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background: #f5f5f5;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Inputs */
.feedback-form-container input,
.feedback-form-container textarea {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Big fixed feedback box */
.feedback-form-container textarea {
    min-height: 150px;
    line-height: 1.5;
    resize: none; /* Fixed size */
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

.dark-mode .feedback-form-container {
    background-color: #1e1e1e;
}

.dark-mode input,
.dark-mode textarea {
    background-color: #2c2c2c;
    color: #fff;
    border: 1px solid #555;
}
</style>
</head>
<body>

<div class="navbar" style="text-align:center;margin-bottom:20px;">
    <button onclick="toggleMode()">🌙 Toggle Mode</button>
</div>

<h2 style="text-align:center;">Submit Your Feedback</h2>

<div class="feedback-form-container">
    <form action="save_feedback.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <textarea name="message" placeholder="Your Feedback" required></textarea>
        <div class="form-button">
            <button type="submit">Submit Feedback</button>
        </div>
    </form>
</div>

<script>
function toggleMode() {
    document.body.classList.toggle("dark-mode");
    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("darkMode", "enabled");
    } else {
        localStorage.setItem("darkMode", "disabled");
    }
}

// Persistent mode
window.onload = function() {
    if(localStorage.getItem("darkMode") === "enabled"){
        document.body.classList.add("dark-mode");
    }
}
</script>

</body>
</html>
