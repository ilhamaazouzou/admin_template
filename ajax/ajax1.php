<?php

 
 $bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
 
 $moi=$_POST['moi'];
  $objet=$_POST['objet'];
   $id_objet=$_POST['id_objet'];
    $commentaire=$_POST['commentaire'];
 
 
 echo $moi.$objet.$id_objet.$commentaire;
 
 
 
 
 $donnee = $bdd->query("INSERT INTO `commentaire`(`id_comentatteur`,  `id_objet`,`objet`, `commentaire`,date) VALUES ('$moi','$id_objet','$objet','$commentaire',sysdate())");
 
 
 

?>