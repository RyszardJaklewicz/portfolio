  var DHTML = 0, DOM = 0, MS = 0, NS = 0, OP = 0; NS6=0;
  var over="";
  var zuordnung=new Array();
  var zuordnung_pop=new Array();
  var opa=new Array();
  var opa_pop;
  var opacity=new Array();
  var opacity_pop=10;
  var pressed=false;
  var x;
  var y;
  var maxz=1;
  var globalid="";
  

  if (window.opera) {
     OP = 1;
  }

  if(document.getElementById) {
    DHTML = 1;
    DOM = 1;
  }

  if(document.all && !OP) {
    DHTML = 1;
    MS = 1;
  }

  if(document.layers && !OP) {
    DHTML = 1;
    NS = 1;
  }

  if (!OP && !document.all && !NS){
   NS6=1;
  }

  if(MS || OP){
    document.onmousemove=handleMove;
    document.onmousedown=mouseDown;
    document.onmouseup=mouseUp;
  }
  if(NS6){
    document.captureEvents(Event.MOUSEMOVE);
    document.captureEvents(Event.MOUSEDOWN);
    document.captureEvents(Event.MOUSEUP);
    document.onmousemove=handleMoveNS;
    document.onmousedown=mouseDownNS;
    document.onmouseup=mouseUp;
  }

  function mouseDown(){
    pressed=true;
    if (over!=""){
      x=window.event.clientX-parseInt(document.getElementById(over).style.left);
      y=window.event.clientY-parseInt(document.getElementById(over).style.top);
      document.getElementById(over).style.zIndex=maxz;
      maxz++;
    }
  }

  function mouseDownNS(Ereignis){
    pressed=true;
    if (over!=""){
      x=Ereignis.pageX-parseInt(document.getElementById(over).style.left);
      y=Ereignis.pageY-parseInt(document.getElementById(over).style.top);
      document.getElementById(over).style.zIndex=maxz;
      maxz++;
    }
  }

  function mouseUp(){
    pressed=false;
  }

  function decreaseOpacity(id){
    opacity[id]=opacity[id]+5;
    if (MS||OP){
      document.getElementById(id).style.filter="alpha(opacity="+opacity[id]+")";
    }
    if (NS6){
     document.getElementById(id).style.MozOpacity=opacity[id]+"%";
    }
    if (opacity[id]==100){
      window.clearInterval(opa[id]);
      opacity[id]=10;
    }
  }

  function show_(id,x,y){
    document.getElementById(id).style.visibility="visible";
    document.getElementById(id).style.left=x;
    document.getElementById(id).style.top=y;
    opa[id]=window.setInterval("decreaseOpacity('"+id+"')",50);
    opacity[id]=10;
  }

  function show(id,x,y){
    zuordnung[id]=window.setTimeout("show_('"+id+"','"+x+"','"+y+"')",1500);
  }

  function hide(id){
    document.getElementById(id).style.visibility="hidden";
    window.clearTimeout(zuordnung[id]);
    window.clearInterval(opa);
    opacity[id]=10;
    if (MS || OP){
     document.getElementById(id).style.filter="alpha(opacity=10)";
    }
    if (NS6){
     document.getElementById(id).style.MozOpacity="10%";
    }
  }

  function handleMove(){
    if ((over!="")&&(pressed)){
      if (over.slice(0,4)=="boxx"){
       document.getElementById(over).style.left=window.event.clientX-x;
       document.getElementById(over).style.top=window.event.clientY-y;
       document.selection.clear();
      }
    }
    if (globalid.slice(0,4)=="hint"){
      var xCorrect = -document.body.offsetWidth + 24 + window.event.clientX + document.getElementById(globalid).offsetWidth;
	  if(xCorrect < 0) xCorrect = 0;
	  document.getElementById(globalid).style.left=window.event.clientX+5+document.body.scrollLeft - xCorrect;
	  	  
	  var yCorrect = -document.body.offsetHeight + 50 + window.event.clientY + document.getElementById(globalid).offsetHeight;
      if(yCorrect < 0) yCorrect = 0;
	  document.getElementById(globalid).style.top=window.event.clientY+18+document.body.scrollTop - yCorrect;
	  
	}
  }

  function handleMoveNS(Ereignis){
    if ((over!="")&&(pressed)){
      if (over.slice(0,4)=="boxx"){
        document.getElementById(over).style.left=Ereignis.pageX-x;
        document.getElementById(over).style.top=Ereignis.pageY-y;
      }
    }
    if (globalid.slice(0,4)=="hint"){
      var xCorrect = -window.innerWidth + 24 + Ereignis.pageX + document.getElementById(globalid).offsetWidth - window.pageXOffset;
	  if(xCorrect < 0) xCorrect = 0;
	  document.getElementById(globalid).style.left=Ereignis.pageX+5 - xCorrect;
	  	  
	  var yCorrect = -window.innerHeight + 50 + Ereignis.pageY + document.getElementById(globalid).offsetHeight - window.pageYOffset;
      if(yCorrect < 0) yCorrect = 0;	
	  document.getElementById(globalid).style.top=Ereignis.pageY+18 - yCorrect;
    }
  }

  function overWK(id){
    if (over==""){
      over=id;
	}
  }

  function outWK(id){
    if (!pressed){
      over="";
    }
  }

  function show_pop(id){
    if (MS || NS6  || OP){
     document.getElementById(id).style.filter="alpha(opacity=10)";
    }
    if (NS6){
     document.getElementById(id).style.MozOpacity="10%";
    }	
    document.getElementById(id).style.visibility="visible";
    opa_pop=window.setInterval("decreaseOpacity_pop('"+id+"')",10);
  }

  function showpop(id){
    if(MS||NS6||OP){
      zuordnung_pop[id]=window.setTimeout("show_pop('"+id+"')",300);
      globalid=id;
      document.getElementById(id).style.zIndex=maxz;
	maxz++;
    }
	if (MS){
		handleMove();
	}
	
  }

  function hidepop(id){
    if(MS||NS6||OP){
      document.getElementById(id).style.visibility="hidden";
      globalid="";
      window.clearTimeout(zuordnung_pop[id]);
      window.clearInterval(opa_pop);
      opacity_pop=10;
      if (MS||OP){ 
        document.getElementById(id).style.filter="alpha(opacity=10)";
      }
      if (NS6){
        document.getElementById(id).style.MozOpacity="10%";
      }
    }
  }

  function decreaseOpacity_pop(id){
    opacity_pop=opacity_pop+10;
    if (MS||OP){
      document.getElementById(id).style.filter="alpha(opacity="+opacity_pop+")";
    }
    if (NS6){
      document.getElementById(id).style.MozOpacity=opacity_pop+"%";
    }
    if (opacity_pop==100){
      window.clearInterval(opa_pop);
      opacity_pop=10;
    }
  }
  
