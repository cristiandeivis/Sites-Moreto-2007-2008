<?
	require ("inc/global.php");
?>

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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../bots/cadastra2.gif','bots/alt2.gif','bots/volt2.gif')">
<p align="center" class="unnamed1"><img src="menulogo.gif" width="623" height="68"></p>
<div align="center">
  <blockquote>&nbsp; </blockquote>
</div>
<blockquote>
  <p align="center" class="unnamed1"><font color="#336666" size="2" face="Sylfaen">Bem 
    Vindo</font><font color="#336666" size="2" face="Sylfaen"> 
    <?=$_SESSION['nome']?>
    </font><font size="2" face="Sylfaen"> </font> </p>
  <form name="form1" method="post" action="">
    <div align="center">
      <table width="42%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="19"> <p align="center"><img src="listaopcoeslogo.gif" width="545" height="76"></p></td>
        </tr>
        <tr> 
          <td height="37" bgcolor="#285B8F"> <div align="center"><a href="cadastrar_noticia.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','bots/cadast2.gif',1)"><img src="bots/cadast1.gif" name="Image6" width="71" height="23" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="37" bgcolor="#285B8F"> <div align="center"><a href="alterar_noticia.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','bots/alt2.gif',1)"><img src="bots/alt1.gif" name="Image7" width="124" height="22" border="0"></a></div></td>
        </tr>
        <tr> 
          <td height="37" bgcolor="#285B8F"> <div align="center"><a href="../index.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','bots/volt2.gif',1)"><img src="bots/volt1.gif" name="Image5" width="61" height="22" border="0"></a></div></td>
        </tr>
      </table>
    </div>
    <p align="center">&nbsp;</p>
  </form>
  <p align="center" class="unnamed1">&nbsp; </p>
</blockquote>
</body>
</html>
