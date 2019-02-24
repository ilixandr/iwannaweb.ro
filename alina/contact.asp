<%@ Language=VBScript%>
<!DOCTYPE html>
<%

mes = ""
codprodus = ""
IsSuccess = false

sTo = "contact@iwannaweb.ro"
sFrom = Trim(Request.Form("E-mail"))
sSubject = Trim(Request.Form("Subiect"))
sMailServer = "127.0.0.1"
sBody = Trim(Request.Form("Mesaj"))

if Request("__action")="SendEMail" then
	SendEMail()	
end if

Sub SendEMail()

	Set objMail = Server.CreateObject("CDO.Message")
	Set objConf = Server.CreateObject("CDO.Configuration") 
	Set objFields = objConf.Fields
	
	With objFields
		.Item("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
		.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver")  = sMailServer
		.Item("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 10 
		.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
		.Update 
	End With

	With objMail
		Set .Configuration = objConf
		.From = sFrom
		.To = sTo
		.Subject = sSubject
		.TextBody = sBody
	End With
    
    Err.Clear 
	on error resume next

    objMail.Send
	if len(Err.Description) = 0 then
        mes = " Mesajul dumneavoastra a fost trimis la " + sTo
        mes = mes + ". Va multumim! "
        IsSuccess = true
    else
		mes = " Toate campurile sunt obligatorii! Mesajul nu a fost trimis..."
	end if
	codprodus = Request.QueryString("cod")
	Set objFields = Nothing
	Set objConf = Nothing
	Set objMail = Nothing
End sub

Sub Alert(html)
	if IsSuccess then
		Response.Write "<div id='container'>Success:" & html & "</div>"
	else
		Response.Write "<div id='container'>Failure:" & html & "</div>"
	end if
End Sub
%>
<html lang="ro">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>alina frandes | bijuterii handmade</title>
    <link href="css/secondary.css" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css" />
	<!-- start GOOEYMENU from DynamicDrive !-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="js/gooeymenu.js">
	/**************************************************************************
	*       Gooey Menu Script (c) Dynamic Drive (www.dynamicdrive.com)        *
	*             This notice MUST stay intact for legal use                  *
	*    Visit http://www.dynamicdrive.com/ for this script and 100s more.    *
	***************************************************************************/
	</script>
	<link rel="stylesheet" type="text/css" href="css/gooeymenu.css" />
	<!-- end GOOEYMENU from DynamicDrive !-->
</head>
<body>
	<!-- start header !-->    
	<div id="header">
		<div class="logo-up">
			<p class="p-helper">			
				Bijuterii handmade de Alina FRANDES
			</p>
			<div class="social">
				<br /><br /><br /><br /><br /><br />
				<a href="http://facebook.com/AlinaFrandesHandmade" target="_blank"><img src="images/fb_65_65.png" alt="" /></a>
				<a href="http://twitter.com/alina_frandes" target="_blank"><img src="images/tw_59_59.png" alt=""></a>
				<a href="http://google.com" target="_blank"><img src="images/g_65_65.png" alt=""></a>
				<br>
				<b>&nbsp;&nbsp;&nbsp;Telefon: 0754 970 575</b>
			</div>
		</div>
		<hr>
		<div class="meniu">
			<ul id="gooeymenu3" class="underlinemenu">
				<li><a href="index.html">handmade</a></li>
				<li><a href="bijuterii.html">bijuterii</a></li>
				<li><a href="costum-de-baie.html">costume de baie</a></li>
				<li><a href="accesorii-copii.html">accesorii pt copii</a></li>
				<li><a href="cutii-pictate.html">cutii pictate</a></li>
				<li><a href="contact.asp" class="selected">contact</a></li>
			</ul>
			<script>
				gooeymenu.setup({id:'gooeymenu3', fxtime:250})
			</script>
		</div>	
		<hr>
	</div>
	<!-- end header !-->
    <div id="content">
		<div class="c-2-col">
			<h1 class="ra">Contact Alina Frandes:</h1>
			<!-- alert here!-->
			<% if len(mes) > 0 then	Alert(mes) end if %>
			<form id="form1" action="contact.asp?__action=SendEMail&tp=<%=rnd(1)*100*timer%>" method="POST">
				<label for="E-mail"> E-mail:</label></br>
				<input type="text" class="validate e-mail required input_field" name="E-mail" id="E-mail" value="<%Response.Write(sEmail)%>"/>
				<br>			
				<label for="Cod produs">Cod produs: <%Response.Write "<em>(" & Request.QueryString("Subiect") & ")</em>"%></label></br>
				<input type="text" class="validate-subject required input_field" name="Subiect" id="Subiect" value="<%Response.Write(sSubject)%>" />		
				<br>				
				<label for="Mesaj">Nume, num&#259;r de telefon &#351;i adres&#259;:</label></br> 
				<textarea id="text" name="Mesaj" rows="0" cols="0" class="required"><% Response.Write(sBody) %></textarea>
				<br>
				<input type="submit" value="Trimite" id="submit" name="submit" class="submit_btn float_l" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
			</form>		
		</div>
		<div class="c-2-col">	
			<h1 class="smallh1">Produse handmade personalizate:</h1>
			<h2 class="smallh2">Bijuterii handmade, costume de baie cro&#351;etate</h2>
			<h2 class="smallh2">Accesorii pentru copii, hainu&#355;e cro&#351;etate</h2>
			<h2 class="smallh2">Cutii pictate, decora&#355;iuni handmade</h2>
			<h3 class="smallh3 ">handmade by Alina Frande&#351;</h3>
			<a class="fba" href="http://facebook.com/AlinaFrandesHandmade" target="_blank">
				<img class="valign" src="images/fb_35.png" alt=""/>
				facebook.com/AlinaFrandesHandmade
			</a></br>
			<a class="fba">
				<img class="valign" src="images/phone_35.png" alt=""/>
				Telefon:  (+40) 0754 970 575
			</a>
			<p>Pentru a comanda, v&#259; rog s&#259; completa&#355;i formularul din st&#226;nga cu detaliile cerute: o adres&#259; de e-mail unde 
			s&#259; v&#259; pot contacta, codul produsului dorit (dac&#259; a&#355;i folosit butonul "Cump&#259;r&#259;" el va fi precizat &#238;ntre 
			paranteze) &#351;i numele, num&#259;rul de telefon &#351;i adresa pentru eventuala expediere a produsului prin curier sau po&#351;t&#259;.
			Deasemenea, &#238;mi pute&#355;i l&#259;sa orice alt fel de mesaj.</p>
			<p>Modalit&#259;&#355;i de a comanda:</p>
			<ul>
				<li>
					Dac&#259; sunte&#355;i din Bistri&#355;a, putem stabili o &#238;nt&#226;lnire pentru a intra &#238;n posesia produsului dorit.
				</li>
				<li>
					Pentru persoanele din afara ora&#351;ului Bistri&#355;a, exist&#259; dou&#259; posibilit&#259;&#355;i de livrare a produsului:
					<ol>
						<li>prin colet po&#351;tal, la Po&#351;ta Rom&#226;n&#259;, cu ramburs, &#238;n valoare de <b>8 LEI</b>.</li>
						<li>prin curier rapid, cu ramburs, &#238;n valoare de <b>20 de LEI</b>.</li>
					</ol>
				</li>
			</ul>
		</div>
	</div>
	<!-- start footer !-->
	<div id="footer">
		<div class="main">
    		<div class="aligncenter"> 
				<span>
					Copyright &copy; 2014
					<a href="#"> Alina Frandes</a> | www.alinafrandes.ro
				</span> 
				WebDesign 
				<a target="_blank" href="http://www.iwannaweb.ro/">iwannaweb.ro</a> 
			</div>
	 	 </div>
	</div>
	<!-- end footer !-->
</body>
</html>
