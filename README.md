# Manuel d'utilisation de JeuDuPendu

Bienvenue dans le manuel d'utilisation de JeuDuPendu ! Trouvez le mot masqué sous vos yeux en proposant les lettres de vos choix. Attention : une fois le bonhomme pendu, vous avez perdu ! Alors choisissez bien vos lettres !

## Prérequis

Avant d'utiliser JeuDuPendu, assurez-vous de remplir les prérequis suivants :

- Avoir une distribution Apache installée. Je recommande l'utilisation de XAMPP, que vous pouvez télécharger [ici](https://www.apachefriends.org/fr/download.html).
- Avoir PHP installé sur votre système.

## Installation

1. Clonez le dépôt de l'application depuis GitHub en utilisant la commande suivante dans le terminal :

   ```bash
   git clone https://github.com/ClemLy/JeuDuPendu.git

2. Si vous utilisez XAMPP, déplacez le dossier obtenu dans le répertoire `XAMPP/htdocs`.

3. Pour accéder à l'application, ouvrez votre navigateur et entrez le lien suivant : [http://localhost/JeuDuPendu/site.php](http://localhost/JeuDuPendu/site.php).


## Fonctionnalités

### Thèmes et difficultés

Lorsque vous accédez au site, vous pouvez choisir vos thèmes et votre difficulté allant de Facile à Abominable. Les thèmes sont variés : Programmation, Musique, Sports, Cinéma, Animaux, Mode, et plus encore !

Vous avez la possibilité de laisser le programme choisir votre thème et/ou votre difficulté en séléectionnant "Aléatoire".

Cliquez sur "Commencez !" et c'est parti !

### But du jeu

Vous devez trouver le mot masqué afin de remporter la partie. Afin de vous aider, la première lettre du mot est affiché. Proposez vos lettres afin trouver le mot. À chaque erreur, vous verrez un bonhomme pendu se dessiner, une fois le dessin complet, vous avez perdu.

### Indices

Lorsque le mot est trop difficile, vous pouvez demander un indice, qui révèlera aléatoirement une lettre du mot. Vous pouvez utiliser qu'un seul indice par partie.

### Lettres proposées

Vous pouvez regarder les lettres que vous avez déjà proposé afin d'éviter toute répétition. Répéter une lettre que vous avez déjà proposé ne comptera pas pour une erreur.

### Dessin du pendu

Un bonhomme pendu se dessine à chacune de vos erreur, une fois le dessin terminé vous avez perdu.

### Nouvelle partie

Vous avez la possibilité de faire une nouvelle partie en cliquant sur "Nouvelle Partie", ainsi vous pouvez jouer au jeu autant que vous voulez.

## Limites de l'application

### Un indice inutile

Étant donné que la première lettre du mot masqué n'est pas stocké, il est possible que l'indice soit la première lettre du mot, ce qui est donc inutile. Il est possible de contourner ce problème en vous assurant de proposer la première lettre du mot afin de le stocker, cela ne compte pas comme une erreur.

---

Profitez du jeu du pendu avec l'application JeuDuPendu !
