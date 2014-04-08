<head>
		<meta charset="UTF-8" />
	<link rel="STYLESHEET" type="text/css" href="css/style.css">
</head>
	<div class="pageheader">
<div class="connected">Bienvenue <?php echo userName();?> !</div>
		
</div>
<div class="mymenu">
			<ul id="navigation">
				<?php if( NomRole()=="Administrateur") {?>
				<li><a href="ajoutInscription.php">Nouvelle Inscription</a></li>
                <li><a href="listeDesInscriptions.php">Inscriptions</a></li>
                <li><a href="listecompte.php">listecompte</a></li>
                <li><a href="recherchee.php" >recherche</a></li>
              <li><a href="frais.php" >Saisie Frais</a></li>
              <li><a href="facturation.php" >Facturation</a></li>
              <li><a href="relance.php" >Relance</a></li>
             <li><a href="../fpdf17/bdpdf.php" >Relance</a></li>
			 <?php } ?>
             <li><a href="destroy.php" id="link-deconnexion">deconnecter</a></li>	
		  </ul>
          </div>
	
	