  <?php

  $url = $_GET['url'];
  $user = $_GET['user'];
  $pass = $_GET['pass'];
  $agent = "curl/7.29.0";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "$agent");
  curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_VERBOSE, 1);

  $output = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);
  echo $output;
  ?>
