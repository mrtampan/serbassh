<?php

echo "nama file: \n";

echo "example: C:\\Users\dist.zip \n";

$file = trim(fgets(STDIN));

echo "username@host: \n";

echo "example: ucup@105.33.187.200 \n";

$userhost = trim(fgets(STDIN));

echo "Server Direktory: \n";

echo "example: :/home/ucup \n";

$serverdir = trim(fgets(STDIN));

echo "scp ". $file . " " . $userhost . $serverdir;

echo "\n";

echo shell_exec("scp ". $file . " " . $userhost . $serverdir);

?>