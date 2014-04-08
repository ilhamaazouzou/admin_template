

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
                  <li><a href="listecompte.php">Liste des comptes</a></li>
                </ul>
              </li>
            </ul>

            
            
            </div></div>

<link rel="STYLESHEET" type="text/css" href="css/styleTable.css">
<div class="pageContent">
 <link rel="STYLESHEET" type="text/css" href="css/style.css">
<?php
extract($_POST);
//print_r($_POST);
$err="";
$msg="";

if(isset($confirmFrais) && !empty($confirmFrais) ){
	
}
	
?><center>
<h2>Facturation</h2>
<form action="" method="post" id="formFrais">   
	   <table width="601">
	<tr>
	<td width="49">Niveau : </td>
	<td colspan=2>
    <Select name="niveau" id="niveau" class="miniSelect" onChange="deselectionnerPers();selectionner();">
	<?php
		$req = "select id_niveau, nom_niveau from niveau";
		$r = requete_retour($req);
		
		for($i=0;$i<count($r);$i++){
			$selected = (isset($niveau) && $niveau==$r[$i][0]) ? "selected=selected" : "";
		
				echo "<option value='".$r[$i][0]."' $selected >".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td><td colspan=2 align=right>Ann&eacute;e universitaire : </td>
	<td width="223" colspan=2>
    <Select name="annee" class="miniSelect" onChange="deselectionnerPers();selectionner();">
	<?php
		$req = "select id_annee, annee from annee";
		$r = requete_retour($req);
		
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
		echo "<option value=''>Tous les mois</option>";
		
		for($i=0;$i<count($r);$i++){
			$selected = (isset($mois) && $mois==$r[$i][0]) ? "selected=selected" : "";
			echo "<option value='".$r[$i][0]."' $selected>".htmlentities($r[$i][1])."</option>";
		}
	?>
	</Select>
	</td>
	</tr>
	<?php if( isset($niveau) && isset($personne) && isset($mois) && !empty($niveau)  && !empty($personne)  ) {?>
	<input type=hidden name="confirmFrais" id="confirmFrais" value="<?php echo $personne; ?>" />
	
	</table>
	<table class="colored" width="601" align="center" >
	
	<?php
		$req = "select id_frais, nom_frais from frais";
		$tabFr= requete_retour($req);
		$crM= empty($mois) ? "id_mois" : $mois;
		$req = "select id_mois, nom_mois from mois where id_mois=".$crM;
		$tabM= requete_retour($req);
		echo "<tr><td></td>";
		for($i=0;$i<count($tabFr);$i++)
			echo "<td>".htmlentities($tabFr[$i][1])."</td>";
		echo "</tr>";
		for($i=0;$i<count($tabM);$i++){
			echo "<tr  class=\"f\" id='".$tabM[$i][0]."'  ><td>".htmlentities($tabM[$i][1])."</td>";
			for($j=0;$j<count($tabFr);$j++){
				$cls = "no";
				$req = "select regle from frais_mois where id_inscription = '".$personne."' and id_frais = '".$tabFr[$j][0]."' and id_mois = '".$tabM[$i][0]."'";
				$res= requete_retour($req);
				if(count($res)){
					$cls = ($res[0][0]=="0") ? "red": "green";
				}
				echo "<td class='".$cls."'></td>";
				
			}
			echo "</tr>";
		}
		
		
	?>
	</table>
	
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
<script>
 var t =document.getElementById('personne').value;
 var niveau =document.getElementById('niveau').value;
var inputs = document.getElementsByClassName('f');
inputsLen = inputs.length;

for (var i = 0 ; i < inputsLen ; i++) {
inputs[i].onclick=function(){var i=this.id; 
document.location.href="../admin_template/fpdf17/bdpdf.php?id="+i+"&id1="+t+"&id2="+niveau;};

}
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