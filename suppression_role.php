



     


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

    <script>
      //* hide all elements & show preloader
      document.documentElement.className += 'loader';
    </script>
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
		<a class="menu" href="#">Gallery</a>
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
                <li><a href="listeDesComptes.php"><span>+</span> Afficher</a></li>
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

<link rel="STYLESHEET" type="text/css" href="css/boutton.css">
<?php
extract($_POST);
if(!isset($_GET['id']))
	exit();
$Id=$_GET['id'];
$req = "select nom_role from role where id_role='".$Id."'";
$res = requete_ligne($req);
		
if(isset($IdR) && !empty($IdR)){
		$req = "delete from role where id_role='".$IdR."'";
		$r = requete_execute($req);
		echo "<script>document.location = 'liste_role.php'</script>";
		exit();
}
?><center>
	<h2 class="title">Supprimer Role</h2>
	<form action="" method="post">
	<input type="hidden" name="IdR" value="<?php echo $Id?>">
	<table>
	<tr><td>Nom : </td><td><input type="text" name="nom" value="<?php echo $res[0]?>" readOnly="readOnly"></td></tr>
	<tr><td colspan=2 align="center">
    <input type="submit" value="Supprimer"><input type="submit" onClick="document.location='liste_role.php';" value="Retour"></button></td></tr>
	</table>
	</form></center>

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

  </body>
</html>