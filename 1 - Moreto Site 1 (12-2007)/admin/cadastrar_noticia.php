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
<p align="justify" class="unnamed1"><img src="cadastralogo.gif" width="623" height="68"></p>
<blockquote>
<form action="confirma_cadastro_noticia.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <table width="69%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr> 
        <td width="14%"><div align="right"></div></td>
        <td width="8%">Data:</td>
        <td colspan="4"> <div align="left"> 
            <input name="data" type="text" id="data" OnBlur="validarData(this)" OnKeyPress="formatar('##/##/####', this)" value="<?=@$data?>" size="10">
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"></div></td>
        <td>Sistema: </td>
        <td colspan="4"> <div align="left"> 
            <select name="sistema" id="sistema">
              <option value="Dom&iacute;nio Cont&aacute;bil">Dom&iacute;nio Cont&aacute;bil</option>
              <option value="Dom&iacute;nio Folha">Dom&iacute;nio Folha</option>
              <option value="Outros">Outros</option>
            </select>
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"></div></td>
        <td>T&iacute;tulo:</td>
        <td colspan="4"> <div align="left"> 
            <input name="titulo" type="text" id="titulo" size="35">
          </div></td>
      </tr>
      <tr> 
        <td><div align="right"></div></td>
        <td>Texto:</td>
        <td colspan="4"> <div align="left"> 
            <textarea name="texto" cols="35" rows="10" id="texto"></textarea>
          </div></td>
      </tr>
      <tr> 
        <td colspan="2"><div align="left"></div></td>
        <td width="12%"> <div align="left"> </div></td>
        <td width="8%"><input name="salvar" type="submit" id="salvar2" value="Gravar"></td>
        <td width="8%"> <div align="left"> 
            <input type="reset" name="Submit2" value="Limpar">
          </div></td>
        <td width="50%"> <div align="left"> 
            <input type="button" name="Submit" value="Voltar" onClick="window.location = 'menu_cadastro.php'">
          </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    </form>
  <p align="left" class="unnamed1">&nbsp; </p>
</blockquote>
</body>
</html>
