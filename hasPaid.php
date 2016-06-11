<?php
error_reporting(0);
$name = $_GET['username'];
if (isset($_GET['username']) != 1 || trim($name) == "") {
  echo "false";
  die();
}
$url = "https://api.mojang.com/users/profiles/minecraft/" . urlencode($name);

$content = file_get_contents($url); // Loads data from an URL
// eg. {"id":"360d11df2b1d41a78e1775df49444128","name":"_scrunch"}

$json = json_decode($content);

if( strtolower($json->name) != strtolower($name)) {
  echo "false";
} else {
  echo "true";
}
