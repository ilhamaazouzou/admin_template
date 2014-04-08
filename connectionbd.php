<?php

function connect(){
	$host = "localhost";
	$database = "paiement";
	$user = "root";
	$pass = "";
$connection = mysql_connect($host,$user,$pass);
	mysql_select_db($database);
	return $connection;
}































function requete_ligne($req){
	$con = connect();
	$query = mysql_query($req); 
	$res = mysql_fetch_array($query);
	return $res;
	mysql_close($con);
}

function requete_colonne($req){
	$con = connect();
	$query = mysql_query($req); 
	$res = array();
	$i = 0;
	while($tab = mysql_fetch_array($query))
		$res[$i++] = $tab[0];	
	mysql_close($con);
	return $res;
}
function tester($login){
	$con = connect();
	$a="select login from compte ";
	$aa=requete_colonne($a);
for($i=0;$i<count($aa);$i++){
if($login==$aa[$i]){
return true;
exit();} 
}
return false;
	}


function requete_retour($req){
	$con = connect();
	$query = mysql_query($req); 
	$res = array();
	$i = 0;
	while($tab = mysql_fetch_array($query))
		$res[$i++] = $tab;	
	mysql_close($con);
	return $res;
}

function requete_execute($req,&$id=0){
	$con = connect();
	$res = mysql_query($req);
	$id = mysql_insert_id($con);
	mysql_close($con);
	if ($res)
		return true;
	else
		return false;
}

?>