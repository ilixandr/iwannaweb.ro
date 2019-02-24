// Ver 0.9.1 05/09/2006
//////////////////////////////////////////////////////////////
//
//	Copyright 2006 SopCast
//	Free for public non-commercial use and modification
//	as long as this header is kept intact and unmodified.
//	Please see http://www.sopcast.com for more information
//	or email bug@sopcast.org with questions/suggestions.
//
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//////////	 SopCast WebPlayer 	 //////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////


function InitPlayer()
{			
	if (detectPlugin()) 
	{
		//document.getElementById('SopPlayer').SetAuthUrl("https://auth.sopcast.com:8443/getauthitems");
		//document.getElementById('SopPlayer').SetChannelListUrl("http://channel.sopcast.com/gchlxml");

		document.getElementById('SopPlayer').InitPlayer();
	}	
}
		
function OnPlay(channelUrl, channelName)
{
	if (detectPlugin()) 
	{
		if(document.getElementById('SopPlayer').GetState(1) == 0) //
		{
			alert("Player hasn't been initialized!");
			return;
		}
		document.getElementById('SopPlayer').SetChannelName(channelName);	
		document.getElementById('SopPlayer').SetSopAddress(channelUrl);
		document.getElementById('SopPlayer').Play();
	}
	else
	{
		alert("Please install SopPlayer first.");
	}
}
		
function OnPause()
{
	if (detectPlugin()) 
	{
		document.getElementById('SopPlayer').Pause();
	}
}
		
function OnRestart()
{
	if (detectPlugin()) 
	{
		document.getElementById('SopPlayer').RestartPlayer();
	}
}
						
function OnStop()
{
	if (detectPlugin()) 
	{
		document.getElementById('SopPlayer').Stop();
	}
}

var accountSet = 0;
function SetAccount(username, password)
{
	if (detectPlugin()) 
	{
		accountSet = 1;
		document.getElementById('SopPlayer').SetUserAndPasswd(username, password);
	}
}

var autoChannelAddr;
var autoChannelName;
var started = 0;
var autoTimeID = 0;

function AutoPlay(channelAddress, channelName)
{

	autoChannelAddr = channelAddress;
	autoChannelName = channelName;
	if (detectPlugin()) 
	{
		autoTimeID = setInterval("StartPlayer();", 1000);
	}
} 	


function StartPlayer()
{
	if(started == 0)
	{
		if(document.getElementById('SopPlayer').GetState(1) == 1)
		{
			started = 1;
			OnPlay(autoChannelAddr, autoChannelName);
			clearInterval(autoTimeID);
		}		
	}
}


var getted = 0;
var timeout = 0;
var intID = 0;

function GetChListLoop()
{	
	if(getted == 0 && timeout < 100000)
	{
		if(document.getElementById('SopPlayer').GetState(1) == 1)
		{				
			var chListPub = document.getElementById('SopPlayer').GetChannelList(0);			
			if(chListPub.length != 0)
			{				
				getted = 1;
				var chListSub = "";
				if(accountSet == 1)
				{
					
					chListSub = document.getElementById('SopPlayer').GetSubChannelList(0);					
				}
				document.getElementById('chlist').innerHTML = ParseXMLChList(chListPub, chListSub);
			}
		}
		
		timeout += 1000;		
	}
	else
	{
		if(timeout >= 100000)
		{
			alert("Can not initialize ESopCast!");
		}
		else
		{
			//alert("Getted");
		}
		
		clearInterval(intID);
	}	
}



function OnGetChannelList()
{	
	
	if (detectPlugin()) 
	{		
		getted = 0;
		timeout = 0;		
		document.getElementById('chlist').innerHTML = "<br>Loading channel list...</br>";
		intID = setInterval("GetChListLoop();", 1000);	
	}
	else
	{
		var xmlObj = null;

		if(window.XMLHttpRequest){
			xmlObj = new XMLHttpRequest();
		} else if(window.ActiveXObject){
			xmlObj = new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			return;
		}

		xmlObj.onreadystatechange = function()
		{
			if(xmlObj.readyState == 4){
				document.getElementById('chlist').innerHTML = ParseXMLChList(xmlObj.responseText, "");
			}
		}

		xmlObj.open ('GET', "http://www.sopcast.com/chlist.xml", true);
		xmlObj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlObj.send ('');
	}	
}

