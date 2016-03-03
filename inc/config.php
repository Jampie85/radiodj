<?php
/* ============================================================================= */
// CONFIG 
/* ============================================================================= */

$stationName	= "Radio Jampie";		//Your Station name

// MySQLi 
$mysql['server']	= "127.0.0.1";				// MySQL Server's IP (and port if not default). Ex: (191.268.1.2 or 191.268.1.2:345).
$mysql['database']	= "radiodj161";				// MySQL database name
$mysql['user']		= "root";					// MySQL database username. Usually root.
$mysql['password']	= "";						// MySQL database password.

$nextLimit		= 5;
$resLimit		= 20;						// How many results to display?
$resDays		= 7;						// On how many days to build the top?
$reqLimit		= 10;						// Limit number of requests per IP
$track_repeat	= 120;						// Don't display the track if it was played in the last X minutes.
$artist_repeat	= 120;						// Don't display the track if the artist was played in the last X minutes.
$def_timezone	= 'Europe/Amsterdam';		// Set your time-zone.
$requests		= true;						// turn on/off requests (true or false)

//Shoutcast player
$shoutcast = false; //ex: "192.168.1.1:8000";
$streamurl = false; //ex: "http://192.168.1.1:8000/listen.pls";
/* ============================================================================= */
// END CONFIG
/* ============================================================================= */

// LOAD MYSQL CLASS
include('db_class.php');
include('functions.php');
?>