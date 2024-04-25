<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
    $n = $_GET['n'];
    $url = "http://fibonacci-backend-cs:5000/fibonacci?n=";
    $url .= $n;
    $data = array();

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded",
            'method'  => 'GET',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $resp = file_get_contents($url, false, $context);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci Result</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }
    .result-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      max-width: 600px;
      width: 100%;
      margin: auto;
    }
    .result {
      color: #333;
      font-size: 1.2em;
      margin-top: 20px;
      padding: 20px;
      background-color: #e9ecef;
      border-radius: 4px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="result-container">
    <?php if(isset($_SESSION['loggedin'])): ?>
      <div class='result'><?= ($resp) ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
