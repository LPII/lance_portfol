<!--
/*******************************************************************************
	OLDIE - or Old IE. A script that finds the version of IE you're using,
	and redirects if lower than the set parameter.
	big thanks to ryan at daobydesign this is one of my favorite scipts lolol
*******************************************************************************/
var browser		= navigator.appName
var ver			= navigator.appVersion
var thestart	= parseFloat(ver.indexOf("MSIE"))+1 //This finds the start of the MS version string.
var brow_ver	= parseFloat(ver.substring(thestart+4,thestart+7)) //This cuts out the bit of string we need.

if ((browser=="Microsoft Internet Explorer") && (brow_ver <10)) //By default the min. IE ver is set to 6. Change as desired.
	{
	window.location="http://lancegd.com/wp-content/themes/BLANK-Theme/js/not_support.html"; //URL to redirect to.
	}
//-->