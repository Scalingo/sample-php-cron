<?php
  $redis_url_str = $_ENV["REDIS_URL"] ? $_ENV["REDIS_URL"] : "redis://localhost:6379";
  $redis_url = parse_url($redis_url_str);
  $redis = new Redis();
  $redis->connect($redis_url['host'], $redis_url['port']);
  $redis->auth($redis_url['pass']);
  $counter = $redis->get('counter');
?>

<html style="html{height:100%}">
  <head>
    <title>Sample PHP with CRON application on Scalingo</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Lato:700">
  </head>
  <body style="-webkit-transform-style:preserve-3d;transform-style:preserve-3d;text-align:center;height:100%;margin:0;padding:0;background-color:black;background-image:url('background.jpg');no-repeat fixed center center/cover #000;color:white">
    <a href="https://github.com/Scalingo/sample-php-cron">
      <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
    </a>
    <div id="wrapper" style="position:relative;top:40%;-webkit-transform:translateY(-40%);-ms-transform:translateY(-40%);transform:translateY(-40%)">
      <h1 style="font-size:2rem;font-weight:700;text-shadow:0 1px 2px rgba(0,0,0,0.5);font-family:'Lato', sans-serif;margin:0;paddding:0">This is a sample application with PHP with a task scheduler</h1>
      <br>
      <p style="font-size:2rem;">CRON task has been started
        <?php
          echo $counter + "";
        ?>
        times
      </p> 
      <br>
      <a style="margin-top:1rem;text-decoration:none" href="https://scalingo.com">
        <img style="height:40px" src="scalingo.svg">
      </a>
    </div>
  </body>
</html>

