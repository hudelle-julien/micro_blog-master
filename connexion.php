
<?php
include('includes/connexion.inc.php');
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->assign('pseudo', $pseudo);
// Search for user with the ids he has filled 
$query = 'SELECT pseudo FROM utilisateurs WHERE email=:email AND mdp=:mdp';
$prep = $pdo->prepare($query);
$prep->bindValue(':email', $_POST['email']);
$prep->bindValue(':mdp', md5($_POST['mdp']));
$prep->execute();
$count=$prep->rowCount();

// if request isn't empty
if($count!=0){
	// storage of the session id created from the email, the password and the actual date
	$sid=md5($_POST['email'].$_POST['mdp'].time());
	//on crée un cookie avec le sid
	setcookie("cookieBlog", $sid, time()+300);

	$query = 'UPDATE utilisateurs SET sid=:sid WHERE email=:email AND mdp=:mdp';
	$prep= $pdo->prepare($query);
	$prep->bindValue(':sid', $sid);
	$prep->bindValue(':email', $_POST['email']);
	$prep->bindValue(':mdp', md5($_POST['mdp']));
	$prep->execute();
	header('Location:index.php');
}
// If user not find, we tell him his ids don't exist.
else{
	$smarty->assign('requetePassee', false);
    $smarty->display('connexion.tpl');
}
?>