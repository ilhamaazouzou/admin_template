<?php
include("verification de Connextion.php");
?>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=paiement','root','');
?>
<html>
<head>
<link rel="STYLESHEET" type="text/css" href="css/style.css">
<title>Saisie Frais</title>
</head>
<body>
<?php include("header.php")?>
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
	<table>
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
     
    <td colspan=2 align=right width=155>Ann&eacute;e universitaire : </td>
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
	<?php if( isset($niveau) && isset($personne) && isset($mois) && !empty($niveau)  && !empty($personne)  && !empty($mois) && isset($classe) ) {?>
	
    <input type=hidden name="confirmFrais" id="confirmFrais" value="<?php echo $personne; ?>" />
	<tr>
	<td colspan=6><hr/>Frais : </td>
	</tr>
	<?php
	$squared=array();$value=array();
		$req = "select id_frais, nom_frais from frais";
		$tab= requete_retour($req);
		$val=0;
		
		
			
			for($i=0;$i<count($tab);$i++){
			$req = "select montantFrais from frais_niveau where id_niveau = '".$niveau."' and id_frais = '".$tab[$i][0]."' ";
			$mnt= requete_ligne($req);
			
			
			
			
			$req = "select remise from frais_mois where id_inscription = '".$personne."' and id_frais = '".$tab[$i][0]."' and id_mois='".$mois."'";
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
				onkeypress='if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;' ".$remise." align=right/> %
			</td>
		</tr>
		
	
		
	";}
	echo"	<div>
		
		<tr>
	<td colspan=6><hr/>Réglement : </td>
	</tr>
	
		
		</div>";
	     
			
			$dr="select t.id_reglement,t.type_reglement  from facture f,reglement r,type_reglement t where f.id_inscription='".$personne."' and            f.id_facture=r.id_facture and r.id_reglement=t.id_reglement and f.id_mois='".$mois."'";
	        $drr= requete_ligne($dr);
			if(isset($drr['id_reglement'])){
	   
		if($drr['id_reglement']==1)
		echo"<tr><td></td><td width='10'>
		<input type=\"checkbox\" name=\"espece\"  checked=\"checked\" class=\"rr\"><label></label></td><td><label >Espéce:</label></td>
		<td><input type=\"checkbox\" name=\"espece\"  class=\"rr\"><label></label><td><label >Chéque:</label></td>
		</td></tr>";
		elseif($drr['id_reglement']==2)
		echo"<tr><td></td><td width='10'>
		<input type=\"checkbox\" name=\"espece\"class=\"rr\"><label></label></td><td><label >Espéce:</label></td>
		<td><input type=\"checkbox\" name=\"espece\" checked=\"checked\" class=\"rr\"><label></label><td><label >Chéque:</label></td>
		</td></tr>";
		
		
			}
		else{
			echo"<tr><td></td>  <td width='10'>
                  <input type=\"checkbox\" name=\"espece\" class=\"rr\" value=\"1\">	<label></label></td>
		          <td><label >Espéce:</label></td>
			
		          <td><input type=\"checkbox\" name=\"espece\" class=\"rr\" value=\"2\">	<label></label></td>
		          <td><label >Chéque:</label>
			
		           </td></tr>";
				   
		}
		
	
	?>
    <input type="text" name="Valeur" id="Valeur" value="<?php echo $val; ?>"  hidden=""/>
    remise: <input type="text" name="V" id="V"  hidden=""/>
    
    <?php 
	$rt="select totalFacture from facture where id_inscription='".$personne."' and id_mois='".$mois."'";
		$tte= requete_ligne($rt);
		if (!empty($tte['totalFacture'])){?>
        <tr>
   <td> Montant Avec remise: </td><td  colspan=6 valign="bottom" ><input type="text" name="montant_remise" id="montant_remise" 
    value="<?php echo $tte['totalFacture']; ?>" /></td>
	<td colspan=6 align="right" valign="bottom">
   
	</td>
    </tr>
    <?php } else {?>
       <tr>
   <td> Montant Avec remise: </td><td  colspan=6 valign="bottom" ><input type="text" name="montant_remise" id="montant_remise"  value="0"/></td>
	<td colspan=6 align="right" valign="bottom">
   
	</td>
    </tr><?php }?>
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
	
	<?php }?>
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
total[".($i-1)."]=document.getElementById('rem'+".$i.").value+document.getElementById('squaredOne'+".$i.").value;
total[".($i-1)."]='0';*/

<?php
for($i=1;$i<3;$i++){
echo"
remise[".($i-1)."]=-1;

if(document.getElementById('squaredOne'+".$i.").checked)
{document.getElementById('rem'+".$i.").disabled=false;}
else
{document.getElementById('rem'+".$i.").disabled=true;

}

document.getElementById('squaredOne'+".$i.").onchange=function(){
if(document.getElementById('squaredOne'+".$i.").checked)
{document.getElementById('rem'+".$i.").disabled=false}
else
{document.getElementById('rem'+".$i.").disabled=true}
}  ";}
?>







	  
	  
	  
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

</body>
</html>