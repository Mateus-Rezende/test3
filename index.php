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

	if (isset($_POST['btn'])) {
		
		$dir_que_vai = "arquivos/" . $_POST["nome_registro"] . date('Ymdis') . "." . explode(".",$_FILES["nome_arquivo"]["name"])[1];
		move_uploaded_file($_FILES["nome_arquivo"]["tmp_name"], $dir_que_vai);

		$host = "localhost";
		$database = "aulas";
		$user = "root";
		$pass = "";

		$con = mysqli_connect($host, $user, $pass, $database);

		$sql = "INSERT INTO arquivos (nome, imagem) VALUES ('" . $_POST['nome_registro'] . "', '" . $_POST["nome_registro"] . date('Ymdis') . "." . explode(".",$_FILES["nome_arquivo"]["name"])[1] . "')";

			mysqli_query($con, $sql);

		}

		?>

	</body>
	</html>