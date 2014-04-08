

var editorg = document.getElementById("editorg");		
var editeurg = editorg.parentNode.removeChild(editorg);

var file = document.getElementById("file");		
 file = file.parentNode.removeChild(file);



var interupteur=document.getElementById("interupteur");
var tout = document.getElementById('tt');
var titre_p,txt_p;
interupteur.onchange=function(){
function eteindre(){
titre_p=document.getElementById("titre").value;
wrapper_p=document.getElementById("wrapper").value;
tout.style.display="none";

var submm = document.createElement('input');submm.id="tmp";
submm.type="submit";submm.value="valider";submm.className="button blue";submm.className="button_blue";		

var hiddenn=document.createElement('input'); hiddenn.type="hidden";
hiddenn.name="hiddenn";hiddenn.id="hiddenn";hiddenn.value=hidden.value;

formm=document.createElement('form');formm.method="post";formm.action="../cours/php/ajouter.php";formm.id="formm";
formm.appendChild(editeurg);formm.appendChild(submm);formm.appendChild(hiddenn);



document.getElementById('body').appendChild(formm);

editeurg.style.height="80%";
document.getElementById("interupteurg").checked="true";
document.getElementById("titre_p").value=titre_p;
document.getElementById("wrapper_p").value=wrapper_p;



document.getElementById("interupteurg").onchange=function()
{
	function allumer(){
var lum=0.1;
var op = function(par) {
if(lum<1){
tout.style.opacity=""+lum;
lum=lum+0.1;
timerIDo=setTimeout(op, 7);}
else {clearTimeout(timerIDo);}
}
op();
	tout.style.display="block";
	editeurg = editorg.parentNode.removeChild(editorg);
	submm = submm.parentNode.removeChild(submm);
	}

var cl1=0,vs1=0;
var gg = function() {
if(cl1<70){
document.getElementById('body').style.background="hsl(0,0%,"+cl1+"%)";
formm.style.opacity=""+vs1;
cl1=cl1+1;vs1=vs1-0.1;
timerIDg=setTimeout(gg, 5);}
else {clearTimeout(timerIDg);allumer();}
}
	
	gg();
	


	
	}
}



var cl=70,vs=1;
var ff = function(par) {
if(cl>1){
document.getElementById('body').style.background="hsl(0,0%,"+cl+"%)";
tout.style.opacity=""+vs;
cl=cl-1;vs=vs-0.1;
timerID=setTimeout(ff, 5);}
else {clearTimeout(timerID);eteindre();}
}

ff();


; 


};	


var exist=false;
var linkx = document.getElementById("modifier");	
var modifier = linkx.parentNode.removeChild(linkx);	

var linkx1 = document.getElementById("supprimer");		
var supprimer = linkx1.parentNode.removeChild(linkx1);	
	
