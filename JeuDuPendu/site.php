<?php
	include "fctAux.inc.php";
	include "mots.php";

	echo enTete();
	echo site($themes, $niveauxDifficulte);
	echo pied();

	function site($themes, $niveauxDifficulte)
	{
		echo '<h1>Jeu du Pendu</h1>
			
			<form action="jeuDuPendu.php" method="post">
				<label for="theme">Choisissez un thème :</label>
				<select name="theme" required>';

		foreach ($themes as $theme => $mots)
		{
			echo "<option value=\"$theme\">$theme</option>";
		}

					echo '<option value="Aleatoire">Aléatoire</option>

				</select>

				<label for="difficulte">Choisissez la difficulté :</label>
				<select name="difficulte" required>';

		foreach ($niveauxDifficulte as $difficulte => $params)
		{
			echo "<option value=\"$difficulte\">$difficulte</option>";
		}

					echo '<option value="Aleatoire">Aléatoire</option>

				</select>

				<button type="submit" name="commencer">Commencez !</button>
			</form><br><br>';

		echo '<div class="description">
				<h2>Niveaux de Difficulté</h2>
				<ul>
					<strong>Facile :</strong> Mots simple, 10 fautes maximum. <br>
					<strong>Normal :</strong> Mots modérés, 7 fautes maximum. <br>
					<strong>Difficile :</strong> Mots laborieux, 5 fautes maximum. <br>
					<strong>Abominable :</strong> Mots laborieux ou plus, propositions dans l\'ordre alphabétique, 10 fautes maximum. <br><br>
				</ul>

				<h2>Indice</h2>
				Utilisable une fois par partie, l\'indice vous donne une lettre au hasard du mot à deviner. Déconseillé de l\'utiliser dans le niveau abominable !<br><br>
			</div>';
	}
?>
