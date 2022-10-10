<?php
$name = (isset($_POST['userName'])) ? $_POST['userName'] : ('Anonyme');
$localServer = $_SERVER['SERVER_NAME'];
$computedString = 'Bonjour, ' . $name . ' ! You are on '. $localServer;
$array = ['userName' => $name, 'computedString' => $computedString, 'serverName' => $localServer];
echo json_encode($array);



?>
