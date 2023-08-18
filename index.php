<?php 

echo "Hello World!";


$serverName = "tcp:servertestguillaume.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "basetest",
    "Authentication" => "ActiveDirectoryInteractive"
);

$conn = new PDO("sqlsrv:$serverName", $connectionOptions);


// afficher les users
$sql = "SELECT * FROM users";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
    echo $row['id'] . " " . $row['name'] . " " . $row['email'] . "<br />";
}