function popUpDown(strWhat)
{	
	switch (strWhat)
	{
		case "0":
			if(document.getElementById("cont0").innerHTML == "")
			{
				document.getElementById("cont0").innerHTML = document.getElementById("cont0Dis").innerHTML;
				document.getElementById("cont00").innerHTML = "&nbsp;";
				document.getElementById("imgCont0").src = "img_style/cont_pfeil_runter.gif";
				document.getElementById("imgCont0").alt = "Schliessen";
			}
			else
			{
				document.getElementById("cont0").innerHTML = "";
				document.getElementById("cont00").innerHTML = "";
				document.getElementById("imgCont0").src = "img_style/cont_pfeil_rechts.gif";
				document.getElementById("imgCont0").alt = "Öffnen";
			}
			break;
		case "1":
			if(document.getElementById("cont1").innerHTML == "")
			{
				document.getElementById("cont1").innerHTML = document.getElementById("cont1Dis").innerHTML;
				document.getElementById("cont10").innerHTML = "&nbsp;";
				document.getElementById("imgCont1").src = "img_style/cont_pfeil_runter.gif";
				document.getElementById("imgCont1").alt = "Schliessen";
			}
			else
			{
				document.getElementById("cont1").innerHTML = "";
				document.getElementById("cont10").innerHTML = "";
				document.getElementById("imgCont1").src = "img_style/cont_pfeil_rechts.gif";
				document.getElementById("imgCont1").alt = "Öffnen";
			}
			break;
		case "2":
			if(document.getElementById("cont2").innerHTML == "")
			{
				document.getElementById("cont2").innerHTML = document.getElementById("cont1Dis").innerHTML;
				document.getElementById("cont20").innerHTML = "&nbsp;";
				document.getElementById("imgCont2").src = "img_style/cont_pfeil_runter.gif";
				document.getElementById("imgCont2").alt = "Schliessen";
			}
			else
			{
				document.getElementById("cont2").innerHTML = "";
				document.getElementById("cont20").innerHTML = "";
				document.getElementById("imgCont2").src = "img_style/cont_pfeil_rechts.gif";
				document.getElementById("imgCont2").alt = "Öffnen";
			}
			break;
	}
}

