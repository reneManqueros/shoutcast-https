<?php
$URL = "http://123.123.123.123:8098";
ob_start();
header("Content-Transfer-Encoding: binary");
header("Content-Type: audio/mpeg");
header('X-Pad: avoid browser bug');
header('Cache-Control: no-cache');

$handle = fopen($URL, 'r');

while ($data = fread($handle, 1024)) {
      echo $data;
      ob_flush();
      flush();
      set_time_limit(30);
}
