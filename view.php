<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:ddacdatabase.database.windows.net,1433; Database = ddacdatabase", "ddacadmin", "ddac@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ddacadmin", "pwd" => "ddac@123", "Database" => "ddacdatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddacdatabase.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

echo "Connected.";

?>