function calculate_image(w,h)
{
var hoehe=h
var breite=w
if ( (hoehe > 90) || (breite > 90)){
  if (hoehe > breite){
    factor=hoehe/90;
    new_hoehe=90;
	new_breite=Math.round(breite/factor);
  }else{
	factor=breite/90;
	new_breite=90;
	new_hoehe=Math.round(hoehe/factor);		
  }
  return new Array(new_breite,new_hoehe,w,h);  
  }else{    
    if ((breite == 0)&&(hoehe == 0)) return null;
	if (breite == 0) breite=90;
    if (hoehe == 0) hoehe=90;  
    return new Array(breite,hoehe,w,h);  
  }
}
function klapp(id,schalter)
{
 if (document.getElementById(id).style.visibility=='visible')
  {
   document.getElementById(id).style.visibility='hidden';
   document.getElementById(id).style.height='10px';
   document.getElementById(schalter).innerText='Suche nach Preis eingrenzen ...';
   document.getElementById('min').value='';
   document.getElementById('max').value='';
  }
 else
  {
   document.getElementById('box').checked=true;
   document.getElementById(id).style.visibility='visible';
   document.getElementById(id).style.height='70px';
   document.getElementById(schalter).innerText='einfache Suche ...';
  }
} 
function lesezeichen_moeglich()
{
  if(!window.external)
  return false
  return true
}
function bookmark(verweis, name)
{
 if(!lesezeichen_moeglich())
  {
   alert("Diese Funktion wird von Ihrem Browser nicht unterstützt!")
   return
  }
 window.external.AddFavorite('http://www.preisroboter.de', 'PreisRoboter.de - Produktsuche und Preisvergleich!')
}
function webnapping()
{
 window.open("ext_link.html","webnapping","width=450,height=650,left=20,top=20,scrollbars=yes");
}
function shopinfo(id)
{
 window.open('shop_info.php?shopid='+id,'shopinfo','width=320,height=400,left=20,top=20')
}
function sendpass()
{
 window.open("sendpass.php","sendpass","width=450,height=250,left=20,top=20,scrollbars=yes");
}

function setBoxesFromCookie()
{	var box;
	
	if(!navigator.cookieEnabled)
	{
		return;
	}
	for(i=0; i<10; i++)
	{
		if(box = document.getElementById("cont"+i))
		{
			if (readCookie(box.id)== null){
				document.cookie=box.id + "=0";
			}
			if(readCookie(box.id) == 0)
			{
				document.getElementById("cont"+i).innerHTML = document.getElementById("cont"+i+"Dis").innerHTML;
				document.getElementById("cont"+i+"0").innerHTML = "&nbsp;";
				document.getElementById("imgCont"+i).src = "img_style/cont_pfeil_runter.gif";
				document.getElementById("imgCont"+i).alt = "Schliessen";
			}
			else
			{
				document.getElementById("cont"+i).innerHTML = "";
				document.getElementById("cont"+i+"0").innerHTML = "";
				document.getElementById("imgCont"+i).src = "img_style/cont_pfeil_rechts.gif";
				document.getElementById("imgCont"+i).alt = "Öffnen";
			}
		}
	}
}

