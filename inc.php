<?php
  $redis_url_str = $_ENV["REDIS_URL"] ? $_ENV["REDIS_URL"] : "redis://localhost:6379";
  $redis_url = parse_url($redis_url_str);
  $redis = new Redis();
  $redis->connect($redis_url['host'], $redis_url['port']);
  $redis->auth($redis_url['pass']);
  $redis->incr('counter');
  $counter = $redis->get('counter') + "";
  echo "Counter has been incremented to " . $counter . "\n";
?>
