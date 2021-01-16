


<?php
 require_once'db.php';
/*
$dbHost='localhost';
$dbUser='root';
$dbPasseword='';
$dbName='smartlady';
$dsn='mysql:host=localhost; port=3306; dbname=smartlady';
$dbUser='root';
$pw='';
$pdo=new PDO($dsn, $dbUser, $pw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
if(isset($_POST['s'])){

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$c = htmlspecialchars($_POST['c']);
	$mot_de_passe = sha1($_POST['mot_de_passe']);
	$verifie = sha1($_POST['verifie']);


	if(!empty($_POST['nom']) AND (!empty($_POST['prenom']) AND (!empty($_POST['email']) AND (!empty($_POST['mot_de_passe']) AND (!empty($_POST['verifie']) AND (!empty($_POST['c']))

	{
 
	//permet d'enlever tous les caractére html pour éviter les injection de code
	

	//strlen:trouver le nombre de caractére dans une chaine de caractére
	$length=strlen($nom);
	if($length<=255){
  if($c==$email){

 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
$reqmail=$pdo->prepare("SELECT * FROM compte WHERE email=?");
			$reqmail->execute(array($email));
		   $mailexist=$reqmail->rowCount();
		   if($mailexist==0){


 if($mot_de_passe==$verifie){
		//vérification de l'email

 $insert=$pdo->prepare("INSERT INTO smartlady(nom, prenom, mail, mot_de_passe) VALUES(?,?,?,? )" );

 $insert->execute(array($nom, $prenom, $email, $mot_de_passe));
	//$_SESSION['comptecree']="Votre compte a  bien été crée";	
 $erreur="Votre compte a  bien été crée";
	header('Location: page2.php');
	}else{
			$erreur="Vos mots de passe ne correspondent pas!";
		}

	}else{
		$erreur="Adresse mail déjà utilisée !";
	}
}else{
	$erreur="Votre adresse mail n'est pas valide";
}
		  
}else{
	$erreur="Vos adresse mail ne correxpondent pas !";
}
	}else{
		$erreur="Votre nom ne doit pas dépasser 255 caractéres";
	}	
}	else{
	$erreur="tous les champs doivent être complètés";
}
}      
		
			
			

		



//a la fermeture de la balise form
if(isset($erreur)){

	echo '<font color="red">'.$erreur."</font>";
}


//
/*value="<?php  if(isset($pseudo)){echo $pseudo;} ?>" */
?>