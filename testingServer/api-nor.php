<?php 
date_default_timezone_set('UTC');

echo time();

$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$ceJour = date('l \of&#32; F Y h:i:s A');
$today = date('l \of&#32; F Y h:i:s A');
echo '<br />' . $ceJour;
echo '<br />' . $tomorrow . '<br />';
echo 'ISO 8601 ' . date('c') ;