var editor = document.getElementById("editor");		
var editeur = editor.parentNode.removeChild(editor);	
	
	
var a=['Titre','Sous-titre1','Sous-titre2','Sous-titre3','Sous-titre4','text','image','audio','video','video sur plateforme'];
var object=['h1','h2','h3','h4','h5','text','img','audio','video','iframe'];	
	
	
	var o=true;
	document.getElementById("boutton").onclick=function(){
	if(o==true)cr_liste("container");o=false;};
	
	
	function cr_liste(ou)
	
	{
	


var newLink1 = document.createElement('div');newLink1.id='popover';newLink1.className='popover';
var newLink2 = document.createElement('ul');newLink2.id='ul';newLink2.className='ul';
newLink2.className="custom_scrollbar";
var  newLink3=[],newLink4=[],newLinkText=[];

for(i=0;i<a.length;i++){
 newLink3[i] = document.createElement('li');newLink3[i].id='li'+i;newLink3[i].className='li'+i;
 newLink4[i] = document.createElement('a');newLink4[i].id='a'+i;newLink4[i].className='a'+i;
 newLinkText[i] = document.createTextNode(a[i]);
}


newLink1.appendChild(newLink2);

for(i=0;i<a.length;i++){
newLink2.appendChild(newLink3[i]);
newLink3[i].appendChild(newLink4[i]);
newLink4[i].appendChild(newLinkText[i]);
}


document.getElementById(ou).appendChild(newLink1);

var newLink_b1 = document.createElement('p');newLink_b1.id='valider';newLink_b1.className='button';
newLink_b1.style.margin="10px 15px";var newLinkText_b1 = document.createTextNode("valider");

var newLink_b2 = document.createElement('p');newLink_b2.id='Annuler';newLink_b2.className='button';
newLink_b2.style.margin="10px 15px";var newLinkText_b2 = document.createTextNode("Annuler");

newLink_b1.appendChild(newLinkText_b1);newLink_b2.appendChild(newLinkText_b2);

newLink1.appendChild(newLink_b1);

newLink1.appendChild(newLink_b2);


		
		j=0;
		
var li =[];

for(i=0;i<a.length;i++)
li[i]=document.getElementById('li'+i);
var choix =0;var elmnt="input";
choisir(0);

		li[0].onclick=function(){choisir(0);choix=0;elmnt="input";};
		li[1].onclick=function(){choisir(1);choix=1;elmnt="input";};
		li[2].onclick=function(){choisir(2);choix=2;elmnt="input";};
		li[3].onclick=function(){choisir(3);choix=3;elmnt="input";};
		li[4].onclick=function(){choisir(4);choix=4;elmnt="input";};
		li[5].onclick=function(){choisir(5);choix=5;elmnt="textarea";};
		li[6].onclick=function(){choisir(6);choix=6;elmnt="file";};
		li[7].onclick=function(){choisir(7);choix=7;elmnt="file";};
		li[8].onclick=function(){choisir(8);choix=8;elmnt="file";};
		li[9].onclick=function(){choisir(9);choix=9;elmnt="input";};
        

		
		
		
			
		function choisir(j){
		for(i=0;i<j;i++)document.getElementById('li'+i).className="li"+i;
		if(j!=a.length)for(i=j+1;i<a.length;i++) {document.getElementById('li'+i).className="li"+i; }       
		document.getElementById('li'+j).className="active";
		};



newLink_b1.onclick=function(){
	
if(exist==true){
	alert(1);
	form=document.getElementById("form");
form = form.parentNode.removeChild(form); // On supprime

	}

var form;	
var obj;


if(elmnt=="input"){
 obj= document.createElement(elmnt);
obj.type="text";obj.className=object[choix];
obj.id="title";obj.name="title";
var subm = document.createElement('button');
var hidden=document.createElement('input'); hidden.type="hidden";
hidden.name="hidden";hidden.id="hidden";hidden.value=object[choix];
subm.type="submit";subm.value="valider";
form=document.createElement('form');form.method="post";
form.action="../cours/php/ajouter.php";form.id="form";exist=true;
form.appendChild(obj);form.appendChild(hidden);form.appendChild(subm);
}

else if(elmnt=="textarea"){
obj= editeur;
obj.className="notepad";
var hidden=document.createElement('input'); hidden.type="hidden";
hidden.name="hidden";hidden.id="hidden";hidden.value=object[choix];
var subm = document.createElement('input');
subm.type="submit";subm.value="valider";subm.className="button blue";subm.className="button_blue";
form=document.createElement('form');form.method="post";form.action="../cours/php/ajouter.php?x=1";form.id="form";exist=true;	form.className="textar";	
form.appendChild(obj);form.appendChild(hidden);form.appendChild(subm);alert('');

}

else if(elmnt=="file"){
obj= file;

var hidden=document.createElement('input'); hidden.type="hidden";
hidden.name="hidden";hidden.id="hidden";hidden.value=object[choix];

form=document.createElement('form');form.method="POST";form.action="../cours/php/upload.php";
form.id="form";exist=true;	form.className="textar";	form.enctype="multipart/form-data";
form.appendChild(hidden);form.appendChild(obj);

}





obj.placeholder="Entrez un "+a[choix]+"...";



document.getElementById('conteneur').appendChild(form);

document.getElementById("modifier_t").appendChild(modifier);
document.getElementById("supprimer_t").appendChild(supprimer);
	
var linko = document.getElementById("popover");
var liste = linko.parentNode.removeChild(linko);

document.getElementById("pencil").style.opacity="0.1";
var ecrire=0;
document.getElementById("pencil").onmouseover=function(){document.getElementById("pencil").style.opacity="1";}
document.getElementById("pencil").onmouseout=function(){if(ecrire!=1)document.getElementById("pencil").style.opacity="0.1";}
document.getElementById("pencil").onclick=function(){document.getElementById("pencil").style.opacity="1";ecrire=1;}

o=true;
};


newLink_b2.onclick=function(){
var linko = document.getElementById("popover");
var liste = linko.parentNode.removeChild(linko); // On supprime
o=true;document.getElementById("pencil").style.opacity="0.1";
		};
		
modifier.onclick=function(){
	
	

if(o==true)cr_liste("container1");o=false;


		};	
supprimer.onclick=function(){
	

form=document.getElementById("form");
form = form.parentNode.removeChild(form); // On supprime
linkx = document.getElementById("modifier");	
modifier = linkx.parentNode.removeChild(linkx);	

linkx1 = document.getElementById("supprimer");		
supprimer = linkx1.parentNode.removeChild(linkx1);
o=true;exist=false;
		};	
					

	
		
	};
		