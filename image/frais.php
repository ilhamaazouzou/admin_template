<?php
include("verification de Connextion.php");
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
	
	if(isset($frais)){
	for($i=0;$i<count($frais);$i++){
		$nomRem = "rem" . $frais[$i];
		$rem = isset($$nomRem) && !empty($$nomRem)? $$nomRem : 0;
		//echo "<br/>".$nomRem;
		$reqI = "insert into frais_mois values('".$personne."', '".$frais[$i]."', '".$mois."', '".$rem."')";
		$r = requete_execute($reqI);
		//echo "<br/>".$reqI;
	}
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
		echo "<option value='' ></option>";
		for($i=0;$i<count($r);$i++){
			$selected = (isset($niveau) && $niveau==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td><td colspan=2 align=right width=155>Ann&eacute;e universitaire : </td>
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
				and id_annee='".((isset($annee)) ? $annee : "0")."'";
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
		$req = "select id_mois, nom_mois from mois";
		$r = requete_retour($req);
		for($i=0;$i<count($r);$i++){
			$selected = (isset($mois) && $mois==$r[$i][0]) ? "selected=selected" : "";
			echo "<option value='".$r[$i][0]."' $selected>".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td>
	</tr>
	<?php if( isset($niveau) && isset($personne) && isset($mois) && !empty($niveau)  && !empty($personne)  && !empty($mois) ) {?>
	<input type=hidden name="confirmFrais" id="confirmFrais" value="<?php echo $personne; ?>" />
	<tr>
	<td colspan=6><hr/>Frais : </td>
	</tr>
	<?php
		$req = "select id_frais, nom_frais from frais";
		$tab= requete_retour($req);
		for($i=0;$i<count($tab);$i++){
			
			$req = "select montantFrais from frais_niveau where id_niveau = '".$niveau."' and id_frais = '".$tab[$i][0]."' ";
			$mnt= requete_ligne($req);
			
			$req = "select remise from frais_mois where id_inscription = '".$personne."' and id_frais = '".$tab[$i][0]."' and id_mois='".$mois."'";
			$fr= requete_retour($req);
			$checked = count($fr)==1 ? "checked" : "";
			$remise = count($fr)==1 ? " value='".$fr[0][0]."' " : "";
			echo "<tr><td></td><td width='10'>
			<div class='squaredOne'><input type='checkbox' value='".$tab[$i][0]."' id='squaredOne".$tab[$i][0]."' name='frais[]' ".$checked."/>
						<label for='squaredOne".$tab[$i][0]."'></label></div>
						</td><td><label class='lSquaredOne' for='squaredOne".$tab[$i][0]."'>".htmlentities($tab[$i][1])."</label>
			</td><td align='right'> ".$mnt[0]." DH
			</td><td align='right'>Remise : </td><td><input type='text' name='rem".$tab[$i][0]."' style='width:80px' 
				onkeypress='if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;' ".$remise." align=right/> %
			</td></tr>";
		}
	?>
	<tr>
	<td colspan=6 align="right">
    <input type=submit value="Confirmer" />
	</td>
    </tr>
	
	<?php }?>
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
</body>
</html>