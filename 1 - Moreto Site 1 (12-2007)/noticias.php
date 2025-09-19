<?
	include ("db.inc.php");
	if (!empty($titulo)){
		$querye = " where titulo like '%$titulo%' ORDER BY codigo DESC";
		}else{ $querye = " ORDER BY codigo DESC"; }
	$query = "select * from cadastranoticias ".$querye; 
	$query = mysql_query ($query) or die (mysql_error() . "ocorreu um erro na Seleção das Empresas"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="j.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('bots/cadastra2.gif')">
<p align="justify" class="unnamed1"><img src="noticiaslogo.gif" width="623" height="68"></p>
<blockquote> 
  <form name="form1" method="post" action="">
    <table width="68%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="21%" height="26" valign="top"> 
          <input name="titulo" type="text" id="titulo" value="<?=@$titulo?>"> 
        </td>
        <td width="4%" valign="top"><input name="buscar" id="buscar" type="image" value="buscar" src="icones/buscar.gif" width="27" height="26"></td>
        <td width="38%" valign="middle"> 
          <div align="left"><font color="#003366" size="2" face="Sylfaen">Buscar 
            por T&iacute;tulo</font></div></td>
        <td width="37%"><div align="right"><font color="#003366" size="2" face="Sylfaen"><a href="admin/index.php" target="mainFrame">Admin</a></font></div></td>
      </tr>
    </table>
    <br>
	<? 
  		while ($linha = mysql_fetch_object($query)){
	?>
    <table width="68%" border="1" cellpadding="1" cellspacing="1" bordercolor="#6699CC">
      <tr> 
        <td> <div align="left"><font color="#000000" size="1"> </font> <font color="#000000">Data: 
            <?=$linha->data?>
            </font></div></td>
        <td width="53%"><div align="left">Sistema: 
            <?=$linha->sistema?>
          </div></td>
      </tr>
      <tr> 
        <td colspan="2"> <div align="left"><font face="Georgia, Times New Roman, Times, serif"><strong> 
            <img src="seta.gif" width="13" height="13" align="absbottom"> 
            <?=$linha->titulo?>
            </strong></font></div></td>
      </tr>
      <tr> 
        <td height="23" colspan="2"> 
          <?= ereg_replace( "[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\" target=\"_blank\" rel=\"nofollow\">\\0</a>", nl2br( $linha->texto ) );?>
          &nbsp;</td>
      </tr>
    </table>
	      
    <p> <br>
      <? 
	  }
	  ?>
    </p>
    </form>
  <p align="justify" class="unnamed1">&nbsp;</p>
</blockquote>
</body>
</html>