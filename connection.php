<?php

define('HOST','localhost');
define('USER','root');
define('PASS','root');
define('DB','kost');
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

date_default_timezone_set("Asia/Jakarta");
?>