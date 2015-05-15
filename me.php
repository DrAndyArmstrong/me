<?php
$msg        = $_GET['msg'];
$show	= $_GET['show'];
$erase = $_GET['erase'];
?>
<html>
<body>
<p>
<?php

//Andrew Armstrong 2015, three commands supported on query line, show, msg and erase.
//http://yourhost/me.php?msg="Eat Cake"
//http://yourhost/me.php?show

$file = 'datalog.txt';
// Open the file to get existing content
$current = file_get_contents($file);
if ($show){
	echo $current;
}
if ($msg){
	// Append a new person to the file
	$newline = date('l jS \of F Y h:i:s A') . " " . substr($msg,0,512) . "<br>\n";
	$current .= $newline;
	// Write the contents back to the file
	file_put_contents($file, $current);
	echo $newline;
}
if ($erase){
	file_put_contents($file,date('l jS \of F Y h:i:s A') . " Erased<br>\n");
}
?>
</p>
</body>
</html>
