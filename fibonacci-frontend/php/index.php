<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
    header('Location: fibonacci.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci Application - Login</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      width: 300px;
    }
    .login-container h2 {
      text-align: center;
      color: #333;
    }
    .login-form {
      display: flex;
      flex-direction: column;
    }
    .login-form label {
      margin-bottom: 5px;
    }
    .login-form input[type="text"],
    .login-form input[type="submit"] {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    .login-form input[type="submit"] {
      background-color: #5cb85c;
      color: white;
      cursor: pointer;
    }
    .login-form input[type="submit"]:hover {
      background-color: #4cae4c;
    }
    .error-message {
      color: #d9534f;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <?php if(isset($_SESSION['loginFailed'])): ?>
      <div class="error-message">
        ❌ Login failed!
      </div>
    <?php unset($_SESSION['loginFailed']); endif; ?>
    <form action="login.php" method="post" class="login-form">
      <label for="passphrase">Enter Pass Phrase</label>
      <input type="text" name="passphrase" id="passphrase" />
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
