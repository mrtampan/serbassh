<?php

echo "Username@host: \n";

echo "example: ucup@105.33.187.200 \n";

$userhost = trim(fgets(STDIN));

echo "localport:remotehost:port : \n";

echo "example: 3310:localhost:3306 \n";

$localhostport = trim(fgets(STDIN));

if(empty($localhostport)){
    echo "kosong auto handle \n\n";
    $localhostport = "3310:localhost:3306";
}

echo shell_exec("ssh -f ". $userhost . " -L " . $localhostport . " -N");

?>