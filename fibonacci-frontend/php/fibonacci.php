<?php
  session_start();
  if(!isset($_SESSION['loggedin'])){
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci Application</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f4f7f6;
      margin-top: 40px;
      font-family: 'Arial', sans-serif;
    }
    .container {
      background-color: #ffffff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .header {
      color: #333333;
      text-align: center;
      margin-bottom: 30px;
    }
    .logout-link {
      float: right;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 25px;
    }
    .result-widget {
      color: #333333;
      padding: 15px;
      background-color: #e9ecef;
      border-radius: 4px;
      margin-top: 20px;
    }
    .button {
      font-size: 16px;
      font-weight: bold;
      color: white;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: rgba(0,123,255,.5);
    }

    .button:focus {
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.5);
    }

  </style>
</head>
<body>
  <script>

  function computeFibonacci() {
    var n = $("#inputNumber").val();
    $("#resultWidget").load("invoke.php?n=" + n);
  }


  </script>
  <div class="container">
    <a href="logout.php" class="logout-link">Logout</a>
    <h3 class="header">Hello Fibonacci!</h3>
    <form id="InputNumber" method="post">
      <div class="form-group">
        <label for="inputNumber">Enter input number</label>
        <input type="text" name="inputNumber" id="inputNumber" class="form-control" />
      </div>
      <input type="button" id="Go" onclick="computeFibonacci();" class="button" value="Go"/>
    </form>
    <div id="resultWidget" class="result-widget"></div>
  </div>

</body>
</html>
