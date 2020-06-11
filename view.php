<?php
   $connectionInfo = array("UID" => "kepengqi", "pwd" => "Wal3300418", "Database" => "tp046981", "LoginTimeout" => 30, 
                           "Encrypt" => 1, "TrustServerCertificate" => 0);
   $serverName = "tcp:tp046981.database.windows.net,1433";
   $conn = sqlsrv_connect($serverName, $connectionInfo);
 if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";
?>
