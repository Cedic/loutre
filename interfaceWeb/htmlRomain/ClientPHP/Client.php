<?php
	$name = $_POST["prenom"];
	$IDClient = $_POST["IDClient"];
	
	$db = mysql_connect('localhost', 'login', 'password');
	mysql_select_db('nomdelabase', $db);
	$sqlSolde = "SELECT Solde FROM Personne WHERE ID=IDClient";
	$reqSolde = mysql_query($sqlConnect);
	
	$solde = $reqSolde->fetch();

?>

<hmtl>
	<head>
		<title>LOUTRE</title>
		<link rel="stylesheet" href="../Ressources/styleLoutre.css" />
	</head>

	<body >
		<div id="logo">
		
			<a href="../Connexion.html"><img src="../Ressources/LogoLoutre.jpg" alt="Logo Loutre" style="width:800px"></a>
		</div>

		<div id="page-wrap">
			<h1>Bonjour  <a href="<?php print $name; ?>"></a>, heureux de vous revoir!</h1>
			<h2>Il vous reste  <a href="<?php print $solde; ?>"></a>� sur votre compte.</h2>
		</div>

		<div id="page-wrap">
			<h2>D�tails de vos mouvements de compte : </h2>
			<table id="conso">
				<tr>
					<th>Date</th>
					<th>Op�ration</th> 
					<th>Mouvement</th>
				</tr>
				<tr>
					<td>11/03/2015</td>
					<td>Consommation : caf�</td> 
					<td>-00,50�</td>
				</tr>
				<tr>
					<td>09/03/2015</td>
					<td>Virement vers : Michel</td> 
					<td>-51,00�</td>
				</tr>
				<tr>
					<td>06/03/2015</td>
					<td>Virement depuis : Jacquie</td> 
					<td>+24,00�</td>
				</tr>
				<tr>
					<td>24/02/2015</td>
					<td>Renflouement des caisses</td> 
					<td>+12,00�</td>
				</tr>	
				<tr>
					<td>17/02/2015</td>
					<td>Paiement : Sortie Ski</td> 
					<td>-54,00�</td>
				</tr>
				<tr>
					<td>16/02/2015</td>
					<td>Cadeau de bienvenue</td> 
					<td>+01,00�</td>
				</tr>
			</table>
		</div>
		
		<div id="page-wrap">
		<h2> Virement vers un autre utilisateur : </h2>
		<br>
				Envoi de
				<input type="text" name="montant">
				� �
				<select>
					<option value ="sydney">Jacquie</option>
					<option value ="melbourne">Michel</option>
					<option value ="cromwell">Robert</option>
					<option value ="queenstown">Roger</option>
				</select>
				?
				<button> Valider le virement </button>
		</div>
		
		<div id="page-wrap">
			<h2> Inscription aux �v�nements AEDI: </h2>
			<br>
			Je souhaite m'inscrire � l'�v�nement : 
			<select>
				<option value ="sydney">WEI (25�)</option>
				<option value ="melbourne">Sortie SKI (52�)</option>
				<option value ="cromwell">Bowling (4�)</option>
				<option value ="queenstown">Hackathon Google (gratuit)</option>
			</select>
				
			<button> S'inscrire </button>
			<br>
			Commentaire �ventuel :
			<input type="text" name="montant">
		</div>

	</body>
</html>