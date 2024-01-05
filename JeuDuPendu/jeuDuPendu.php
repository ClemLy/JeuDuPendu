<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	session_start();

	include "fctAux.inc.php";
	include "mots.php";

	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if (isset($_POST['commencer']))
		{
			$themeSelectionne      = $_POST['theme'];
			$difficulteSelectionne = $_POST['difficulte'];


			$themeKeys           = array_keys($themes);
			$themeAleatoireIndex = array_rand($themeKeys);
			$themeAleatoire      = $themeKeys[$themeAleatoireIndex];

			$difficulteKeys           = array_keys($niveauxDifficulte);
			$difficulteAleatoireIndex = array_rand($difficulteKeys);
			$difficulteAleatoire      = $difficulteKeys[$difficulteAleatoireIndex];

			if ($themeSelectionne === 'Aleatoire')
			{
				$themeSelectionne = $themeAleatoire;

				if	($difficulteSelectionne === 'Aleatoire')
					$difficulteSelectionne = $difficulteAleatoire;
			}

			if ($difficulteSelectionne === 'Aleatoire')
				$difficulteSelectionne = $difficulteAleatoire;


			if (isset($themes[$themeSelectionne]) && isset($niveauxDifficulte[$difficulteSelectionne]))
			{
				$_SESSION['theme']        = $themeSelectionne;
				$_SESSION['difficulte']   = $difficulteSelectionne;
				$_SESSION['motADeviner']  = choisirMot($themes[$themeSelectionne][$difficulteSelectionne]);
				$_SESSION['motMasque']    = initMotMasque($_SESSION['motADeviner']);
				$_SESSION['propositions'] = [];
				$_SESSION['erreurs']      = $niveauxDifficulte[$difficulteSelectionne]['erreurs_initiales'];
			}
		}

		if (isset($_POST['lettre']))
    	{
			$lettreProposee = strtoupper($_POST['lettre']);

			if (!in_array($lettreProposee, $_SESSION['propositions']))
			{
				$_SESSION['propositions'][] = $lettreProposee;

				if (strpos($_SESSION['motADeviner'], $lettreProposee) === false)
				{
					$_SESSION['erreurs']++;
				}

				$motMasque = $_SESSION['motADeviner'][0];

				for ($i = 1; $i < strlen($_SESSION['motADeviner']); $i++)
				{
					$motMasque .= (in_array($_SESSION['motADeviner'][$i], $_SESSION['propositions'])) ? $_SESSION['motADeviner'][$i] . ' ' : '_ ';
				}

				$_SESSION['motMasque'] = $motMasque;
			}
		}

		if (isset($_POST['indice']) && !isset($_SESSION['indiceUtilise']))
		{
			$_SESSION['indiceUtilise'] = true;
			$lettreIndice = revelerIndice($_SESSION['motADeviner'], $_SESSION['propositions']);
			$_SESSION['propositions'][] = $lettreIndice;

			$motMasque = $_SESSION['motADeviner'][0];

			for ($i = 1; $i < strlen($_SESSION['motADeviner']); $i++)
			{
				$motMasque .= (in_array($_SESSION['motADeviner'][$i], $_SESSION['propositions'])) ? $_SESSION['motADeviner'][$i] . ' ' : '_ ';
			}
		
			$_SESSION['motMasque'] = $motMasque;
		}
	}




	

	function choisirMot($listeDeMots)
	{
		$indexMot = array_rand($listeDeMots);
		return strtoupper($listeDeMots[$indexMot]);
	}

	function initMotMasque($mot)
	{
		$motMasque = $mot[0];
		//$_SESSION['propositions'][] = $motMasque;

		for ($i = 1; $i < strlen($mot); $i++)
		{
			$motMasque .= ' _ ';
		}

		return $motMasque;
	}

	function revelerIndice($mot, $propositions)
	{
		$lettresNonProposees = array_diff(str_split($mot), $propositions);

		if (!empty($lettresNonProposees))
		{
			$indiceAleatoire = array_rand($lettresNonProposees);
			$lettreRevelee = $lettresNonProposees[$indiceAleatoire];

			$_SESSION['motMasque'][$indiceAleatoire] = $lettreRevelee;

			return $lettreRevelee;
		}

		return '';
	}






	function jeuDuPendu()
	{
		$messageFinJeu = "";

		if (isset($_SESSION['motMasque']) && !in_array('_', str_split($_SESSION['motMasque'])))
		{
			$messageFinJeu = "Félicitations, vous avez deviné le mot !";
		}

		if (isset($_SESSION['erreurs']) && $_SESSION['erreurs'] >= 10)
		{
			$messageFinJeu = "Désolé, la partie est perdue. Le mot était : " . $_SESSION['motADeviner'];
		}

		if ($_SESSION['difficulte'] == 'Abominable')
		{
			if (isset($_SESSION['propositions']) && count($_SESSION['propositions']) > 1)
			{
				$derniereLettreProposee = end($_SESSION['propositions']);
				$lettrePrecedente = prev($_SESSION['propositions']);
		
				if (strcasecmp($derniereLettreProposee, $lettrePrecedente) <= 0)
				{
					$messageFinJeu = "Perdu ! Les lettres doivent être proposées dans l'ordre alphabétique. Le mot était : " . $_SESSION['motADeviner'];
				}
			}
		}


		

		echo '<h1>Jeu du Pendu</h1>
			<div id="motADeviner">' . implode(' ', (array)$_SESSION['motMasque']) . '</div>';

		if (empty($messageFinJeu))
		{
			if (isset($_SESSION['propositions']))
			{
				echo '<form action="jeuDuPendu.php" method="post" id="proposerLettreForm">
						<label for="lettre">Proposez une lettre : </label>
						<input type="text" name="lettre" maxlength="1" pattern="[A-Za-z]" required>
						<button type="submit" name="proposerLettre">Proposer</button>
					</form>

					<form action="jeuDuPendu.php" method="post" id="indiceForm">
						<button type="submit" name="indice">Indice</button>
					</form>
				
				<div id="propositions">';
					foreach ($_SESSION['propositions'] as $proposition)
					{
						echo $proposition . ', ';
					}
				echo '</div>';

				
			}
		}

		echo '<div id="finJeu">' . $messageFinJeu . '</div>
			
			<form action="jeuDuPendu.php" method="post">
				<button type="submit" name="nouvellePartie">Nouvelle Partie</button>
			</form>';

			if (isset($_POST['nouvellePartie']))
			{
					session_destroy();
					header("Location: site.php");
					exit();
			}
			

		echo '<div class = "imagePendu">
		<svg height="250" width="200" class="dessinPendu">';
		for ($i = 0; $i < $_SESSION['erreurs']; $i++)
		{
			switch ($i)
			{
				case 0:
					echo '<line x1="20" y1="220" x2="220" y2="220"/>';
					break;
				case 1:
					echo '<line x1="120" y1="20" x2="120" y2="220" />';
					break;
				case 2:
					echo '<line x1="60" y1="20" x2="120" y2="20" />';
					break;
				case 3:
					echo '<line x1="60" y1="20" x2="60" y2="40" />';
					break;
				case 4:
					echo '<circle cx="60" cy="60" r="20" stroke="black" stroke-width="2" fill="white" />';
					break;
				case 5:
					echo '<line x1="60" y1="80" x2="60" y2="140" />';
					break;
				case 6:
					echo '<line x1="60" y1="100" x2="40" y2="120" />';
					break;
				case 7:
					echo '<line x1="60" y1="100" x2="80" y2="120" />';
					break;
				case 8:
					echo '<line x1="60" y1="140" x2="40" y2="180" />';
					break;
				case 9:
					echo '<line x1="60" y1="140" x2="80" y2="180" />';
					break;
			}
		}
		echo '</svg></div>';


		echo '<div id="infosPartie">
            <p>Niveau : ' . $_SESSION['difficulte'] . '</p>
            <p>Thème : ' . $_SESSION['theme'] . '</p>
          </div>';
	}

	echo enTete();
	echo jeuDuPendu();
	echo pied();
?>