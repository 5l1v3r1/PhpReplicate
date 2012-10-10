<?php

/* This code tests for the OS of the server it is running on:
This function returns: 1 == Windows
					   2 == Linux
					   3 == Other

					   */


function serverOS()
{
    $sys = strtoupper(PHP_OS);
 
    if(substr($sys,0,3) == "WIN")
    {
        $os = 1;
    }
    elseif($sys == "LINUX")
    {
        $os = 2;
    }
    else
    {
        $os = 3;
    }
 
    return $os;
}

$whatOS = serverOS();

if ($whatOS == 1) {
echo "Windows is installed on this server!";
}
else if ($whatOS == 2) { 
echo "This is a Linux machine!";
}

?>


?>


