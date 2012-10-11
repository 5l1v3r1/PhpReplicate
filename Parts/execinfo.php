<!DOCTYPE html>
<!-- Doctype for html5 -->
<html>

<head></head>

<body>

<?php
   $cmd = "echo Exec php function works!";




   exec($cmd, $results);
   printf("Exec() Output: {$results[0]}\n");



?>
</body>

</html>
	
