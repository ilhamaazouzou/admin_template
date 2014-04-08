

<?php
$bdd = new PDO('mysql:host=localhost;dbname=paiment','root','');
if(!isset($_GET['id']))
	exit();
$Id=$_GET['id']; 

$do=$bdd->query('select c.nom,c.prenom,i.num_inscription from compte c , inscription  i where i.id_compte=c.id_compte and i.id_compte='.$Id.'');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>


<style type="text/css">

.nom{
	padding-left:70%;
	padding-top:5%;
	}
</style>
</head>
<body>
<center>

	<h2 class="title">Facture</h2>
    

	<div class="nom">
	  <table width="90"><?php  while($r=$do->fetch()){ ?>
	  <tr><td>Nom:</td><td><?php echo $r['nom']; ?> </td></tr>
<tr><td>Prénom:</td><td><?php echo $r['prenom']; ?> </td></tr></table> </div>
   <div >
     <p>Numéro d'inscription:<?php echo $r['num_inscription']; ?></p>
     <p>&nbsp;</p>
   </div>  
     <?php } ?>
     

     
    
    
	
	
  
</body>
</html>
</body>
</html>