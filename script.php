<?php
   $url="http://localhost/lab09/login.php?u=toto&p=tata";
   $result = file_get_contents($url);

   print($result)

?>