<!DOCTYPE html>
<!-- Doctype for html5 -->
<html>

<head></head>

<body>
<?php
$pingGoogle = `ping -c 1 8.8.8.8`;
echo "Let's ping google.: $pingGoogle";
?>

</body>

</html>

