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
			<a href="#software">
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
              <li><a href="default.php" rel="tipsyN" title="Accueil"><img src="img/icons/14x14/home5.png" alt=""></a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Afficher Liste <span class="arrow"></span></a>
                <ul class="dropdown-menu pull-left">
                  <li><a href="listeDesInscriptions.php">Liste des étudiants</a></li>
                  <li><a href="listeDesComptes.php">Liste des comptes</a></li>
                </ul>
              </li>
            </ul>

            
            
            </div></div>
              </div>
      
       
<?php
$bdd = new PDO('mysql:host=localhost;dbname=paiement','root','');
$sql = "select i.*, c.nom_classe, n.nom_niveau, a.annee
		from inscription i
		inner join classe c on c.id_classe=i.id_classe
		inner join niveau n on n.id_niveau=i.id_niveau
		inner join annee a on a.id_annee=i.id_annee
		order by nom,prenom";

$do=$bdd->query($sql);
?>

    
	<script src="js/modernizr.custom.63321.js" type="text/javascript"></script>   
    <link href="css/cc1/styleResp.css" rel="stylesheet" type="text/css" />
    <!--Css pannel contact-->
    <link href="css/cc1/stylesContact.css" rel="stylesheet" type="text/css" />
    <!--End Css pannel contact-->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery-1.7.1.js"></script>
    <script src="js/jquery.reveal.js" type="text/javascript"></script>
       <script type="text/javascript">
           function changeCSS(cssFile, cssLinkIndex) {

               var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);

               var newlink = document.createElement("link")
               newlink.setAttribute("rel", "stylesheet");
               newlink.setAttribute("type", "text/css");
               newlink.setAttribute("href", cssFile);

               document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
           }
    </script>

<div class="pagekamla">
	<div id="tablewrapper" >
		<div id="tableheader">
        	<div >
                <select id="columns" onChange="sorter.search('query')"></select>
                <input type="text" id="query" onKeyUp="sorter.search('query')" />
            </div>
            <span class="details" >
        		
				<div><span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
        		<div class="btn-reset"><a class="button blue" href="javascript:sorter.reset()">Réenitialiser</a></div>
                <div><a class="button myGreen" href="ajoutInscription.php">Ajouter</a></div>
                <div><a class="button myred" href="index.php">Retour</a></div>
        	</span>
        </div>
        
        
      
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable" >
            <thead>
            
                <tr>
                    <th class="nosort"><h3>CNE</h3></th>
                    <th><h3 id="ligne">Nom</h3></th>
                    <th><h3>Prenom</h3></th>
                    <th><h3>Adresse</h3></th>
                    <th><h3 >Telephone</h3></th>
                    <th><h3>Classe</h3></th>
                 	<th><h3>Niveau</h3></th>    
                    <th><h3>Annee universitaire</h3></th>
                </tr>
               
            </thead>
            <div id="ff">
              <tbody><?php while($r=$do->fetch()){ ?>
              
                <tr >
                 <td > <article id="<?php echo $r['id_inscription']; ?>"><?php echo $r['cne']; ?></article></td>
                   <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['nom']; ?></article></td>
                  <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['prenom']; ?></article></td>
                   <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['adresse']; ?></article></td>
                   <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['telephone']; ?></article></td>
                    <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['nom_classe']; ?></article></td>
                    <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo htmlentities($r['nom_niveau']); ?></article></td>
                    <td ><article id="<?php echo $r['id_inscription']; ?>"> <?php echo $r['annee']; ?></article></td>
                	<!--<td><a href="modification_inscription.php?id=<?php echo $r['idInscription']; ?>" title="Modifier"><img src="./image/b_edit.png" /></a></td>
                    <td><a href="suppression_inscription.php?id=<?php echo $r['idInscription']; ?>" title="Suprimmer"><img src="./image/b_drop.png" /></a></td>
                    -->
                </tr>
				<?php  } ?>
           
              
            </tbody></div>
        </table>
        
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.png" width="16" height="16" alt="First Page" onClick="sorter.move(-1,true)" />
                    <img src="images/previous.png" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                    <img src="images/next.png" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                    <img src="images/last.png" width="16" height="16" alt="Last Page" onClick="sorter.move(1,true)" />
                </div>
                <div>
                	<select  id="pagedropdown"></select>
				</div>
                <div class="btn-reset"><a class="button blue" href="javascript:sorter.showall()">Montrer tout</a>
                </div>
            </div>
			<div id="tablelocation">
            <div>
                  <select onChange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="txt-page"></span>
                </div>

            	
                <div class="page txt-txt">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
<!--- Pannel Contact-->
  <div id="modal">
	<div id="heading" class="heading-color">
		For more info send me an email
	</div>

	<div id="content">
        <div class="txt-subject">
        <p style="margin-left:10px;">Subject: </p></div> 
        <div class="content-subject">
        <input type="text"/></div>
		<div class="txt-email">
        <p style="margin-left:10px;">Email: </p></div> 
        <div class="content-email">
        <p id="email" style=" color:#464747; font:12px;"></p></div>
        <div class="txt-message"><p>Message: </p></div> 
        <div class="content-message">
        <textarea style="width:100%;background-color:#f7fbfe; margin-left:10px; height:100px;"></textarea></div>
        <div class="contact-img"><img src="images/email.png" class="img-contact" alt=""/></div>

		<div style="margin: 0 0 0 10px;"><a href="#" class="button blue position">Send</a></div>
	</div>
</div></div>
<!---End Pannel Contact-->

	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:1,
		sortdir:1,
		columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
  <!--Script Open Pannel--->
  
   
  <script type="text/javascript">
      $(document).ready(function () {
          $('.button-email').click(function (e) { // Button which will activate our modal
              var title = $(this).attr('title');
              var title2 = $('.name').attr('title');
              document.getElementById("email").innerHTML = title.toString();
              $('#modal').reveal({ // The item which will be opened with reveal
                  animation: 'fade',                   // fade, fadeAndPop, none
                  animationspeed: 600,                       // how fast animtions are
                  closeonbackgroundclick: true,              // if you click background will modal close?
                  dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
              });
              return false;
          });
      });
	</script> 
    <!--End Script Open Pannel---> 
<script>

var inputs = document.getElementsByTagName('article');
inputsLen = inputs.length;
for (var i = 0 ; i < inputsLen ; i++) {
inputs[i].onclick=function(){var i=this.id; document.location.href="modification_inscription.php?id="+i;};

}
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
 
</body>
</html>