// You can change the display format by modifying this function		
function ParseXMLChList(xmlList, xmlListSub)
{	
	
	var iColorIndex = 0;

	var result = new String();
	result = "<table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"eeeeee\">" + 
		"<tr align=\"center\" bgcolor=\"#BBDC49\" height=\"24\">" +
		"<td width=\"12%\"><strong>ID</strong></td>" +			// channel id
		"<td width=\"*\"><strong>Channel Name</strong></td>" +		// channel Name 
		"<td width=\"20%\"><strong>Kbps</strong></td>" + 		// Kbps
		"<td width=\"12%\"><strong>Ratio</strong></td></tr>";		// Users
for(var loop = 0; loop < 2; loop ++)
{	
	var xmltag;
	if(loop == 0) // subcribe channel
	{
		if(accountSet == 0 || xmlListSub == "")
		{
			continue;
		}
		
		xmltag = new REXML(xmlListSub);
	}
	else
	{
		xmltag = new REXML(xmlList);
	}
	//Number of groups
	
	var iGroupNumber = xmltag.rootElement.childElements.length;
	
	for(var i = 0; i < iGroupNumber; i ++)
	{
		// the row for channel group
		// BEGIN group
		//result += "<tr>";
				
		//group elements
		var groupTag = xmltag.rootElement.childElements[i];				
					
		// loop for channels in each group
		// select groups you interested

		var iChannelNumber = groupTag.childElements.length;
		
		var bgcolor="";
		for(var j = 0; j < iChannelNumber; j ++)
		{
			// BEGIN CHANNEL
								
			// channel tag
			var channelTag = groupTag.childElements[j];
							
			if(channelTag.type != "element")
			{
				continue;	
			}
			
			if(channelTag.childElement("status").text == "2")				
			{
				if(iColorIndex++ % 2==0)
				{
					bgcolor="#F0e0F0";
				}
				else
				{
					bgcolor="#FFFFFF";
				}
				result += "<tr height=\"22\" align=\"center\" bgcolor=\""+bgcolor+"\">";
	
				//id
				result += "<td>";
				result += channelTag.attribute ("id");
				result += "</td>";
											
				//link and name
				result += "<td align='left'>";
				result += "<a href='#' onclick=\"OnPlay('";					
				//channel sop url
				var sopaddr = channelTag.childElement("sop_address");					
				result += sopaddr.childElement("item").text;
				result += "','";					
				//channel name in ocx
				result += channelTag.childElement("name").text;
				result += "')\">";					
				//channel name in web
				result += channelTag.childElement("name").text;
				result += "</a>";
				result += "</td>";
						
				//bps
				result +="<td>";
				result += channelTag.childElement("kbps").text;
				result +="</td>";
						
				//users
				result +="<td>";
				result +=channelTag.childElement("user_count").text;
				result +="</td>";
						
	
				result += "</tr>";
			}
		}
					
	}
}
	result+="</table>";	

	return result;

}
		
function GetChild(parentNode, name)
{
	for(var i = 0; i < parentNode.contents.length; i ++)
	{
		if(parentNode.contents[i].name == name)
		{
			return parentNode.contents[i];						
		}
	}			
}

var noinstallerr=0;
function detectPlugin()
{
    var pVersion;
    try
    {
        pVersion = document.getElementById('SopPlayer').GetVersion();  
	return true;
    }
    catch (e)
    {
	if (noinstallerr==0) {
	alert("You haven't installed SopCast yet. \nPlease click \"OK\", scroll to the bottom of the page and click 'SopPlayer' to download it from the Internet.");
	}
	noinstallerr=1;
        return false;
    }
}















//////     JSXML XML Tools - REXML                /////////////
//////     Regular Expression-based XML parser    /////////////
//////     Ver 1.2 Jun 18 2001                    /////////////
//////     Copyright 2000 Peter Tracey            /////////////
//////     http://jsxml.homestead.com/            /////////////

