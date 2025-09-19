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
<title>Not&iacute;cias</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
@import url("css.css");
@import url("css.css");
@import url("css.css");
.fundo {
	border-bottom-width: 9px;
	border-bottom-style: solid;
	border-bottom-color: #0099CC;
}
-->
</style>
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

<body bgcolor="#DDE7FD" leftmargin="0" topmargin="0" onLoad="MM_preloadImages('menfw/menufw_r2_c2_f2.gif','menfw/menufw_r4_c2_f2.gif','menfw/menufw_r6_c2_f2.gif','menfw/menufw_r8_c2_f2.gif','menfw/menufw_r10_c2_f2.gif','menfw/menufw_r12_c2_f2.gif','menfw/menufw_r14_c2_f2.gif','menfw/menufw_r16_c2_f2.gif')">
<table width="784" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr> 
    <td height="19" colspan="3" valign="top"> <div align="left"><img src="imagens/superior.gif" width="783" height="76" align="middle" class="passagem"></div></td>
  </tr>
  <tr> 
    <td width="255" rowspan="3" valign="top" class="fundoeladotab">
<table border="0" cellpadding="0" cellspacing="0" width="246">
        <!-- fwtable fwsrc="template2.png" fwbase="menufw.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="1" -->
        <tr> 
          <td colspan="3"><img name="menufw_r1_c1" src="menfw/menufw_r1_c1.gif" width="246" height="61" border="0" alt=""></td>
        </tr>
        <tr> 
          <td rowspan="16"><img name="menufw_r2_c1" src="menfw/menufw_r2_c1.gif" width="1" height="443" border="0" alt=""></td>
          <td><a href="index.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r2_c2','','menfw/menufw_r2_c2_f2.gif',1);"><img name="menufw_r2_c2" src="menfw/menufw_r2_c2.gif" width="230" height="24" border="0" alt=""></a></td>
          <td rowspan="16"><img name="menufw_r2_c3" src="menfw/menufw_r2_c3.gif" width="15" height="443" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><img name="menufw_r3_c2" src="menfw/menufw_r3_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="empresa.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r4_c2','','menfw/menufw_r4_c2_f2.gif',1);"><img name="menufw_r4_c2" src="menfw/menufw_r4_c2.gif" width="230" height="25" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r5_c2" src="menfw/menufw_r5_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="vendas.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r6_c2','','menfw/menufw_r6_c2_f2.gif',1);"><img name="menufw_r6_c2" src="menfw/menufw_r6_c2.gif" width="230" height="24" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r7_c2" src="menfw/menufw_r7_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="produtos.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r8_c2','','menfw/menufw_r8_c2_f2.gif',1);"><img name="menufw_r8_c2" src="menfw/menufw_r8_c2.gif" width="230" height="25" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r9_c2" src="menfw/menufw_r9_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="downloads.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r10_c2','','menfw/menufw_r10_c2_f2.gif',1);"><img name="menufw_r10_c2" src="menfw/menufw_r10_c2.gif" width="230" height="24" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r11_c2" src="menfw/menufw_r11_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="noticias.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('menufw_r12_c2','','menfw/menufw_r12_c2_f2.gif',1);"><img name="menufw_r12_c2" src="menfw/menufw_r12_c2.gif" width="230" height="25" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r13_c2" src="menfw/menufw_r13_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="http://www.moretoinformatica.com/ftp2" target="_blank" onMouseOver="MM_swapImage('menufw_r14_c2','','menfw/menufw_r14_c2_f2.gif',1);" onMouseOut="MM_swapImgRestore()"><img name="menufw_r14_c2" src="menfw/menufw_r14_c2.gif" width="230" height="25" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td><img name="menufw_r15_c2" src="menfw/menufw_r15_c2.gif" width="230" height="7" border="0" alt=""></td>
        </tr>
        <tr> 
          <td><a href="http://suporte.domsis.com.br" target="_blank" onMouseOver="MM_swapImage('menufw_r16_c2','','menfw/menufw_r16_c2_f2.gif',1);" onMouseOut="MM_swapImgRestore()"><img name="menufw_r16_c2" src="menfw/menufw_r16_c2.gif" width="230" height="25" border="0" alt=""></a></td>
        </tr>
        <tr> 
          <td height="197"><img name="menufw_r17_c2" src="menfw/menufw_r17_c2.gif" width="230" height="197" border="0" alt=""></td>
        </tr>
      </table></td>
    <td width="528" height="27" valign="top"><p><img src="imagens/faixanoticias.gif" width="527" height="69"></p>
      </td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr> 
    <td height="434" valign="top" background="imagens/fundotabela.gif" class="unnamed2"> 
      <blockquote> 
        <p align="justify"><br>
        </p>
        <form name="form1" method="post" action="">
          <table width="431" border="0" align="center" cellpadding="1" cellspacing="0">
            <tr> 
              <td width="144" height="25"> <input name="titulo" type="text" id="titulo" value="<?=@$titulo?>"> 
              </td>
              <td width="27"><input name="buscar" id="buscar" type="image" value="buscar" src="imagens/buscar.gif" width="27" height="26"></td>
              <td width="108"><font color="#003366" size="2">Buscar por T&iacute;tulo</font></td>
              <td width="144"><div align="right"><font size="2"><a href="admin/index.php">Admin</a></font></div></td>
            </tr>
          </table>
          <? 
  		while ($linha = mysql_fetch_object($query)){
	?>
          <br>
          <table width="431" border="1" align="center" cellpadding="1" cellspacing="0">
            <tr> 
              <td width="206"><font color="#000000">Data: 
                <?=$linha->data?>
                </font></td>
              <td width="215"><font color="#000000">Sistema: 
                <?=$linha->sistema?>
                </font></td>
            </tr>
            <tr> 
              <td colspan="2"><font color="#000000"><img src="imagens/seta.gif" width="13" height="13" align="absmiddle"><font face="Georgia, Times New Roman, Times, serif"><strong> 
                <?=$linha->titulo?>
                </strong></font></font></td>
            </tr>
            <tr> 
              <td colspan="2"> <font color="#003366"> 
                <?= ereg_replace( "[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\" target=\"_blank\" rel=\"nofollow\">\\0</a>", nl2br( $linha->texto ) );?>
                </font></td>
            </tr>
          </table>
          <p>
            <? 
	  }
	  ?>
          </p>
        </form>
        <p align="justify">&nbsp; </p>
        </blockquote></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="28" valign="top" class="esquerdaefundo">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
