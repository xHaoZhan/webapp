<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:ddacdatabase.database.windows.net,1433; Database = ddacdatabase", "ddacadmin", "ddac@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