function REXML(XML) {
	this.XML = XML;

	this.rootElement = null;

	this.parse = REXML_parse;
	if (this.XML && this.XML != "") this.parse();
}

	function REXML_parse() {
		var reTag = new RegExp("<([^>/ ]*)([^>]*)>","g"); // matches that tag name $1 and attribute string $2
		var reTagText = new RegExp("<([^>/ ]*)([^>]*)>([^<]*)","g"); // matches tag name $1, attribute string $2, and text $3
		var strType = "";
		var strTag = "";
		var strText = "";
		var strAttributes = "";
		var strOpen = "";
		var strClose = "";
		var iElements = 0;
		var xmleLastElement = null;
		if (this.XML.length == 0) return;
		var arrElementsUnparsed = this.XML.match(reTag);
		var arrElementsUnparsedText = this.XML.match(reTagText);
		var i=0;
		if (arrElementsUnparsed[0].replace(reTag, "$1") == "?xml") i++;

		for (; i<arrElementsUnparsed.length; i++) {
			strTag = arrElementsUnparsed[i].replace(reTag,"$1");
			strAttributes = arrElementsUnparsed[i].replace(reTag,"$2");
			strText = arrElementsUnparsedText[i].replace(reTagText,"$3").replace(/[\r\n\t ]+/g, " "); // remove white space
			strClose = "";
			if (strTag.indexOf("![CDATA[") == 0) {
				strOpen = "<![CDATA[";
				strClose = "]]>";
				strType = "cdata";
			} else if (strTag.indexOf("!--") == 0) {
				strOpen = "<!--";
				strClose = "-->";
				strType = "comment";
			} else if (strTag.indexOf("?") == 0) {
				strOpen = "<?";
				strClose = "?>";
				strType = "pi";
			} else strType = "element";
			if (strClose != "") {
				strText = "";
				if (arrElementsUnparsedText[i].indexOf(strClose) > -1) strText = arrElementsUnparsedText[i];
				else {
					for (; i<arrElementsUnparsed.length && arrElementsUnparsedText[i].indexOf(strClose) == -1; i++) {
						strText += arrElementsUnparsedText[i];
					}
					strText += arrElementsUnparsedText[i];
				}
				if (strText.substring(strOpen.length, strText.indexOf(strClose)) != "")	{
					xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement(strType, "","",xmleLastElement,strText.substring(strOpen.length, strText.indexOf(strClose)));
					if (strType == "cdata") xmleLastElement.text += strText.substring(strOpen.length, strText.indexOf(strClose));
				}
				if (strText.indexOf(strClose)+ strClose.length < strText.length) {
					xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement("text", "","",xmleLastElement,strText.substring(strText.indexOf(strClose)+ strClose.length, strText.length));
					if (strType == "cdata") xmleLastElement.text += strText.substring(strText.indexOf(strClose)+ strClose.length, strText.length);
				}
				continue;
			}
			if (strText.replace(/ */, "") == "") strText = "";
			if (arrElementsUnparsed[i].substring(1,2) != "/") {
				if (iElements == 0) {
					xmleLastElement = this.rootElement = new REXML_XMLElement(strType, strTag,strAttributes,null,strText);
					iElements++;
					if (strText != "") xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement("text", "","",xmleLastElement,strText);
				} else if (arrElementsUnparsed[i].substring(arrElementsUnparsed[i].length-2,arrElementsUnparsed[i].length-1) != "/") {
					xmleLastElement = xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement(strType, strTag,strAttributes,xmleLastElement,strText);
					iElements++;
					if (strText != "") xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement("text", "","",xmleLastElement,strText);
				} else {
					xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement(strType, strTag,strAttributes,xmleLastElement,strText);
					if (strText != "") xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement("text", "","",xmleLastElement,strText);
				}
			} else {
				xmleLastElement = xmleLastElement.parentElement;
				iElements--;
				if (xmleLastElement && strText != "") {
					xmleLastElement.text += strText;
					xmleLastElement.childElements[xmleLastElement.childElements.length] = new REXML_XMLElement("text", "","",xmleLastElement,strText);
				}
			}
		}
	}

	function REXML_XMLElement(strType, strName, strAttributes, xmlParent, strText) {
		this.type = strType;
		this.name = strName;
		this.attributeString = strAttributes;
		this.attributes = null;
		this.childElements = new Array();
		this.parentElement = xmlParent;
		this.text = strText; // text of element

		this.getText = REXML_XMLElement_getText; // text of element and child elements
		this.childElement = REXML_XMLElement_childElement;
		this.attribute = REXML_XMLElement_attribute;
	}

		function REXML_XMLElement_getText() {
			if (this.type == "text" || this.type == "cdata") {
				return this.text;
			} else if (this.childElements.length) {
				var L = "";
				for (var i=0; i<this.childElements.length; i++) {
					L += this.childElements[i].getText();
				}
				return L;
			} else return "";
		}
		
		function REXML_XMLElement_childElement(strElementName) {
			for (var i=0; i<this.childElements.length; i++) if (this.childElements[i].name == strElementName) return this.childElements[i];
			return null;
		}

		function REXML_XMLElement_attribute(strAttributeName) {
			if (!this.attributes) {
				var reAttributes = new RegExp(" ([^= ]*)=","g"); // matches attributes
				if (this.attributeString.match(reAttributes) && this.attributeString.match(reAttributes).length) {
					var arrAttributes = this.attributeString.match(reAttributes);
					if (!arrAttributes.length) arrAttributes = null;
					else for (var j=0; j<arrAttributes.length; j++) {
						arrAttributes[j] = new Array(
							(arrAttributes[j]+"").replace(/[= ]/g,""),
							ParseAttribute(this.attributeString, (arrAttributes[j]+"").replace(/[= ]/g,""))
										);
					}
					this.attributes = arrAttributes;
				}
			}
			if (this.attributes) for (var i=0; i<this.attributes.length; i++) if (this.attributes[i][0] == strAttributeName) return this.attributes[i][1];
			return "";
		}

function ParseAttribute(str,Attribute) {
	var str = str +  ">";
	
	if (str.indexOf(Attribute + "='")>-1) var Attr = new RegExp(".*" + Attribute + "='([^']*)'.*>");
	else if (str.indexOf(Attribute + '="')>-1) var Attr = new RegExp(".*" + Attribute + '="([^"]*)"(.|\n|\r)*>');

	return str.replace(Attr, "$1");
}
