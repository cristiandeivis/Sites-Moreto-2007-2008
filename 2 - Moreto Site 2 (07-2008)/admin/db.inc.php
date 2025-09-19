<?
     $db = @mysql_connect("localhost", "[removido]", "[removido]")
	 or die("Ocorreu um erro durante a conexуo com o banco de dados.". mysql_error());
     mysql_select_db("moreto_moreto", $db) or die ("Erro na seleчуo do banco: "  .mysql_error());
	 
	 
	 function getValueBd($query){
	 	$bd = mysql_query($query) or die ("Erro no getValueDB" . mysql_error());
		$valor = mysql_fetch_array($bd);
		return $valor[0];
	 }
	 function inserir($query, $tabelaLabel){
	 	mysql_query($query) or die ("Erro ao inserir (".$tabelaLabel.")" . mysql_error());
	 }
	 function listar($query){
	 	$xa = mysql_query($query) or die ("Erro ao inserir" . mysql_error());
		return $xa;
	 }
	 function excluir($query){
	 	mysql_query($query) or die ("Erro ao inserir" . mysql_error());
	 }
?>