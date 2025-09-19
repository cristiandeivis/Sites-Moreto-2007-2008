<?
include ("../db.inc.php");
$data = $_POST["data"];
$sistema = $_POST["sistema"];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$query = "update cadastranoticias set data='$data',sistema='$sistema',titulo='$titulo',texto='$texto'";
$query.= "where codigo = '$codigo'";
mysql_query ($query) or die ("Ocorreu um Erro na Inserção dos Valores".mysql_error());
echo "<script> alert ('Notícia Alterada Com Sucesso');</script>";
echo "<script> window.location = 'alterar_noticia.php?codigo=$codigo';</script>";
?>