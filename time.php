<?php
date_default_timezone_set("Asia/Calcutta");
echo date_default_timezone_get();
echo "The time is " . date("d/m/Y h:i:sa");

$sec = 15688777;
function timeLength($sec)
{
	$s=$sec % 60;
    $h=floor($sec / 3600);
	return $h.":".substr("0".$m,-2).":".substr("0".$s,-2);
}

?>