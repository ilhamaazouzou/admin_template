<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <title>Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/colors/noise-red.css" rel="stylesheet" id="theme">
    <link href="css/menu2.css" rel="stylesheet" type="text/css" />
  
    
  

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <link href="css/ie8.css" rel="stylesheet">
      <script src="../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/icons/24x24/grid.png">
    
  <!--  css menu -->
    <link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
	<link href="css/bc-stylesheet.css" rel="stylesheet" type="text/css" />

   <!-- <script>
      //* hide all elements & show preloader
      document.documentElement.className += 'loader';
    </script>-->
  </head>

  <body>

    <div class="loading"><img src="img/ajaxLoader/loader01.gif" alt=""></div>

    <div class="mainContainer">

        <header>
        
       
        <div>
         
         <table width="100%" height="50px" border="0">
  <tr>
    <td><a href="#" class="logo"><img src="img/logo.png" alt=""></a></td>
   
  <td>     <div class="ph-line-nav nav" class="menu">
           
		<a class="menu" href="#">Home</a>
		<a class="menu" href="#">About</a>
		
		<a class="menu" href="#">Contact</a>
		<div class="effect"></div>
	</div></td>
   <td>  <ul class="headerButtons">
             <li><a href="destroy.php" rel="tipsyN" title="Se deconnecter"><img src="img/icons/14x14/light/lock3.png" alt=""></a></li>
            <li><a href="#"><img src="img/icons/14x14/light/cog.png" alt=""></a></li>
            <li class="layout"><a href="#" class="layoutChange"><span class="layoutLeft"></span></a></li>
          </ul></td>
  </tr>
</table>
 
          
          
          
          
         
        </div>
      </header>
   

      <div class="widgetBar">
        <div class="barInner">
      <ul class="navigation">
      <?php

include("verification de Connextion.php");
include("calendrier.php");
?>
            <li class="active"><a href="index.html"><i class="icon-white icon-th-large"></i>Bienvenue <?php echo userName();?> !</a></li>
            <li><a href="#"><i class="icon-white icon-list"></i>Liste des Inscriptions</a>
              <ul class="subMenu">
                <li><a href="listeDesInscriptions.php"><span>+</span> Afficher</a></li>
                <li><a href="ajoutInscription.php"><span>+</span> Ajouter</a></li>
              </ul>
        <li>
           <li><a href="#"><i class="icon-white icon-list"></i>Liste des Comptes</a>
              <ul class="subMenu">
                <li><a href="listecompte.php"><span>+</span> Afficher</a></li>
                <li><a href="ajout_compte_utilisateur.php"><span>+</span> Ajouter</a></li>
              </ul>
        <li>
     <li><a href="frais.php"><i class="icon-white icon-th"></i>Saisir Frais</a>
      <li><a href="facturation.php"><i class="icon-white icon-th"></i>Facturation</a>
      <li><a href="relance.php"><i class="icon-white icon-th"></i>Relance</a>
          </ul>
          
          
  <br>  <br>  <br>

   <div class="grid_3">
		<div class="fmcircle_out">
			<a href="note.php">
				<div class="fmcircle_border">
					<div class="fmcircle_in fmcircle_red">
						<span>Note</span><img src="img/note.png" alt="" />
					</div>
				</div>
			</a>
		</div>
</div> 
  <div class="grid_3">
		<div class="fmcircle_out">
			<a href="#software">
				<div class="fmcircle_border">
					<div class="fmcircle_in fmcircle_red">
						<span>Absence et Retard</span><img src="img/horloge.png" alt="" />
					</div>
				</div>
			</a>
		</div>
</div>
 <div class="grid_3">
		<div class="fmcircle_out">
			<a href="#software">
				<div class="fmcircle_border">
					<div class="fmcircle_in fmcircle_red">
						<span>Transport</span><img src="img/tran.jpg" alt="" />
					</div>
				</div>
			</a>
		</div>
</div>

        </div>
      </div>
      
      
      

      <div class="content">
      
<!--top bar-->
        <div class="topBar">
          <div class="topBarInner">
           
           
            <ul class="breadcrumbs">
              <li><a href="#" rel="tipsyN" title="Accueil"><img src="img/icons/14x14/home5.png" alt=""></a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Afficher Liste <span class="arrow"></span></a>
                <ul class="dropdown-menu pull-left">
                  <li><a href="listeDesInscriptions.php">Liste des étudiants</a></li>
                  <li><a href="listeDesComptes.php">Liste des comptes</a></li>
                </ul>
              </li>
            </ul>

            
            
            </div></div>

      
<link rel="STYLESHEET" type="text/css" href="css/style.css">
<?php
$bdd = new PDO('mysql:host=localhost;dbname=paiement','root','');
?>