function clickCont(id)
{
	var ablauf = new Date();
	var limit = ablauf.getTime() + (300 * 24 * 60 * 60 * 1000);
	ablauf.setTime(limit);
	var boxStatus = readCookie("cont"+id);
	
	if(boxStatus==0)
	{
		document.cookie="cont" + id + "=1; expires=" + ablauf.toGMTString();
	}
	else
	{
		document.cookie="cont" + id + "=0; expires=" + ablauf.toGMTString();
	}
	
	setBoxesFromCookie();
}

function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}







var cache=new Object();
var input_user_inhalt="";	
var input; 
var span;
var xmlhttp;

var color_h='#ffffc0';
var color='#ffffff';
var last_key=-1;
var off=true;
var end_suggestions=false;
var last_key_press_time;

var xmlrequestsndx; 


function init(){
	input=document.getElementById('search'); 
	input_user_inhalt=input.value;
	input.onkeyup=handle_keys;
	input.onkeydown=handle_keys_down;
	init_completion_span();
	window.setTimeout("main_loop()",300);
}


function handle_keys_down(){
	last_key_press_time=(new Date()).getTime();
	if (window.event.keyCode==13 || window.event.keyCode==9){
		hide_span(true);
		last_key=window.event.keyCode;
		return true;
	}
}

function handle_keys(){
	if ((window.event.keyCode==27) && is_span_displayed(input_user_inhalt)){
	  input.value=input_user_inhalt;
	  hide_span(false);
	  last_key=window.event.keyCode;
	  return false;
	}
	last_key=window.event.keyCode;
	if (window.event.keyCode==40){
		move_down();
		return;	
	}
	if (window.event.keyCode==38){
		move_up();
		return;
	}
	if (input_user_inhalt!=input.value){
		input_user_inhalt=input.value;
	}
}

function init_completion_span(){
	span=document.createElement("SPAN");
	span.style.borderRight="gray 1px solid";
	span.style.borderLeft="gray 1px solid";
	span.style.borderTop="gray 1px solid";
	span.style.borderBottom="gray 1px solid";
	span.style.paddingRight="0";
	span.style.paddingLeft="0";
	span.style.paddingTop="0";
	span.style.paddingBottom="0";
	span.style.position="absolute";
	span.style.backgroundColor="#FFFFFF";
	span.style.overflow="hidden";
	span.style.zIndex="1";
	span.style.visibility="hidden";
	document.body.appendChild(span);	
	calculate_span_position();
}

function calculate_span_position(){
	var elternelement=input;
	var x=elternelement.offsetLeft;
	var y=elternelement.offsetTop;
	
	var cor_x = 0;
	var cor_y = 0;
	
	while(elternelement=elternelement.offsetParent){
		x+=elternelement.offsetLeft;
		y+=elternelement.offsetTop;
	}	
	if(document.URL.indexOf("index.php") >= 0 || document.URL.indexOf(".php") == -1) {
		cor_x = 0;
		cor_y = -1;
	}
	if(document.URL.indexOf("search.php") >= 0) {
		cor_x = 1;
		cor_y = 0;
	}
	span.style.top=y+input.offsetHeight+cor_y;
	span.style.left=x+cor_x;
	span.style.width=input.offsetWidth;
}

function fill_span(term){
	var inhalte=cache[term];
	var div;
	var spanlinks;
	var spanrechts;
	span.style.visibility="hidden";
	span.id=term;
	while(span.childNodes.length>0) {
    	span.removeChild(span.childNodes[0]);
  	}
	for (var i=0; i<inhalte.length; i++){
		div=document.createElement("DIV");
		div.className="complete";
		if (i==0 && !off){
			div.style.backgroundColor=color_h;
			
		}else{
			div.style.backgroundColor=color;
		}		
		div.style.width=span.offsetWidth-3;
		div.style.whiteSpace="nowrap";
		div.style.cursor="default";
		div.onmouseover=highlight;
		div.onclick=set_input_and_submit;
		span.appendChild(div);
		
		spanlinks=document.createElement("SPAN");
		spanlinks.style.position="relative";
		spanlinks.style.left="2px";
		spanlinks.style.cursor="default";
		spanlinks.innerText=inhalte[i][0];
		div.appendChild(spanlinks);
		
		spanrechts=document.createElement("SPAN");
		spanrechts.style.position="absolute";
		spanrechts.style.right="2px";
		spanrechts.style.color="#FF0000";
		spanrechts.style.cursor="default";
		spanrechts.innerText=inhalte[i][1];
		div.appendChild(spanrechts);
		
	}
		if ((inhalte.length > 0)){
			show_span();
			if (!off)
				setselection();
		}
}

