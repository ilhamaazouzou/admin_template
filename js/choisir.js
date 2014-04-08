
var not=false;document.getElementById("notificat").style.display="none";
document.getElementById("notification").onclick=function(){if(not==false)
{document.getElementById("notificat").style.display="block";not=true;}
else {
	document.getElementById("notificat").style.display="none";
	not=false;
}}
