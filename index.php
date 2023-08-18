<?php 

echo "Hello World!";


$serverName = "tcp:servertestguillaume.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "basetest",
    "Authentication" => "ActiveDirectoryInteractive"
);

$conn = new PDO("sqlsrv:$serverName", $connectionOptions);


