<?php
include('includes/connexion.inc.php');

// Check if user is still logged
if($pseudo!=""){
	// Get user id for the insert request
	$query='SELECT id FROM utilisateurs WHERE pseudo="'.$pseudo.'"';
	$stmt = $pdo->query($query);
	while ($data = $stmt->fetch()) {
		$id_utilisateurs=$data['id'];
	}

$id = rand(1,2000);

if (isset($_POST['message']) && !empty($_POST['message'])) {
	// If id doesn't exist or is empty, we insert the values , else we update the existing ones
	if(!isset($_POST['id']) || empty($_POST['id'])){
		$query = 'INSERT INTO messages (id, contenu, date, id_utilisateurs) VALUES ('.$id.',:contenu, UNIX_TIMESTAMP(),:id_utilisateurs)';
		$prep = $pdo->prepare($query);
	}
	else{
		$query = 'UPDATE messages set contenu=(:contenu), date= UNIX_TIMESTAMP(), id_utilisateurs=(:id_utilisateurs) WHERE id=(:id)';
		$prep = $pdo->prepare($query);
		$prep->bindValue(':id', $_POST['id']);
	}
	$prep->bindValue(':id_utilisateurs', $id_utilisateurs);
	$prep->bindValue(':contenu', $_POST['message']);
	
	$prep->execute();
    
}
// we then redirect the user to the home page
header('Location:index.php');
}
// If the cookie expired we tell the user he has disconnected
else{
	
	include('includes/haut.inc.php');
	?>

	<div style="text-align: center;">
		<p class="panel" style="font-size: 2em">Vous avez &eacute;t&eacute; d&eacute;connect&eacute;(e)</p>
		<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
	</div>
	<?php
	include('includes/bas.inc.php');
}
?>