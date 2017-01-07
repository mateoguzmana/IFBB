<? 
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("variables.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=$Title?></title>
<style type="text/css">
 
html, body {
	margin:0px;
	overflow:hidden; /* hide browser's main scrollbar */
	height:100%; /* make sure we'll use 100% of the page's height */
}

#main_container {
	width:100%; /* make sure we'll use 100% of page's width */
	background-color:#FFFFFF; /* DO NOT REMOVE THIS; or you'll have issue w/ the scrollbar, when the mouse pointer is on a white space */
}
/*
 * CSS Document
 * Written by Ryan Yonzon
 * http://ryan.rawswift.com/
 */
 
html, body {
	margin:0px; /* FF hack: or we'll have double scrollbar showing on the browser */
	overflow:hidden; /* hide browser's main scrollbar */
}

#main_container {
	width:100%;
	background-color:#FFFFFF; /* DO NOT REMOVE THIS; or you'll have issue w/ the scrollbar, when the mouse pointer is on a white space */
	
	height:100%;	/* this will make sure that the height will extend at the bottom */
	overflow:auto;	/* will have a scrollbar at our content containier */
	position:absolute; /* container div must be absolute, for our fixed bar to work */
}

	#main_container .content_wrapper {
		margin-left:auto;
		margin-right:auto;
		width:100%;
	}
	
	#main_container .spacer { /* spacer w/ fixed height; give space to the content and fixed bar */
		height:45px;
	}

#nav_menu_wrapper { /* this will ba used as a wrapper for the nav_menu so we can center it (nav_menu). especially for IE */
	height:45px; /* fix bar's height */
	width:100%; /* use 100% of width */
	/* the code below will PUT the bar at the bottom */	
	bottom:0px;
	position:absolute;
	/* hide scrollbar for this wrapper */
	overflow:hidden;
	left: 7px;
}

	#nav_menu_wrapper .nav_menu { /* the menu itself */
		height:45px; /* fix bar's height */
		width:100%; /* fixed width */

		/* center this div */
		margin-left:auto;
		margin-right:auto;	
		
		/* add effect */
		background-color:#EEEEEE;
		border:#666666 solid 1px;
	}
	
	/*
	 * menu links and link effects
	 */
		#nav_menu_wrapper .nav_menu ul {
	margin-top:5px;
	list-style:none;
	text-align: right;
		}
		
		#nav_menu_wrapper .nav_menu li {
			display:inline;
		}
		
		#nav_menu_wrapper .nav_menu li a {
			padding-top:3px;
			padding-bottom:5px;
			padding-left:9px;			
			padding-right:9px;
		}
		
		#nav_menu_wrapper .nav_menu a:link, #nav_menu_wrapper .nav_menu a:visited {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			color:#333333;
			text-decoration:none;
			background-color:#EEEEEE;
		}

		#nav_menu_wrapper .nav_menu a:hover {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			color:#FFFFFF;
			text-decoration:none;
			background-color:#0099FF;
		}

</style>
<style type="text/css">
<!--
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
}
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
	color: #006;
	text-align: left;
}
-->
    </style>
</head>
<body>

<!-- main container starts here -->
<!-- main container ends here -->    

<!-- bottom navigation menu starts here -->
<div id="nav_menu_wrapper">
        <div class="nav_menu">
          <table width="100%" border="0">
            <tr>
              <td width="3%">&nbsp;</td>
              <td width="72%"><img src="Images/foot.png" alt="" width="220" height="30" usemap="#Map" /></td>
              <td width="25%" align="right"><div align="center" class="Estilo96">Powered by <a href="http://www.webevolution.com.co/" target="_blank">WEB EVOLUTION</a> Copyright © 2014</div></td>
            </tr>
          </table>
<ul>
  
<li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
          </ul>
            
</div>
</div>

<table width="100%" height="57" border="0" cellpadding="0" cellspacing="0" background="Images/bg-header.jpg">
  <tr>
    <td height="57" align="center" valign="top" background="">&nbsp;</td>
    <td valign="middle" background=""><img src="Images/logos.png" alt="" height="45" /></td>
    <td valign="top"><table width="100%"  height="57"border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="bottom" class="Estilo1" style="font-family: Arial, Helvetica, sans-serif"><span class="Estilo1" style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bienvenido(a) - <span style="color: #AEAEFF">
          Administrador 
          </span>&nbsp;&nbsp;<br />
          <br />
        </span></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="98%" height="87%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200" height="98%" valign="top" bordercolor="#FFFFFF" bgcolor="#EBEAEC"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <tr>
        <td width="175" height="19" align="left" class="itemselect">&nbsp;</td>
      </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
        <tr>
          <td height="19" align="left"><div class="dtree">
          
<? 
include("menu-tree.php");
?>
          </div></td>
        </tr>
      </table></td>
    <td width="1" align="left" bordercolor="#FFFFFF" background="Images/line-separa.jpg" style="background-repeat:repeat-y" ></td>
    <td height="100%" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    
<iframe src="content.html" name="contenido" width="99%" height="95%" scrolling="Yes" frameborder="No" id="contenido" allowtransparency="true"></iframe>
    
    </td>
  </tr>
</table>
<!-- bottom navigation menu ends here -->    

<map name="Map" id="Map">
  <area shape="rect" coords="4,3,89,30" href="zona.php" target="_parent" alt="" />
  <area shape="rect" coords="100,4,208,30" href="salir.php" target="_parent" alt="" />
</map>
</body>
</html>