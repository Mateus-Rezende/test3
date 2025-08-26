<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="nome_registro">
		<input type="file" name="nome_arquivo">
		<button type="submit" name="btn">Go</button>
	</form>

	<?php 

	// $serverName = "siafugaf.mysql.database.azure.com"; // update me
    // $connectionOptions = array(
    //     "Database" => "siaf", // update me
    //     "Uid" => "dbsiafugaf", // update me
    //     "PWD" => "$1@f@23Ugaf" // update me
    // );
    // $conn = mysqli_init();
// mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
// mysqli_real_connect($conn, '20.206.210.59', 'dbsiafugaf', '$1@f@23Ugaf', 'siaf', 3306);
// if (mysqli_connect_errno($conn)) {
// die('Failed to connect to MySQL: '.mysqli_connect_error());
// }


		?>

		<?php
$servername = "siafugaf.mysql.database.azure.com";
$username = "dbsiafugaf";
$password = "$1@f@23Ugaf";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

	</body>
	</html>