<style>

.comment {
    overflow: hidden;
    padding: 0 0 1em;
    border-bottom: 1px solid #ddd;
    margin: 0 0 1em;
    margin-left: 40px;
    *zoom: 1;
    width: 100%;
}

.comment-img {
    float: left;
    margin-right: 33px;
    border-radius: 5px;
    overflow: hidden;
}

.comment-img img { display: block }

.comment-body { overflow: hidden }

.comment .text {
    padding: 10px;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    background: #fff;
}

.comment .text p:last-child { margin: 0 }

.comment .attribution {
    margin: 0.5em 0 0;
    font-size: 14px;
    color: #666;
}

/* Decoration */

.comments, .comment { position: relative }

.comments:before, .comment:before, .comment .text:before {
    content: "";
    position: absolute;
    top: 0;
    left: 65px;
}

.comments:before {
    width: 3px;
    left: 105px;
    bottom: 0px;
    background: rgba(0,0,0,0.1);
}

.comment:before {
    width: 9px;
    height: 9px;
    border: 3px solid #fff;
    border-radius: 100px;
    margin: 16px 0 0 -6px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.2), inset 0 1px 1px rgba(0,0,0,0.1);
    background: #ccc;
}

.comment:hover {
    /*  cursor: url('../images/FB_CUR.cur');  See the result on http://lab.web-gate.fr/timeline/ */ 
    cursor: cell; /* This line is for the cursor */
}

.comment:hover:before { background: #3b5998 }

.comment .text:before {
    top: 18px;
    left: 78px;
    width: 9px;
    height: 9px;
    border-width: 0 0 1px 1px;
    border-style: solid;
    border-color: #e5e5e5;
    background: #fff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
}
</style>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
    $('#monForm').on('submit', function() {
 
        var pseudo = $('#pseudo').val();
        var mail = $('#mail').val();
 
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
               
            });
        
        return false;
    });
});

</script>

<details Commenter id="details">
      <summary>Remarque sur ce paragraphe</summary>
  <?php  
$nom="Oumaima";
$id_objet=1;
$comm3='<br/>';
$id_commentaire="paragraphe";
$moi=13;
$img="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/624051_1212291223_725510086_q.jpg";
global $nom,$comm3,$id_commentaire,$moi,$img;







$date="8-19-13";
//$commentaire="aaaaa";
$image="http://0.gravatar.com/avatar/8f42168125bd6a0348f846ab67516b18?s=75&d=%3Cpath_to_url%3E&r=G";
$nom_prenom="amina";


$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');




echo afficher_commentaireg($id_objet);



function afficher_commentaireg($id_objet){
$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$tableau=$bdd->query('select * from commentaire where objet!="commentaire" and id_objet="'.$id_objet.'"');
$comm='';
while($resultat=$tableau->fetch()){
$id_objet=$resultat['id_objet'];
$objet=$resultat['objet'];
$id_commentaire=$resultat['id_commentaire'];
$date=$resultat['date'];
$id_comentatteur=$resultat['id_comentatteur'];
$commentaire=$resultat['commentaire'];


$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$tableau1=$bdd->query('select distinct * from etudiant where id_etd='.$id_comentatteur);
$resultat1=$tableau1->fetch();
$image=$resultat1['img'];
$nom_prenom=$resultat1['nom'].'  '.$resultat1['prenom'];


$comm1='<article class="comment">
<a class="comment-img" href="#non"><img src="'.$image.'" width="50" height="50" /></a>
<div class="comment-body">
<div class="text">
'.$commentaire.'
</div>
<p class="attribution"><a href="#non">'.$nom_prenom.'</a> '.$date.'</p>
';


$comm2='</div></article>';




$comm3=afficher_commentaireg_commentaireg($id_commentaire);
 $comm=$comm.$comm1.$comm3.$comm2;
}

$nom_form="Oumaima";
$id_objet_form=1;
$objet_form="paragraphe";

$id_commentaire_form="paragraphe";
$moi_form=13;
$image_form="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/624051_1212291223_725510086_q.jpg";


$commf='</section>';$commd='<section class="comments">';
$form='
<article class="comment">
<a class="comment-img" href="#non"><img src="'.$image_form.'" width="50" height="50" /></a>
<div class="comment-body">
<div class="text">
<form id="monForm" action="ajax/ajax1.php" method="post">
<fieldset class="contact-inner">
    
   <input type="hidden" value="'.$moi_form.'" id="moi" name="moi">
  
   <input type="hidden" value="'.$id_objet_form.'" id="id_objet" name="id_objet">
    <input type="hidden" value="'.$objet_form.'" id="objet" name="objet">
   
   
   
      <p class="contact-input">
        <textarea name="commentaire" placeholder="ton commentaire" id="commentaire"></textarea>
      </p>



      <p class="contact-submit">
	     <input type="submit" value="Send Message" id="envoyer">
      </p>
    </fieldset>
		

	</form>
    
</div>
<p class="attribution"><a href="#non">'.$nom_form.'</a></p>
</div>
</article>
';

return $commd.$comm.$form.$commf;
}






function afficher_commentaireg_commentaireg($id_objet){
$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$tableau=$bdd->query('select * from commentaire where objet="commentaire" and id_objet="'.$id_objet.'"');
$comm='';
while($resultat=$tableau->fetch()){
$id_objet=$resultat['id_objet'];
$objet=$resultat['objet'];
$id_commentaire=$resultat['id_commentaire'];
$date=$resultat['date'];
$id_comentatteur=$resultat['id_comentatteur'];
$commentaire=$resultat['commentaire'];


$bdd=new PDO('mysql:host=localhost;dbname=projet_stage','root','');
$tableau1=$bdd->query('select distinct * from etudiant where id_etd='.$id_comentatteur);
$resultat1=$tableau1->fetch();
$image=$resultat1['img'];
$nom_prenom=$resultat1['nom'].'  '.$resultat1['prenom'];


$comm1='<article class="comment">
<a class="comment-img" href="#non"><img src="'.$image.'" width="50" height="50" /></a>
<div class="comment-body">
<div class="text">
'.$commentaire.'
</div>
<p class="attribution"><a href="#non">'.$nom_prenom.'</a> '.$date.'</p>
';


$comm2='</div></article>';








$comm3='';


 $comm=$comm.$comm1.$comm3.$comm2;
}

$nom_form="Oumaima";
$moi_form=13;
$image_form="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/624051_1212291223_725510086_q.jpg";


$commf='</section>';$commd='<section class="comments">';
$form='
<article class="comment">
<a class="comment-img" href="#non"><img src="'.$image_form.'" width="50" height="50" /></a>
<div class="comment-body">
<div class="text">
<form id="monForm1" action="ajax/ajax1.php" method="post">
<fieldset class="contact-inner">
    
   <input type="hidden" value="'.$moi_form.'" id="moi" name="moi">
  
   <input type="hidden" value="'.$id_objet.'" id="id_objet" name="id_objet">
    <input type="hidden" value="commentaire" id="objet" name="objet">
   
   
   
      <p class="contact-input">
        <textarea name="commentaire" placeholder="ton commentaire" id="commentaire"></textarea>
      </p>



      <p class="contact-submit">
	     <input type="submit" value="Send Message" id="envoyer">
      </p>
    </fieldset>
		

	</form>
    
</div>
<p class="attribution"><a href="#non">'.$nom_form.'</a></p>
</div>
</article>
';

return $commd.$comm.$form.$commf;
}



















 ?></details>