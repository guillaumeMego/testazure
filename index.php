<?php 

echo "Hello World!";


$serverName = "your_server_name.database.windows.net";
$connectionOptions = [ 
    "Database" => "basetest",
    "Uid" => "your_username",
    "PWD" => "your_password"
];

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=basetest", $connectionOptions);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to Azure database.";

    $query = "SELECT * FROM [User]";
    $stmt = $conn->query($query);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "UserID: " . $row['UserID'] . " - Name: " . $row['FirstName'] . " " . $row['LastName'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

