<?
	include ("../db.inc.php");	  //chamando banco de dados
    $query = "delete from cadastranoticias where codigo = '$codigo' limit 1";
    mysql_query ($query) or die ("Ocorreu Um Erro na Exclus�o".mysql_error());
    echo "<script> window.location = 'menu_cadastro.php';</script>";
?>