<?
include("../db.inc.php");
$query = "select * from cadastranoticias where codigo = '$codigo'";
$query = mysql_query($query) or die ("Erro na Alteração dos Dados");
$dados = mysql_fetch_object($query);
?>
<script>
function validarData(field){
var checkstr = "0123456789";
var DateField = field;
var Datevalue = "";
var DateTemp = "";
var seperator = "/";
var day;
var month;
var year;
var leap = 0;
var err = 0;
var i;
   err = 0;
   DateValue = DateField.value;
   /* Delete all chars except 0..9 */
   for (i = 0; i < DateValue.length; i++) {
	  if (checkstr.indexOf(DateValue.substr(i,1)) >= 0) {
	     DateTemp = DateTemp + DateValue.substr(i,1);
	  }
   }
   DateValue = DateTemp;
   /* Always change date to 8 digits - string*/
   /* if year is entered as 2-digit / always assume 20xx */
   if (DateValue.length == 6) {
      DateValue = DateValue.substr(0,4) + '20' + DateValue.substr(4,2); }
   if (DateValue.length != 8) {
      err = 19;}
   /* year is wrong if year = 0000 */
   year = DateValue.substr(4,4);
   if (year == 0) {
      err = 20;
   }
   /* Validation of month*/
   month = DateValue.substr(2,2);
   if ((month < 1) || (month > 12)) {
      err = 21;
   }
   /* Validation of day*/
   day = DateValue.substr(0,2);
   if (day < 1) {
     err = 22;
   }
   /* Validation leap-year / february / day */
   if ((year % 4 == 0) || (year % 100 == 0) || (year % 400 == 0)) {
      leap = 1;
   }
   if ((month == 2) && (leap == 1) && (day > 29)) {
      err = 23;
   }
   if ((month == 2) && (leap != 1) && (day > 28)) {
      err = 24;
   }
   /* Validation of other months */
   if ((day > 31) && ((month == "01") || (month == "03") || (month == "05") || (month == "07") || (month == "08") || (month == "10") || (month == "12"))) {
      err = 25;
   }
   if ((day > 30) && ((month == "04") || (month == "06") || (month == "09") || (month == "11"))) {
      err = 26;
   }
   /* if 00 ist entered, no error, deletin??????????ŸG???????????†????????????????????????????????????????††?????????|?????????????????????????????????????????????????????????????????????????????????????????††?????????????????????????????????†?Z?????????????????????????????????????????†?????????????A????????????????Ï?????????????????????????????†?Z8???????????????????????????????????????????????†???????????????????????????????????????????????†?????????????????????????????Z???????????????????????? ??L????????g the entry */
   if ((day == 0) && (month == 0) && (year == 00)) {
      err = 0; day = ""; month = ""; year = ""; seperator = "";
   }
   /* if no error, write the completed date to Input-Field (e.g. 13.12.2001) */
   if (err == 0) {
      DateField.value = day + seperator + month + seperator + year;
   }
   /* Error-message if err != 0 */
   else {
      alert("Formato de Data Inválido!");
      DateField.value="";
	  DateField.select();
	  DateField.focus();
   }
}
//  End -->
</script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../j.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../bots/cadastra2.gif')">
<p align="justify" class="unnamed1"><img src="alterarlogo.gif" width="623" height="68"></p>
<blockquote>
<form action="salva_alteracao_noticia.php?codigo=<?=$dados->codigo?>" method="post" name="form1" id="form1">
    <table width="69%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr> 
        <td width="15%">&nbsp;</td>
        <td width="8%">Data</td>
        <td colspan="5"><input name="data" type="text" id="data" OnBlur="validarData(this)" OnKeyPress="formatar('##/##/####', this)" value="<?=$dados->data?>" size="10"></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>Sistema: </td>
        <td colspan="5"><select name="sistema" id="sistema">
            <option value="Domínio Contábil" <? if ($dados->sistema == "Domínio Contábil"){ echo "selected";}?>>Domínio 
            Contábil</option>
            <option value="Domínio Folha"<? if ($dados->sistema == "Domínio Folha"){ echo "selected";}?>>Domínio 
            Folha</option>
            <option value="Outros"<? if ($dados->sistema == "Outros"){ echo "selected";}?>>Outros</option>
          </select></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>T&iacute;tulo:</td>
        <td colspan="5"><input name="titulo" type="text" id="titulo" value="<?=$dados->titulo?>" size="35"></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>Texto:</td>
        <td colspan="5"><textarea name="texto" cols="35" rows="10" id="texto"><?=$dados->texto?></textarea></td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="11%">&nbsp;</td>
        <td width="8%"><input type="submit" name="Submit" value="Gravar"></td>
        <td width="8%"> <input type="reset" name="Submit2" value="Desfazer"></td>
        <td width="17%"><input type="button" name="Submit3" value="Voltar" onClick="window.location = 'alterar_noticia.php'"></td>
        <td width="33%">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    </form>
  <p align="left" class="unnamed1">&nbsp; </p>
</blockquote>
</body>
</html>