<div class="pageContent">
<?php
extract($_POST);
//print_r($_POST);
$err="";
$msg="";


if(isset($confirmFrais) && !empty($confirmFrais) ){
	$reqS = "delete from frais_mois where id_inscription = '".$personne."' and id_mois='".$mois."'";
	$r = requete_execute($reqS);
	$reqp="delete from facture where id_inscription='".$personne."'  and id_mois='".$mois."'";
	$rp = requete_execute($reqp);

	if(isset($frais)){
	for($i=0;$i<count($frais);$i++){
		$nomRem = "rem" . $frais[$i];
		$rem = isset($$nomRem) && !empty($$nomRem)? $$nomRem : 0;
		//echo "<br/>".$nomRem;
		
		if($montant>$montant_compte){
		$reqI = "insert into frais_mois values('".$personne."', '".$frais[$i]."', '".$mois."', '".$rem."', 0)";
		$r = requete_execute($reqI);
	
		$reste=$montant-$montant_compte;
	   
	 $dz="update inscription set compte_prix='$reste' where id_inscription='".$personne."'";
	 $rB = requete_execute($dz);
		
		
		
		}
		else{
		$reqI = "insert into frais_mois values('".$personne."', '".$frais[$i]."', '".$mois."', '".$rem."', 1)";
		$r = requete_execute($reqI);}}
		//echo "<br/>".$reqI;
	
	$date = date("d-m-Y");
	
	$reqI = "insert into facture values('','".$date."' , '".$montant_remise."', '".$V."','".$personne."','".$mois."','".$montant_depose."')";
	$rrI = requete_execute($reqI);
	
	$re="SELECT id_facture FROM facture ORDER BY id_facture DESC ";
	$ree = requete_retour($re);
	$fact=$ree[0][0];
	
	$reqIII="insert into reglement values('".$espece."','".$date."','".$montant_depose."','".$fact."')";
	$rB = requete_execute($reqIII);
	
	
	}
	
		
		
		
	
	
}
	
?><center>
<h2>Saisie Frais</h2>

