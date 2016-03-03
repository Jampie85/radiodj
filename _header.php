<?php
/* ============================================================================= */
// RADIO DJ WEB BY JAMPIE
/* ============================================================================= */

include('inc/config.php');
$path = "";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	  <meta name="keywords" content="">
    <title><?php echo $stationName; ?></title>
    <!-- Adding Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Linking style sheets -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" >
	<link rel="stylesheet" href="css/style.css" >

  <!-- adding script files -->
    <script src="js/jquery-2.0.3.js"></script>
	<script src="js/jquery.countdownTimer.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<script src="js/jquery.dialogextend.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
  </head>
<body>
<div class="header">
    <div class="container-main pad-header">
      <div class="bcol-100 menu">
                <span class="menu-text">+ menu</span>

<style>

</style>
	<ul class="menu-bar">
		<a href="index.php"><li><i class="fa fa-space fa-home"></i>Home</li></a>
		<a href="<?php echo $streamurl; ?>"><li><i class="fa fa-space fa-music"></i>Listen</li></a>
		<a href="top_songs.php"><li><i class="fa fa-space fa-music"></i>Top Songs</li></a>
		<a href="top_albums.php"><li><i class="fa fa-space fa-music"></i>Top Albums</li></a>
	    <a href="list.php"><li><i class="fa fa-space fa-music"></i>Song Request</li></a>
	</ul>
      </div>
      <div class="clear"></div>
    </div>
</div>