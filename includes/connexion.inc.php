<?php
// Database connexion
try{
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=micro_blog', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo "Fail -> ". $e->getMessage();
}

// If cookie exists, we use it to retrieve the session of the user
if(isset($_COOKIE['cookieBlog'])){
	$query='SELECT * FROM utilisateurs WHERE sid=:sid';
	$prep= $pdo->prepare($query);
	$prep->bindValue(':sid', $_COOKIE['cookieBlog']);
	$prep->execute();
	$count=$prep->rowCount();
	if($count!=0){
		while ($data = $prep->fetch()) {
			$pseudo=$data['pseudo'];
		}
	}
	else{
		$pseudo="";
	}
}
// If there is no cookie, we create an empty pseudo so that there will be no errors.
else{
	$pseudo="";
}
?>