<form action="" method="post" id="formFrais">
	<table >
	<tr>
	<td>Niveau : </td>
	<td colspan=2>
    <Select name="niveau" class="miniSelect" onChange="deselectionnerPers();selectionner();">
	<?php
		$req = "select id_niveau, nom_niveau from niveau";
		$r = requete_retour($req);
		
		for($i=0;$i<count($r);$i++){
			$selected = (isset($niveau) && $niveau==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td>
     <td >Classe </td>
     <td colspan=2>
      <Select name="classe" class="miniSelect" onChange="deselectionnerPers();selectionner();">
	<?php
		$req = "select id_classe, nom_classe from classe";
		$r = requete_retour($req);
	
		for($i=0;$i<count($r);$i++){
			$selected = (isset($classe) && $classe==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
     </td>
     
    <td >Ann&eacute;e universitaire : </td>
	<td colspan=2>
    <Select name="annee" class="miniSelect" onChange="deselectionnerPers();selectionner();">
	<?php
		$req = "select id_annee, annee from annee";
		$r = requete_retour($req);
		echo "<option value='' ></option>";
		for($i=0;$i<count($r);$i++){
			$selected = (isset($annee) && $annee==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td>
	</tr>
	<tr>
	<td valign=top>Incription : </td>
	<td colspan=6>
    <Select name="personne" id="personne" size=7 onChange="selectionner();">
	<?php
		$req = "select id_inscription, cne, nom,prenom from inscription where id_niveau='".((isset($niveau)) ? $niveau : "0")."'
				and id_annee='".((isset($annee)) ? $annee : "0")."'  and id_classe='".((isset($classe)) ? $classe : "0")."'";
		$r = requete_retour($req);

		for($i=0;$i<count($r);$i++){
			$selected = (isset($personne) && $personne==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".$r[$i][1]."\r".htmlentities($r[$i][2])."\r".htmlentities($r[$i][3])."</option>";
		}
	?>
	</Select>
	</td>
	</tr>
	<tr>
	<td>Mois : </td>
	<td colspan=6>
    <Select name="mois" onChange="selectionner();">
	<?php
			$req = "select id_mois, nom_mois from mois ";
		$r = requete_retour($req);
		for($i=0;$i<count($r);$i++){
			$selected = (isset($mois) && $mois==$r[$i][0]) ? "selected=selected" : "";
			echo "<option value='".$r[$i][0]."' $selected>".htmlentities($r[$i][1])."</option>";
		}

	
		
	?>
	</Select>
	</td>
	</tr>
    
	
	
    <input type=hidden name="confirmFrais" id="confirmFrais" value="<?php echo $personne; ?>" />
	<tr>
	<td colspan=6><hr />Frais : </td>
	</tr>
	<?php
	$squared=array();$value=array();
		$req = "select id_frais, nom_frais from frais";
		$tab= requete_retour($req);
		$val=0;
		
		
			
			for($i=0;$i<count($tab);$i++){
			
			$mnt= requete_ligne($req);
			
			
			
			
			
			$fr= requete_retour($req);
			$checked = count($fr)==1 ? "checked" : "";
			$remise = count($fr)==1 ? " value='".$fr[0][0]."' " : "";
			echo "<tr><td></td><td width='10'>";
			array_push($squared,$tab[$i][0]);
echo"<div class='squaredOne' id='squaredOne'><input  type='checkbox' class=\"manal\" value='".$tab[$i][0]."' rel=".$mnt[0];
array_push($value,$mnt[0]);
echo " id='squaredOne".$squared[$i]."' name='frais[]' ".$checked. "/>";





					echo "	<label for='squaredOne".$tab[$i][0]."'></label></div>
						</td><td><label class='lSquaredOne' for='squaredOne".$tab[$i][0]."'>".htmlentities($tab[$i][1])."</label>
			</td><td align='right'> ".$mnt[0]." DH
			
			</td><td align='right'>Remise : </td><td><input type='text' id='rem".$squared[$i]."' value=\"0\" class=\"ilham\" MAXlength=2 name='rem".$squared[$i]."' style='width:80px' 
				/> %
			</td>
		</tr>
		
	
		
	";}
	echo"	<div>
		
		<tr>
	<td colspan=6><hr/>Réglement : </td>
	</tr>
	
		
		</div>";
	     
		
	        
			
	   
		
		echo"<tr><td></td><td width='10'>
		<input type=\"checkbox\" name=\"espece\"  checked=\"checked\" class=\"rr\"><label></label></td><td><label >Espéce:</label></td>
		<td><input type=\"checkbox\" name=\"espece\"  class=\"rr\"><label></label><td><label >Chéque:</label></td>
		</td></tr>";
		
	
				   
		
		
	
	?>
    <input type="hidden" name="Valeur" id="Valeur" value=""  />
    remise: <input type="hidden" name="V" id="V"  />
    
   
        <tr>
   <td> Montant Avec remise: </td><td  colspan=6 valign="bottom" ><input type="text" name="montant_remise" id="montant_remise" 
    value="" /></td>
	<td colspan=6 align="right" valign="bottom">
   
	</td>
    </tr>
   
       <tr>
   <td> Montant Avec remise: </td><td  colspan=6 valign="bottom" ><input type="text" name="montant_remise" id="montant_remise"  value="0"/></td>
	<td colspan=6 align="right" valign="bottom">
   
	</td>
    </tr>
     <tr>
    <td>  compte: </td><td  colspan=6 valign="bottom" >
    <input type="text" name="montant_compte" id="montant_compte" ></td></tr>
	<tr>
   <td> Montant a déposé: </td><td  colspan=6 valign="bottom" ><input type="text" name="montant" id="montant"  value="0"></td>
	</tr>
    <tr>   <tr>
    <td> Montant que vs voulez deposé </td><td  colspan=6 valign="bottom" >
    <input type="text" name="montant_depose" id="montant_depose" required></td></tr>
   
	
    <tr>
    <td colspan=6 align="right" valign="bottom">
    <input type=submit value="Confirmer" />
	</td>
    </tr>
	
	
    </table>
	</form>
</center>
</div>
<script>
function selectionner(){

 
 var frm = document.getElementById('formFrais');
 if(document.getElementById('confirmFrais')){
	 var v = document.getElementById('confirmFrais');
	 //alert(v);
	 v.value = "";
 }
 frm.submit();
 }
function deselectionnerPers(){
 var pers = document.getElementById('personne');
 pers.value = "";
 }
</script>


<!--<script>

function accord() 
{
var b = ""
for (i = document.getElementsByName('frais').length - 1; i >= 0; i--) 
{
if (document.getElementsByName('frais')[i].checked) 
{
b = b+ document.getElementsByName('frais')[i].value + "\n"
}
}
else if (document.getElementsByName('frais')[0].checked)
	
	
}

</script>-->



<?php 

echo'<script> 

var value=[];';
for($i=0;$i<count($value);$i++)
echo'value['.$i.']='.$value[$i].';';

echo'</script>';
?>

<script>

var montant_compte=
	<?php 
	$montant_compte=0;
	$montant_compte=$bdd->query("select compte_prix from inscription where id_inscription='".$personne."'");
	$montant_compte=$montant_compte->fetch();
	echo $montant_compte['compte_prix'];
	 ?>;

var total=[];

/*

total[".($i-1)."]=document.getElementById('rem'+".$i.").value+document.getElementById('squaredOne'+".$i.").value;
total[".($i-1)."]='0';*/

<?php
for($i=1;$i<3;$i++){
echo"


tmp".$i."();

document.getElementById('squaredOne'+".$i.").onchange=function(){tmp".$i."();}
document.getElementById('rem'+".$i.").oninput=function(){tmp".$i."();}

function tmp".$i."(){
if(document.getElementById('squaredOne'+".$i.").checked)
{
	total[".($i-1)."]=".$value[$i-1]."-(document.getElementById('rem'+".$i.").value*".$value[$i-1].")/100;
	document.getElementById('rem'+".$i.").disabled=false;}
else
{document.getElementById('rem'+".$i.").disabled=true;
total[".($i-1)."]=0;}

tt=0;
for(i=0;i<total.length;i++)
tt+=total[i];
document.getElementById('montant_remise').value=tt;
if(montant_compte>tt)
document.getElementById('montant').value=0;
else
document.getElementById('montant').value=tt-montant_compte;

document.getElementById('montant_compte').value=montant_compte;

}  

document.getElementById('montant_compte').onblur=function(){
tmp".$i."();
}
";}
?>


document.getElementById("montant_depose").oninput=function(){
document.getElementById("montant_compte").value=document.getElementById("montant_depose").value-document.getElementById("montant_remise").value;
}

</script>
<script src = "http://code.jquery.com/jquery-1.9.1.min.js" ></script>
<script>
$(document).ready(function() {
	    $('.manal').click(function(){
		
		var checked=$(this).is(':checked');
		var id= parseInt($(this).attr("rel"));
		var i= parseInt($('#Valeur').val());
		if(checked)
			som= parseInt(id+i);
		else
			som= parseInt(i-id);
		$('#Valeur').val(som);

				});
});

</script>
<script>


//var remise=new array();


</script>
<script>
$(document).ready(function() {
	
$('.rr').click(function(){
	var i=0;
	var h=0;

	if((document.forms[0].elements["rem1"].value)==""){
		i=0;}
		else {
		i=parseInt(document.forms[0].elements["rem1"].value);
		
		 }
if((document.forms[0].elements["rem2"].value)==""){
		h=0;}
		else {
		h=parseInt(document.forms[0].elements["rem2"].value);
		
		
		 }
  
  $('#V').val(i+h);

 
 
	});
				});


</script>

<script>


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	var $form = $('#monForm');
	$('#envoyer').on('click', function() {
		$form.trigger('submit');
		return false;
	});
	
	$form.on('submit', function() {
			$.ajax({
				url: $(this).attr('action'),
				type: $(this).attr('method')
				
			});
		
		
	});
});


</script>

 

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.3.js"></script>
    <script src="js/ui/jquery-ui-1.9.2.custom.js"></script>

    <!-- flot plugin -->
  

    <!-- Jquery form wizard -->
    <script src="js/formWizard/jquery.form.js"></script>    
    <script src="js/formWizard/jquery.validate.js"></script>    
    <script src="js/formWizard/bbq.js"></script>  
    <script src="js/formWizard/jquery.form.wizard.js"></script>

    <!-- antiscroll plugin -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.js"></script>

    <!-- fullcalendar plugin -->


    <!-- tipsyS plugin -->
    <script src="js/tipsy/jquery.tipsy.js"></script>

    <!-- fancybox plugin -->
    <script src="js/fancybox/jquery.fancybox.pack.js"></script>

    <!-- uniform plugin -->
    <script src="js/uniform/jquery.uniform.js"></script>

    <!-- Jquery dataTable -->
    <script src="js/dataTable/jquery.dataTables.js"></script>

    <!-- uniform plugin -->
    <script src="js/sparklines/jquery.sparkline.js"></script>

    <!-- chosen plugin -->
    <script src="js/chosen/chosen.jquery.js"></script>

    <!-- cookie plugin -->
    <script src="js/cookie/jquery.cookie.js"></script>

   

    <!-- mask plugin -->
    <script src="js/mask/jquery.maskedinput-1.3.js"></script>

    <!-- easypiechart plugin -->
    <script src="js/easypiechart/jquery.easy-pie-chart.js"></script>


   
    <!-- ibutton plugin -->
    <script src="js/ibutton/jquery.ibutton.js"></script>

    <!-- daterangepicker plugin -->


    <!-- antiscroll plugin -->
    <script src="js/antiscroll/jquery-mousewheel.js"></script>    
    <script src="js/antiscroll/antiscroll.js"></script>    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/application.js"></script>      

    <script src="js/general.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/dashboard.js"></script>

    <script>
      $(document).ready(function() {
        setTimeout('$("html").removeClass("loader")',1000);
      });
    </script>