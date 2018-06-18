<?php

$c=curl_init();

$var = 2;

curl_setopt($c, CURLOPT_URL, "http://localhost/data.php");

curl_setopt($c, CURLOPT_POSTFIELDS, "myVar=" . $var);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

$res = curl_exec($c);

$data = json_decode($res);

for ($a = 0; $a < count($data); $a++) {
  echo $data[$a]->id . ", ";
  echo $data[$a]->username . ", ";
  echo $data[$a]->password . ", ";
  echo $data[$a]->email;
  echo "<br />";
}


?>