function hide_span(end_suggestions_){
	end_suggestions=end_suggestions_;
	span.style.visibility="hidden";
}

function show_span(){
	if (!end_suggestions){
		span.style.visibility="visible";
	}
}

function highlight(){
	var divs=span.childNodes;
	for (var i=0; i < divs.length; i++){
		divs[i].style.backgroundColor=color;
	}
		this.style.backgroundColor=color_h;
}

function move_down(){
	var divs=span.childNodes;
	off=false;
	if (divs[divs.length-1].style.backgroundColor==color_h)
		return;
	for (var i=0; i < divs.length; i++){
		if (divs[i].style.backgroundColor==color_h ){
			divs[i+1].style.backgroundColor=color_h;			
			divs[i].style.backgroundColor=color;
			input.value=divs[i+1].childNodes[0].innerText;
			return;
		}		
	}
	divs[0].style.backgroundColor=color_h;
	input.value=span.childNodes[0].childNodes[0].innerText;
	return;	
}

function move_up(){
	var divs=span.childNodes;
	for (var i=0; i < divs.length; i++){
		if (divs[i].style.backgroundColor==color_h){
			if (i==0){
				divs[i].style.backgroundColor=color;		
				off=true;
				input.value=input_user_inhalt;
				return;							
			}else{
				divs[i-1].style.backgroundColor=color_h;
				input.value=divs[i-1].childNodes[0].innerText;
				divs[i].style.backgroundColor=color;
				off=false;		  
				return;			
			}
		}
	}	
}

function setselection(){
	if ( ((new Date()).getTime() - last_key_press_time) < 100) return;
	if (last_key==8){
		return;
	}
	var range=input.createTextRange();
	input.value=span.childNodes[0].childNodes[0].innerText;
	range.moveStart("character",input_user_inhalt.length);
	range.select();
}


function set_input_and_submit(){	
	input.value=entity_decode(this.childNodes[0].innerText);
	hide_span(true);
	document.forms[0].submit();
}

function entity_decode(term){
	term=term.replace(/&auml;/g,'ä');
	term=term.replace(/&ouml;/g,'ö');
	term=term.replace(/&uuml;/g,'ü');
	term=term.replace(/&Auml;/g,'Ä');
	term=term.replace(/&Ouml;/g,'Ö');
	term=term.replace(/&Uuml;/g,'Ü');
	term=term.replace(/&szlig;/g,'ß');
	term=term.replace(/&quot;/g,'"');
	term=term.replace(/&nbsp;/g,' ');
	term=term.replace(/&deg;/g,'°');
	term=term.replace(/&amp;/g,'&');
	return term;	
}


function is_span_displayed(x){
	if ((span.style.visibility=="hidden")){
		return false;
	}else{
		if (span.id==x){
			return true;
		}else{
			return false;
		}
	}
}

function main_loop(){
	if (input_user_inhalt!=""){
		if (!cache[input_user_inhalt]){
			if ((xmlrequestsndx==null) || (xmlrequestsndx!=input_user_inhalt)){
				get_data(input_user_inhalt);
				hide_span(false);
			}			
		}else{
			if (!is_span_displayed(input_user_inhalt) && (last_key!=27) && (last_key!=-1) && (!end_suggestions))
				fill_span(input_user_inhalt);
		}
	}else{
		hide_span(false);
	}
	window.setTimeout("main_loop()",300);
}

