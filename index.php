<?php 

echo "Hello World!";


try {
    $conn = new PDO("sqlsrv:server = tcp:servertestguillaume.database.windows.net,1433; Database = basetest", "CloudSA581e4b7f", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA581e4b7f", "pwd" => "{your_password_here}", "Database" => "basetest", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:servertestguillaume.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>

