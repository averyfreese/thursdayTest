<?php

function ConnectToDabase()
{
	/* Get environment variables (defined in Azure App Service Settings) for Azure SQL Database connection */
	/* Further info: https://docs.microsoft.com/en-us/azure/app-service-web/web-sites-configure#application-settings */
	$serverName = "averyfreeseserver.database.windows.net"; // In the form of: sqlservername.database.windows.net
	$connectionOptions = array(
		"Database" => "Vehicles",
		"Uid" => "averyfreese",
		"PWD" => "Preston1994!"
	);

	// Connect to Azure SQL Database
	$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

	return $conn;
}
?>
