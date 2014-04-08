
<?php  
include("/verification.php");
?>  
  <script src="auto1.js"></script>
  <script src="auto2.js"></script>
  <p id="i"><?php echo "select id_compte,nom,prenom from compte"; ?>  </p> 
  <script>
$(function(){
	
var chaine=document.getElementById("i").innerHTML;
var table = chaine.split('.');

  
$("#id_station" ).autocomplete({
source: table
    });
  });
  </script>
<style>
li{
color:#0C6;
border:1;
}

</style>
  
  <select id="id_station" >
  
  </select>

 
 