function add_data_to_cache(answer){
	zeilen = answer.split('\n');
	term=entity_decode(zeilen[0]);
	suggestions=new Array();
	for (var i=1; i < zeilen.length-1; i++){
		zeile=zeilen[i].split('\x1B');
		suggestions[i-1]=new Array(entity_decode(zeile[0]),zeile[1]);
	}
	cache[term]=suggestions;
}

function handleHttpState(){
	if (xmlhttp.readyState == 4){ 
		if (xmlhttp.status == 200) {
			add_data_to_cache(xmlhttp.responseText);
			xmlrequestsndx=null;						
		} 
	} 
} 

function get_data(term){
	  if(xmlhttp&&xmlhttp.readyState!=0){
	  		xmlhttp.abort()
		}

	try { 
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(s){ }
		xmlhttp.onreadystatechange = handleHttpState;
		xmlhttp.open("GET", "complete_.php?sndx="+escape(term)+"&prz="+prz);
		xmlhttp.send(null);
		xmlrequestsndx=term;	
}

function showhelp(str_name) {
	
	if(isNaN(str_name)) {
		var elem = document.getElementsByName(str_name)[0];
		var str_hist = elem.offsetTop+" px "+elem.tagName+"\n";
		var abs_top = 0;
		
		while(elem.tagName != "BODY") {
			elem = elem.parentElement;
			if(elem.tagName != "TR" && elem.tagName != "CENTER") {
				str_hist += elem.offsetTop+" px "+elem.tagName+"\n";
				abs_top = abs_top + elem.offsetTop;
			}
		}
		document.getElementById("spHelp").style.top = abs_top+"px";
	} else {
		var elem = document.getElementsByTagName("input")[0].parentElement;
		var str_hist = elem.offsetTop+" px "+elem.tagName+"\n";
		var abs_top = 0;
		
		while(elem.tagName != "BODY") {
			elem = elem.parentElement;
			if(elem.tagName != "TR" && elem.tagName != "CENTER") {
				str_hist += elem.offsetTop+" px "+elem.tagName+"\n";
				abs_top = abs_top + elem.offsetTop;
			}
		}
		document.getElementById("spHelp").style.top = abs_top+"px";
	}
	document.getElementById("spHelp").style.visibility = "visible";
	document.getElementById("spHelp").innerHTML = document.getElementById("help_"+str_name).innerHTML;
}

function hidehelp() {
	document.getElementById("spHelp").style.visibility = "hidden";
	document.getElementById("spHelp").innerHTML = "...";
}

function switch_form_access(elem) {
	var switch_ = (elem.id)?elem.id:"secure";
	
	var str_pathtofile = "";
	
	switch(switch_)
	{
		case "ftp0":
			document.getElementById("access_mode").innerHTML = document.getElementById("http_no_access").innerHTML;
		break;
		case "ftp1":
			document.getElementById("access_mode").innerHTML = document.getElementById("ftp_access").innerHTML;
		break;
		case "secure":
			if(elem.checked) {
				str_pathtofile = document.getElementsByName("pathtofile")[0].value;
				document.getElementById("access_mode").innerHTML = document.getElementById("http_access").innerHTML;
				document.getElementsByName("pathtofile")[0].value = str_pathtofile;
			} else {
				str_pathtofile = document.getElementsByName("pathtofile")[0].value;
				document.getElementById("access_mode").innerHTML = document.getElementById("http_no_access").innerHTML;
				document.getElementsByName("pathtofile")[0].value = str_pathtofile;
			}
		break;
	}
}

function set_form_access(ftp,secure) {
	if(ftp == 1) {
		document.getElementById("access_mode").innerHTML = document.getElementById("ftp_access").innerHTML;
		document.getElementsByName('ftp_passwort')[0].value = document.getElementsByName('ftp_passwort_')[0].value;
		return;
	} else {
		if(secure == 1) {
			document.getElementById("access_mode").innerHTML = document.getElementById("http_access").innerHTML;
			document.getElementsByName('http_passwort')[0].value = document.getElementsByName('http_passwort_')[0].value;
		} else {
			document.getElementById("access_mode").innerHTML = document.getElementById("http_no_access").innerHTML;
		}
	}
}