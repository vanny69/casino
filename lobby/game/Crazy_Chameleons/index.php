<?
Error_Reporting(E_ALL & ~E_NOTICE);
unset($l); 
session_start();
session_register($l);
if(!isset($l)){ 
header("Location: ../../login.php"); 
exit; 
}
?>
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=windows-1251">
<title>������� ������� Crazy Chameleons</title>
</HEAD>
<BODY bgcolor="#0B2A40" leftmargin="0" marginwidth="0" marginheight="0" topmargin="0">
<center>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
 WIDTH="100%" HEIGHT="100%" id="index">
<PARAM NAME="movie" VALUE="cc.swf">
<PARAM NAME="quality" VALUE="high">
<PARAM NAME="bgcolor" VALUE="#000000">
<PARAM NAME="menu" VALUE="false">
<EMBED src="cc.swf" quality=high bgcolor="#000000" WIDTH="100%" HEIGHT="100%" NAME="index" TYPE="application/x-shockwave-flash" PLUGINSPAGE="https://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>
</center>
</BODY></HTML>
