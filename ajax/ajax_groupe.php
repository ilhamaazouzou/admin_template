
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$donne = $bdd->query('select * from etudiant where id_groupe='.$_GET['id']);

?>
<div style="position:absolute;top:160px; left:-420px" id="test">

</div>

<table border="1">
<tr>
<th>CODE</th>
<th>nom</th>
<th>prenom</th>
<th>absence</th>
</tr>
<?php 
while($resultat=$donne->fetch()){
?>
<tr>
<th><?php echo $resultat['id_etd']; ?></th>
<th><?php echo $resultat['nom']; ?></th>
<th ><?php echo $resultat['prenom']; ?></th>
<th><input type="checkbox" name="abs" /></th>
</tr>
<?php } ?>

<input type="date" name="date" id="date" width="48%" />
</table>
<table style="position:relative; top:50px;" border="1">
<tr>
<th>Jours</th>
<th>08:00=>09:00</th>
<th>09:00=>10:00</th>
<th>10:00=>11:00</th>
<th>11:00=>12:00</th>
<th>14:00=>15:00</th>
<th>15:00=>16:00</th>
<th>16:00=>17:00</th>
<th>17:00=>18:00</th>
</tr>
<tr>
<th>Lundi</th>
<th> 
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="a" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>

</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="b" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="c" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="d" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="e" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="f" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='lundi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="g" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='lundi'and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="h" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>

</tr>
<tr>
<th>Mardi</th>
<th> 
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();

?>
<a href="#" id="i" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="j" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="k" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="l" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="m" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="n" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="o" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='mardi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="p" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
</tr>
<tr>
<th>Mercredi</th>
<th> 
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();

?>
<a href="#" id="k" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="r" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="s" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="t" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="u" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="v" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="w" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='mercredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="x" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
</tr></tr>
<tr>
<th>Jeudi</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();

?>
<a href="#" id="y" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="z" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="aa" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="bb" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="cc" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="dd" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="ee" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='jeudi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="ff" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
</tr></tr>
</tr>
<tr>
<th>Vendredi</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();

?>
<a href="#" id="gg" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="hh" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="ii" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="jj" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='venredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="kk" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="mm" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="nn" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='vendredi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="oo" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
</tr></tr>
</tr>
<tr>
<th>Samedi</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=8 and heure_fin=9 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();

?>
<a href="#" id="pp" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=9 and heure_fin=10 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="qq" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=10 and heure_fin=11 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="rr" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=11 and heure_fin=12 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="ss" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=14 and heure_fin=15 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="tt" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=15 and heure_fin=16 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="uu" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a>
</th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=16 and heure_fin=17 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="ww" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
<th>
<?php
$don = $bdd->query("select * from seance s,matiere m where m.id_matiere=s.id_matiere and heure_debut=17 and heure_fin=18 and jour='samedi' and id_groupe=".$_GET['id']);
$p = $don->fetch();
?>
<a href="#" id="vv" onclick="idSeance('<?php echo $p['id_seance'];?>');"><?php echo $p['nomMat']; ?></a></th>
</tr></tr>
</tr>
</table>
