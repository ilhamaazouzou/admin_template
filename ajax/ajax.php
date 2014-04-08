<?php 
$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$donne=$bdd->query('select * from seance s,salle sa,groupe g,matiere m,enseignant e where
sa.id_salle=s.id_salle and s.id_matiere=m.id_matiere and s.id_groupe=g.id_groupe and e.id_enseignant=s.id_enseignant and id_seance='.$_GET['id']);
$rep =$donne->fetch();



?>


<table border="1">
<tr>
<th>CODE</th>
<th>nom</th>
<th>prenom</th>
<th>absence</th>
</tr>
<?php 
$donne = $bdd->query('select * from etudiant e,groupe g,seance s where e.id_groupe=g.id_groupe and g.id_groupe=s.id_groupe and id_seance='.$_GET['id']);



while($resultat=$donne->fetch()){
?>
<tr>
<th><?php echo $resultat['id_etd']; ?></th>
<th><?php echo $resultat['nom']; ?></th>
<th ><?php echo $resultat['prenom']; ?></th>
<th><a id="n" href="#" onclick="absenter('<?php echo $resultat['id_seance']; ?>','<?php echo $resultat['id_etd']; ?>')">
<?php
$abscent=$bdd->query('select count(*) from absence where id_seance='.$_GET['id'].' and id_etd='.$resultat['id_etd'].'');
$rep =$abscent->fetch();
$n=$rep['count(*)'];
if($n==0) echo'<img src="img/search-white.png" />';
else if($n==1) echo'<img src="img/search-dark.png" />';

?>
</a></th>
</tr>
<?php } ?>
</table>
<table border="1">
<tr>
<th>Classe</th>
<th><input type="text" name="classe" id="classe" /></th>
</tr>
<tr>
<th>Date</th>
<th><input type="text" name="date" id="date" /></th>
</tr>
<tr>
<th>Séance</th>
<th><input type="text" name="seance" id="seance" /></th>
</tr>
<tr>
<th>Matiére</th>
<th><input type="text" name="matiere" id="matiere" /></th>
</tr>
<tr>
<th>Enseignant</th>
<th><input type="text" name="enseignant" id="enseignant" /></th>
</tr>
</table>
<table border="1">
<tr>
<td>Code</td>
<td>Nom</td>
<td>Prenom</td>
<td>Type</td>
<td>Duree</td>
<td>Justification</td>
</tr>
<?php 
$a=$bdd->query('select * from etudiant e, absence a where e.id_etd=a.id_etd and id_seance='.$_GET['id']);
?>
<?php while($v=$a->fetch()){ ?>
<tr>
<td><?php echo $v['id_etd']; ?></td>
<td><?php echo $v['nom']; ?></td>
<td><?php echo $v['prenom']; ?></td>
<td><?php echo $v['type']; ?></td>
<td><?php echo $v['duree']; ?></td>
<td><?php echo $v['justification']; ?></td>
</tr>
<?php } ?>
</table>


<script type="text/javascript">
document.getElementById('classe').value='<?php echo $rep['id_salle']; ?>';
document.getElementById('date').value='<?php echo date("d-m-y"); ?>';
document.getElementById('seance').value='<?php echo $rep['heure_debut']; ?> ==> <?php echo $rep['heure_fin']; ?>';
document.getElementById('matiere').value='<?php echo $rep['nomMat']; ?>';
document.getElementById('enseignant').value='<?php echo $rep['nomEns']; ?>';
</script>