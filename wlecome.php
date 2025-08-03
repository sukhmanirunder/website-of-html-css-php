<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #4f2d47, #643046);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .welcome-container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      text-align: center;
    }

    h1 {
      color: #333;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      color: #666;
    }

    .logout-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #ff6b6b;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
    }

    .logout-btn:hover {
      background-color: #ff4c4c;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1>Welcome, User!</h1>
    <p>You have successfully logged in.</p>
    <button class="logout-btn" onclick="logout()">Log Out</button>
  </div>

  <script>
    function logout() {
      // Redirect to login page or perform logout actions
      window.location.href = "login.html"; // replace with your actual login page
    }
  </script>
</body>
</html>
