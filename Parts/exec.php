<!DOCTYPE html>
<!-- Doctype for html5 -->
<html>

<head></head>

<body>

<?php
   
   $cmd = "echo Exec php function works!";

   


   $output = exec($cmd);

   printf("Exec() Output: $output.");

 

?>
</body>

</html>



