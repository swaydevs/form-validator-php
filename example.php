<?php

include('formValidator-class.php')
$validator = new FormValidator();

$email = 'test@example.com';
if ($validator->isEmail($email)) {
  echo "$email is a valid email address\n";
} else {
  echo "$email is not a valid email address\n";
}

$mobile = '0123456789';
if ($validator->isMobile($mobile)) {
  echo "$mobile is a valid mobile number\n";
} else {
  echo "$mobile is not a valid mobile number\n";
}

$string = 'Hello World';
if ($validator->isString($string)) {
  echo "$string is a valid string\n";
} else {
  echo "$string is not a valid string\n";
}

$number = '12345';
if ($validator->isNumber($number)) {
  echo "$number is a valid number\n";
} else {
  echo "$number is not a valid number\n";
}

$url = 'https://www.example.com';
if ($validator->isUrl($url)) {
  echo "$url is a valid URL\n";
} else {
  echo "$url is not a valid URL\n";
}

$ip = '192.0.2.0';
if ($validator->isIp($ip)) {
  echo "$ip is a valid IP address\n";
} else {
  echo "$ip is not a valid IP address\n";
}

$time = '13:00:00';
if ($validator->isTime($time)) {
  echo "$time is a valid time\n";
} else {
  echo "$time is not a valid time\n";
}

?>
