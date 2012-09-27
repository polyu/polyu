<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="Javascript">
var resolution=32;
var brightness=48;
var contrast=3;
var mode=2;
var flip=0;
var fps=0;


function Click(){ window.event.returnValue=false;}

var g_ptzcmd=-1;

function OnBtnRefresh()
{
	window.status=" ";
	document.getElementById("imgDisplay").src = "httpmodel.php";	
	window.status=" ";
}

function OnImgLoad()
{
	window.status=" ";
	setTimeout("OnBtnRefresh()",100);
	setTimeout("OnImgLoad()",100);	
}

function OnImgError()
{
	setTimeout("OnBtnRefresh()",1000*5);
	return true;
}

function body_onload()
{
	
	
	var obj =document.getElementById("imgDisplay");
	if(resolution==8){
		obj.width=480;
		obj.Height=360;
	}
	else if(resolution==32){
		obj.width=480;
		obj.Height=360;
	}	
	else{
		obj.width=480;
		obj.Height=360;
	}	
	PlayImg();
}

function GetXhrObject()
{
	var xmlHttp=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
    }
    catch (e)
    {
        // Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			 try
			 {
				 xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			 }
			 catch (e)
			 {
				 alert('No AJAX') ; 
			 }
		}
    }
	return xmlHttp;	
}
function Playmage(imgsrc)
{

	var xhrObject = GetXhrObject();
	if(xhrObject==null)
	{
		OnImgLoad();
	}
	else
	{
		xhrObject.onreadystatechange=function event()
		{
			
		   if(xhrObject.readyState==4)
		   {
				if(xhrObject.status==200 || xhrObject.status == 304 )
				{
					var objl = document.getElementById("imgDisplay");
					objl.src=imgsrc;
					window.status=" ";
					window.setTimeout('PlayImg();',200);
				}
				else
				{
					window.setTimeout('PlayImg();',2000);
				}
				
		   }
		}
		xhrObject.open("get",imgsrc,true);
		xhrObject.send(null);
		window.status=" ";
	}
}

function PlayImg()
{
	Playmage("httpmodel.php");	
}

</script>
</head>
<body onLoad="body_onload()">

<table width="100%">
    <tr><td align="center" colspan="3"><img src="" alt="snapshot" id="imgDisplay" name="imgDisplay" width="480" height="360"/></td></tr>
   
</table>
</center>
</body>
</html>
