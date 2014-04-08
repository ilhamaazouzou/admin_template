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
    
  <!--  css menu 
    <link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>-->
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
		<a class="menu" href="#">Contact</a>
		<div class="effect"></div>
	</div></td>
   <td>  <ul class="headerButtons">
           
            <li><a href="destroy.php" rel="tipsyN" title="Se deconnecter"><img src="img/icons/14x14/light/lock3.png" alt=""></a></li>
           
            <li class="layout"><a href="#" class="layoutChange"><span class="layoutLeft"></span></a></li>
            
          </ul></td>
  </tr>
</table>
 
          
          
          
          
         
        </div>
      </header>
   

      <div class="widgetBar">
        <div class="barInner">
        <!--menu-->
          <ul class="navigation">
                      <?php

include("verification de Connextion.php");

?>
            <li class="active"><a href="default.php"><i class="icon-white icon-th-large"></i> Bienvenue <?php echo userName();?> !</a></li>
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
		  <li><a href="#"><i class="icon-white icon-list"></i>Liste des roles</a>
              <ul class="subMenu">
                <li><a href="liste_role.php"><span>+</span> Afficher</a></li>
                <li><a href="ajouter_role.php"><span>+</span> Ajouter</a></li>
				 <li><a href="modification_role.php"><span>+</span> modifier</a></li>
                <li><a href="suppression_role"><span>+</span> supprimer</a></li>
              </ul>
        <li>
      <li><a href="frais.php"><i class="icon-white icon-list"></i>Saisr Frais</a>
      <li><a href="facturation.php"><i class="icon-white icon-list"></i>Facturation</a>
      <li><a href="relance.php"><i class="icon-white icon-list"></i>Relance</a>
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
              <li><a href="default.php" rel="tipsyN" title="Accueil"><img src="img/icons/14x14/home5.png" alt=""></a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Afficher Liste <span class="arrow"></span></a>
                <ul class="dropdown-menu pull-left">
                  <li><a href="listeDesInscriptions.php">Liste des étudiants</a></li>
                  <li><a href="listecompte.php">Liste des comptes</a></li>
                </ul>
              </li>
            </ul>

            
            
            </div></div>

        <div class="contentInner">

              <div id="slider_wrapper">
	<div id="slider">
		
		<div id="slides_info">
			<div class="slide_info one">
				<h2>L'école élémentaire de Lembach</h2>
				<p> L'école élémentaire de Lembach se partage les locaux avec l'école maternelle et le périscolaire. Le bâtiment, construit en 1957, abrite les 4 classes élémentaires (depuis la rentrée 2011) et les 2 classes maternelles. Il a été réhabilité et réaménagé en 1997.

Au rez-de-chaussée, il y a les deux classes maternelles, la salle de jeu, les toilettes, la BCD (Bibliothèque Centre de Documentation), un classe élémentaire, une petite salle cuisine/vidéo/rangement et un préau. Le périscolaire utilise la salle de jeux, la cuisine et une salle de classe pour ses activités en dehors des heures de classe.

Au premier étage, vous trouverez la salle des maîtres, une petite salle de rangement du matériel et les salles de classe, une salle informatique et une salle d'arrts plastiques. 

Au deuxième étage, se trouvent cinq logements loués par la Mairie à des particuliers.

Une cour très vaste et entièrement clôturée nous permet de jouer en toute sécurité pendant les récréations.</p>
				<p class="nb">Gestion de paiement</p>
				<a class="button" href="#">Plus d'info</a>
				
			</div>
			<div class="slide_info two">
				<h2>L'école élémentaire de Lembach</h2>
				<p> L'école élémentaire de Lembach se partage les locaux avec l'école maternelle et le périscolaire. Le bâtiment, construit en 1957, abrite les 4 classes élémentaires (depuis la rentrée 2011) et les 2 classes maternelles. Il a été réhabilité et réaménagé en 1997.

Au rez-de-chaussée, il y a les deux classes maternelles, la salle de jeu, les toilettes, la BCD (Bibliothèque Centre de Documentation), un classe élémentaire, une petite salle cuisine/vidéo/rangement et un préau. Le périscolaire utilise la salle de jeux, la cuisine et une salle de classe pour ses activités en dehors des heures de classe.

Au premier étage, vous trouverez la salle des maîtres, une petite salle de rangement du matériel et les salles de classe, une salle informatique et une salle d'arrts plastiques. 

Au deuxième étage, se trouvent cinq logements loués par la Mairie à des particuliers.

Une cour très vaste et entièrement clôturée nous permet de jouer en toute sécurité pendant les récréations.</p>
				<p class="nb">Gestion de paiement</p>
				<a class="button" href="#">Plus d'info</a>
			
			</div>
			<div class="slide_info three">
				<h2>L'école élémentaire de Lembach </h2>
				<p>L'école élémentaire de Lembach se partage les locaux avec l'école maternelle et le périscolaire. Le bâtiment, construit en 1957, abrite les 4 classes élémentaires (depuis la rentrée 2011) et les 2 classes maternelles. Il a été réhabilité et réaménagé en 1997.

Au rez-de-chaussée, il y a les deux classes maternelles, la salle de jeu, les toilettes, la BCD (Bibliothèque Centre de Documentation), un classe élémentaire, une petite salle cuisine/vidéo/rangement et un préau. Le périscolaire utilise la salle de jeux, la cuisine et une salle de classe pour ses activités en dehors des heures de classe.

Au premier étage, vous trouverez la salle des maîtres, une petite salle de rangement du matériel et les salles de classe, une salle informatique et une salle d'arrts plastiques. 

Au deuxième étage, se trouvent cinq logements loués par la Mairie à des particuliers.

Une cour très vaste et entièrement clôturée nous permet de jouer en toute sécurité pendant les récréations. </p>
				<p class="nb">Gestion de paiement</p>
			<a class="button" href="#">Plus d'info</a>
			</div>
			<div class="slide_info four">
				<h2>L'école élémentaire de Lembach</h2>
				<p> L'école élémentaire de Lembach se partage les locaux avec l'école maternelle et le périscolaire. Le bâtiment, construit en 1957, abrite les 4 classes élémentaires (depuis la rentrée 2011) et les 2 classes maternelles. Il a été réhabilité et réaménagé en 1997.

Au rez-de-chaussée, il y a les deux classes maternelles, la salle de jeu, les toilettes, la BCD (Bibliothèque Centre de Documentation), un classe élémentaire, une petite salle cuisine/vidéo/rangement et un préau. Le périscolaire utilise la salle de jeux, la cuisine et une salle de classe pour ses activités en dehors des heures de classe.

Au premier étage, vous trouverez la salle des maîtres, une petite salle de rangement du matériel et les salles de classe, une salle informatique et une salle d'arrts plastiques. 

Au deuxième étage, se trouvent cinq logements loués par la Mairie à des particuliers.

Une cour très vaste et entièrement clôturée nous permet de jouer en toute sécurité pendant les récréations.</p>
				<p class="nb">Gestion de paiement</p>
		 <a class="button" href="#">Plus d'info</a>
			</div>
		</div>
		
		<div id="slides_image">
			<div class="slide one">
				<img src="img/016-haute-marne-avril-2006-ordinateurs-ecole-primaire-sommevoire1235256579.jpg" />
			</div>		
			<div class="slide two">
				<img src="img/Ecole01.jpg" />
			</div>		
			<div class="slide three">				
				<img src="img/ardoise-ecolier_1_1.jpg" />
			</div>		
			<div class="slide four">				
				<img src="img/S.jpg" />
			</div>
            
		</div>
	</div>
</div>
   
   
        
    </div>
    
 


    
    
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
