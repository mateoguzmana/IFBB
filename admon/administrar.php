<? 
include("variables.php"); 

$query="SELECT* FROM admon" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$usuario=$row["usuario"];
$contrasena=$row["contrasena"];
$Id=$row["Id"];
}

?>
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR:#F3F3F3;
	SCROLLBAR-HIGHLIGHT-COLOR: #CECECE;
	SCROLLBAR-SHADOW-COLOR: #CECECE;
	SCROLLBAR-3DLIGHT-COLOR: #F3F3F3;
	SCROLLBAR-ARROW-COLOR: #CECECE;
	SCROLLBAR-TRACK-COLOR: #CECECE;
	SCROLLBAR-DARKSHADOW-COLOR: #CECECE;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
} 
.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
*{ behavior: url(iepngfix.htc);}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.Estilo32 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.Estilo73 {font-size: 12px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>
<script LANGUAGE="JavaScript">

function Validar(form)
{
  if (form.usuario.value == "")
  { alert("Por favor ingrese un usuario"); form.usuario.focus(); return; }
 
  
  form.submit();
}

</script>
</head>

<body style="background-color: transparent">
<table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
  <tr>
    <td width="4%" height="37" align="center" class="itemselect">&nbsp;</td>
    <td width="51%" class="itemselect">ACTUALIZAR DATOS DE ACCESO </td>
    <td width="45%" align="right"><span class="dtree"><span class="Estilo45" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFF; font-size: 11px;"><span class="Estilo1" style="font-family: Arial, Helvetica, sans-serif">&nbsp;</span><span class="Estilo1" style="font-family: Arial, Helvetica, sans-serif">&nbsp;</span><span class="Estilo45" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFF; font-size: 11px;"><span class="Estilo1" style="font-family: Arial, Helvetica, sans-serif">&nbsp;</span></span></span></span></td>
  </tr>
</table>
<br>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="408" align="left" valign="middle" bgcolor="#F7F7F7"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
      <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#E6E6E6">
        <td height="243" bordercolor="#F2F2F2" bgcolor="#F2F2F2"><form action="administrar2.php" method="post" enctype="multipart/form-data" name="form" id="form">
          <br>
          <table width="90%" border="0" align="center">
            <tr>
              <td height="138"><table width="70%" border="0" align="center">
                <tr class="Estilo73">
                  <td width="180" height="5" valign="top"><span class="Estilo97">Login</span></td>
                  <td width="403" height="5" valign="top"><span class="Estilo96">
                    <input name="usuario" type="text" class="TextField2" id="usuario" value="<?=$usuario?>" size="20">
                    </span></td>
                  </tr>
                </table>
                <hr size="1">
                <table width="70%" border="0" align="center">
                  <tr class="Estilo73">
                    <td width="180" height="5" valign="top"><span class="Estilo97">Password</span></td>
                    <td width="403" height="5" valign="top"><span class="Estilo96">
                      <input name="contrasena" type="text" class="TextField2" id="contrasena" value="<?=$contrasena?>" size="20">
                      <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                      </span></td>
                    </tr>
                  </table>
                <hr size="1"></td>
              </tr>
            </table>
          <div align="center">
            <table width="90%" border="0" align="center">
              <tr class="Estilo73">
                <td width="294" height="5" valign="top">&nbsp;</td>
                <td width="508" height="5" valign="top"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField2" value="Actualizar"></td>
                </tr>
              </table>
            </div>
          </form>
          <p><br>
          </p></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>

