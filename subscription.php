<?php
include('includes/connexion.inc.php');
require_once('libs/Smarty.class.php');
	$smarty = new Smarty();
	$smarty->assign('pseudo', $pseudo);
$execInsert=true;

// Checking if the user doesn't already exists
$query='SELECT pseudo, email FROM utilisateurs';
$stmt=$pdo->query($query);
while($data=$stmt->fetch()){
    
	if($data['pseudo']==$_POST['pseudo']){
		// If pseudo already exists, this variable will be used to not do the insert
		$execInsert=false;
		$smarty->assign('pseudoInvalide', $data['pseudo']);
	}
	if($data['email']==$_POST['email']){
		// Same but with the email.
		$execInsert=false;
		$smarty->assign('emailInvalide', $data['email']);
	}
}

// Since the auto increment doesn't work in myadmin, creating a random id, which hopefully won't be a duplicate of an existing one
$id = rand(1, 2000);

// If everything is fine, we insert the user for subscription
if($execInsert==true){
	$query = 'INSERT INTO utilisateurs (id, nom, prenom, email, mdp, pseudo) VALUES ('.$id.',:nom, :prenom, :email, :mdp, :pseudo)';
	$prep = $pdo->prepare($query);
	$prep->bindValue(':nom', $_POST['nom']);
	$prep->bindValue(':prenom', $_POST['prenom']);
	$prep->bindValue(':email', $_POST['email']);
	$prep->bindValue(':mdp', md5($_POST['mdp']));
	$prep->bindValue(':pseudo', $_POST['pseudo']);
	$prep->execute();
	$smarty->assign('requetePasse', true);
	
}
// We then display the appropriate template
$smarty->display('subscription.tpl');
?>