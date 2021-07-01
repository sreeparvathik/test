var xmlHttp

function search(str) { 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null) 	{
		alert ("Browser does not support HTTP Request")
		return
	}     

	var url="livesearch.php"
	url=url+"?s="+str
	xmlHttp.onreadystatechange=searchstate
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}
function searchstate() 
{
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("searchvalues").innerHTML=xmlHttp.responseText
		
		//document.getElementById("hide").style.display="none"
	}
}
function searchdetails(str) { 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null) 	{
		alert ("Browser does not support HTTP Request")
		return
	}     
	
	
	var url="livedetails.php"
	url=url+"?c1="+str
	xmlHttp.onreadystatechange=detailsshow1
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}
function detailsshow1() 
{
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("detailsshow").innerHTML=xmlHttp.responseText
		
		document.getElementById("searchvalues").style.display="none"
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
    	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp = new XMLHttpRequest();
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
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
	}
	return xmlHttp;
}
