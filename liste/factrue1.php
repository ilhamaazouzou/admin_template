<?php $bdd = new PDO('mysql:host=localhost;dbname=paiment','root','');?>
<div id="frais"> 
  <p>
            <label> Frais    </label>
          </p>
          <p>
            <label> transport </label>
            <input name="transport" type="checkbox"  />
            <label> Contine</label>
            <input name="contine" type="checkbox"  />
            <label> Scolarité</label>
            <input name="scolarite" type="checkbox"   />
            <br ></br>
            <br>
            <label > Montant:</label>
             <input type="" name="montant" type="text" /></br>
             <br ></br>
        <label > Remise:</label>
             <input type="" name="remise" type="text" />
   </p>
        

  <label>Mode de paiement: </label>
	         <select name="mode" id="mode">  
             <?php
			$query = $bdd->query( "select id_reglement,type_reglement from reglement");
		while($result = $query->fetch()){
		
		echo "<option value='".$result['id_reglement']."'>" .$result['type_reglement']. "</option>";
		} ?>
       
  </select>
  <br ></br>
  <br ></br>
            <label > Montant:</label>
             <input  name="mode_paiment" type="text" />
           