<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php


//AJAX REQUESTS
$command = $_GET['command'];

$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

    
    $len = strlen($command);

    socket_sendto($sock, $command, $len, 0, '46.105.147.5', 6666);
    socket_close($sock);

?>
</body>
</html>