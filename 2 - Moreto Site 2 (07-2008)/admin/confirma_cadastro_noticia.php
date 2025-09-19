<?
include ("inc/db.inc.php");
$data = $_POST["data"];
$sistema = $_POST["sistema"];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

$query = "insert into cadastranoticias (data,sistema,titulo,texto)"; //comando SQL
$query .= "values ('$data','$sistema','$titulo','$texto')";
echo "<script> alert ('Documento Cadastrado com Sucesso');</script>";
echo "<script> window.location = 'cadastrar_noticia.php';</script>";
mysql_query($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Confirma Cadastro</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
</body>
</html>
