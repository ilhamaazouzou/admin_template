<?php
session_start();

function connectUser($username, $pass){
	if(strpos($username, " ")!==false or strpos($pass, " ")!==false){
		return false;
	}
	$req = "SELECT * FROM  `compte`  where upper(login) = upper('" . $username . "') and pass = '" . ($pass) . "'";
	$r = requete_retour($req);
	
	//echo $req;
	if ( count($r)==1){
		$_SESSION['UserLog'] = strtoupper($username);
		return true;
	}	
	return false;
}

function userExist($username){
	$req = "select * from compte where upper(login) = upper('" . $username . "')";
	$r = requete_retour($req);
	if ( count($r)==1)	
		return true;
	return false;
}

function isConnected(){
	return isset($_SESSION['UserLog']);
}

function IdCompte(){
	$req = "select id_compte from compte where upper(login) = upper('" . $_SESSION['UserLog'] . "')";
	$r = requete_ligne($req);
	return $r[0];
}
function userName(){
	$req = "select login from compte where upper(login) = upper('" . $_SESSION['UserLog'] . "')";
	$r = requete_ligne($req);
	return $r[0];
}

function NomRole(){
	$req = "select nom_role from role r inner join compte c on c.id_role=r.id_role where upper(login) = upper('" . $_SESSION['UserLog'] . "')";
	$r = requete_ligne($req);
	return $r[0];
}

function IdRole(){
	$req = "select id_role from compte where upper(login) = upper('" . $_SESSION['UserLog'] . "')";
	$r = requete_ligne($req);
	return $r[0];
}

function haveIdRole($IdRole){
	if(IdRole()==$IdRole)
		return true;
	return false;
}

function isAdmin(){
	return haveIdRole("1");
}

function userHaveDroit($user,$IdDroit){
	$req = "select d.id_role 
			from droit_role d 
			inner join role r on d.id_role=r.id_role 
			inner join compte u on u.id_role=r.id_role 
			where upper(login) = upper('" . $user . "')
			and d.id_droit = ". $IdDroit;
	$r = requete_retour($req);
	if ( count($r)==1)
		return true;
	return false;
}


function haveDroit($IdDroit){
	return userHaveDroit($_SESSION['UserLog'],  $IdDroit);
}

?>