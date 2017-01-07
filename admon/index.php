<?
$Error =$_GET['error'];
?>
<? include("title.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<title><?=$Title?></title>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
BODY {
	MARGIN: 0px;
	background-color: #FFFFFF;
}
A:link {
	COLOR: #999999; TEXT-DECORATION: none
}
A:visited {
	COLOR: #999999; TEXT-DECORATION: none
}
A:hover {
	COLOR: #FF0000; TEXT-DECORATION: underline}
A:active {
	COLOR: #999999; TEXT-DECORATION: none
}
.style1 {
	FONT-SIZE: 10px; COLOR: #999999; FONT-FAMILY: Arial, Helvetica, sans-serif
}
.style4 {
	FONT-SIZE: 10px; FONT-FAMILY: Arial, Helvetica, sans-serif
}
.style5 {
	COLOR: #999999
}
H1 {
	Z-INDEX: 1; VISIBILITY: hidden; WIDTH: 300px; POSITION: absolute
}
H2 {
	Z-INDEX: 1;
	VISIBILITY: hidden;
	WIDTH: 543px;
	POSITION: absolute;
	left: 375px;
	top: 637px;
}
.TextField {
background-color: #EBEBEB;
color: #FFFFFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField2 {
background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;

}
.Estilo36 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333333;
}
.Estilo39 {font-size: 12px}
.Estilo40 {color: #666666}
.Estilo41 {
	color: #FFFFFF;
	font-size: 1px;
}
.Estilo42 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #333333; }
.Estilo85 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo91 {	color: #FF0000;
	font-weight: bold;
}
.Estilo93 {	color: #FF0000;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.TextField21 {background-color: #DADADA;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
</STYLE>

<script LANGUAGE="JavaScript">

function Validar(form)
{
  if (form.login.value == "")
  { alert("Por favor ingrese su Login"); form.login.focus(); return; }
 
  if (form.password.value == "")
  { alert("Por favor ingrese su Password"); form.password.focus(); return; }
   
  form.submit();
}

</script>


<SCRIPT language=JavaScript type=text/JavaScript>
<!--




function MM_preloadImages() { //v3.0
  var d=document; if(d.Images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</SCRIPT>




</HEAD>
<BODY>
<DIV align=center>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=center align=middle>
      <DIV align=center>
      <TABLE height=420 cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD>
            <DIV align=center>
              <TABLE width="100%" height=591 
              border=0 cellPadding=0 cellSpacing=0>
              <TBODY>
              <TR>
                <TD width="14%" height="591" align=left vAlign=top style="background-repeat:repeat-y; background-position: top right"><br>
                <br>
                <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br></TD>
                <TD width="71%" align=right vAlign=middle><div align="justify">
                  <table width="558" border="1" align="center" bordercolor="#CCCCCC" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="154" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><form name="form1" method="post" action="logueo.php">
                          <div align="center"> <span class="Estilo93">
                            <? 
if ($Error == "a")
{
echo "El usuario ingresado no existe";
}

?>
                            </span><br>
                          </div>
                        <table width="526" border="0" align="center" bgcolor="#F3F3F3">
                            <tr>
                              <td width="227" rowspan="5" bgcolor="#FFFFFF"><div align="center"><img src="Images/logo-index.png" width="200"></div></td>
                              <td width="10" rowspan="5">&nbsp;</td>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="81" class="Estilo85">Usuario:</td>
                              <td width="199"><input name="login" type="text" class="TextField21" id="login2" size="20"></td>
                            </tr>
                            <tr>
                              <td height="30" valign="top" class="Estilo85">Password:</td>
                              <td><input name="password" type="password" class="TextField21" id="password" size="20"></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="Submit" type="button" onClick=Validar(this.form) class="TextField2" value="Ingresar al sistema"></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                          </table>
                      </form></td>
                    </tr>
                  </table>
                </div></TD>
                <TD width="15%" align=right vAlign=top style="background-repeat:repeat-y; background-position: top left"><br>
           </TD>
              </TR>
              </TBODY></TABLE>
            </DIV></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></DIV>

</BODY></HTML>
