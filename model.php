<?php

	function getSejours(){
		//connexion a la base de donnees
		$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
		
		//recup des donnees de la base
		$sejours = $bdd->query('select * from sejour order by sejno');
		
		return $sejours;
	}
	
	function afficheSejours(){
		$sejours = getSejours();
		
		foreach ($sejours as $sejour){
			echo "<h2><p>".$sejour['SEJINTITULE']."</p></h2>".
					$sejour['SEJMONTANTMBI'].'€ <br/>
					A partir du '.$sejour['SEJDTEDEB']." ".$sejour['SEJDUREE'].' nuits';
		}
	}
	
?>