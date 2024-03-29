<?php
	$themes = [
		'Programmation' => [
			'Facile'      => ["HTML", "CSS", "PHP", "PYTHON", "GITHUB", "JAVA", "C++", "RUBY", "SWIFT", "SQL", "DOCKER", "LINUX", "API", "JSON", "NODEJS", "REACT", "ANGULAR", "MYSQL", "DATABASE", "ALGORITHME"],
			'Normal'      => ["JAVASCRIPT", "BACKEND", "FRONTEND", "FRAMEWORK", "VARIABLE", "FUNCTION", "ARRAY", "LOOP", "OBJECT", "AJAX", "GIT", "HEROKU", "MONGODB", "AWS", "REST", "GRAPHQL", "MVC", "RECURSION", "DESIGNPATTERN", "DEBUGGING"],
			'Difficile'   => ["PROGRAMMATION", "DEVELOPPEMENT", "EFFICACITE", "SECURITE", "PERFORMANCE", "OPTIMISATION", "PARADIGME", "CONCURRENCE", "THREAD", "CACHE", "BITWISE", "HEAP", "STACK", "BUFFER", "SYNCHRONISATION", "MULTITHREADING", "COMPILATEUR", "INTERPRETEUR", "ASSEMBLEUR"],
			'Abominable'  => ["ORDINATEUR", "INTELLIGENCE ARTIFICIELLE", "CRYPTOGRAPHIE", "MICROSERVICES", "BLOCKCHAIN", "REALITE VIRTUELLE", "BIOMETRIE", "DEEP LEARNING", "CRYPTOJACKING", "PHISHING", "ZERO DAY", "ROOTKIT", "EXPLOIT", "FIREWALL", "INTRUSION", "PENTESTING", "BOTNET", "MALWARE", "RANSOMWARE"]
		],
		'Animaux' => [
			'Facile'      => ["CHIEN", "CHAT", "LION", "TIGRE", "POULE", "SOURIS", "CANE", "COQ", "PERRUCHE", "LAPIN", "HAMSTER", "CHATON", "CHIOT", "AGNEAU", "COCHON", "VACHE", "OISEAU", "CHOUETTE", "POISSON", "SERPENT"],
			'Normal'      => ["ELEPHANT", "GIRAFE", "SINGE", "OURS", "RHINOCEROS", "KANGOUROU", "PANDA", "PERROQUET", "TORTUE", "CAMELEON", "HIBOU", "ALLIGATOR", "CASTOR", "GUEPARD", "HUMMINGBIRD", "KANGAROO", "KOOKABURRA", "LIZARD", "OCTOPUS", "ZEBRA"],
			'Difficile'   => ["HIPPOPOTAME", "CROCODILE", "DINOSAURE", "GRIZZLY", "JAGUAR", "KOALA", "LEOPARD", "MANDRILL", "MEERKAT", "NUMBAT", "ORANGUTAN", "OSTRICH", "PANGOLIN", "QUOKKA", "RACCOON", "REDPANDA", "SLOTH", "TIGER", "TORTOISE", "WALRUS"],
			'Abominable'  => ["ORNITHORYNQUE", "AXOLOTL", "QUOKKA", "NUDIBRANCHE", "XYLOPHONE", "ZEBU", "ZORSE", "YAK", "YETI", "WOLF", "WOMBAT", "VIPERFISH", "UMBERBIRD", "TOUCAN", "SQUIRREL", "SPARROW", "ROOSTER", "RABBIT", "PORCUPINE", "PENGUIN"]
		],
		'Cuisine' => [
			'Facile'      => ["SEL", "POIVRE", "SUCRE", "HUILE", "EAU", "LAIT", "PAIN", "OEUF", "PATES", "RIZ", "VIANDE", "LEGUME", "FRUIT", "FROMAGE", "SALADE", "SAUCE", "POMME", "NOIX", "POULET", "SAUCISSE"],
			'Normal'      => ["EPICES", "RECETTE", "CUILLERE", "FOUR", "COUTEAU", "ASSAISONNEMENT", "GOURMANDISE", "ASSIETTE", "BOUILLON", "CASSEROLE", "CUISINIER", "DEGUSTATION", "MARMITE", "MARINER", "PATISSERIE", "POELE", "GRILLADE", "FOURCHETTE", "CUISSON"],
			'Difficile'   => ["GASTRONOMIE", "SAUCISSON", "CANNELLE", "COCKTAIL", "GRILLADE", "GOURMET", "HARICOT", "HACHIS", "JAMBON", "LEGUMES", "MERINGUE", "NOUILLES", "OLIVE", "PAMPLEMOUSSE", "QUICHE", "RAGOUT", "SAUMON", "TARTINE", "VELOUTE", "WOK"],
			'Abominable'  => ["ESCARGOT", "CROISSANT", "HORS D'OEUVRE", "TARTE TATIN", "MACARON", "BOEUF BOURGUIGNON", "CANNELLONI", "COQ AU VIN", "MOUSSE AU CHOCOLAT", "POT AU FEU", "RATATOUILLE", "SOUFFLE", "TIRAMISU", "ZUCCHINI", "WASABI", "HOLLANDAISE", "QUINOA", "VICHYSSOISE", "YOGURT", "ZITI"]
		],
		'Sports' => [
			'Facile'      => ["FOOTBALL", "BASKETBALL", "TENNIS", "GOLF", "RUGBY", "VOLLEYBALL", "BASEBALL", "HOCKEY", "CYCLISME", "ATHLETISME", "NATATION", "BOXE", "SKI", "SURF", "PLANCHE A VOILE", "KARATE", "JUDO", "F1", "ESCALADE", "PLONGEE"],
			'Normal'      => ["ATHLETE", "ENTRAINEMENT", "COMPETITION", "CHAMPIONNAT", "JOUEUR", "ARBITRE", "COACH", "EQUIPE", "STRATEGIE", "DEFAITE", "VICTOIRE", "SCORE", "ARBITRAGE", "HALTEROPHILIE", "MARATHON", "SAUT EN HAUTEUR", "COURSE DE FOND", "CROSSFIT", "CATCH", "SURF"],
			'Difficile'   => ["HALTEROPHILIE", "SAUT A LA PERCHE", "LUTTE", "BIATHLON", "TRIATHLON", "PENTATHLON", "HEPTATHLON", "DECATHLON", "KITESURF", "ULTIMATE FRISBEE", "VOILE", "EQUITATION", "PARAPENTE", "RAFFTING", "PENTATHLON MODERNE", "BADMINTON", "SQUASH", "GOLF", "ESCALADE", "CURLING"],
			'Abominable'  => ["CRICKET", "PESAPALLO", "KABADDI", "HURLING", "POLO", "OINA", "KIN BALL", "BASE JUMPING", "JORKYBALL", "UNDERWATER HOCKEY", "EXTREME IRONING", "BOBSLEIGH", "ROCK CLIMBING", "ROLLER DERBY", "WINGSUIT FLYING", "WATER POLO", "KARATE", "SURFING", "SPEED SKATING", "BANDY"]
		],
		'Musique' => [
			'Facile'      => ["NOTE", "CHANSON", "ARTISTE", "ALBUM", "INSTRUMENT", "MELODIE", "ACCORDEON", "GUITARE", "PIANO", "BATTERIE", "VIOLON", "FLUTE", "TROMPETTE", "SAXOPHONE", "SYMPHONIE", "JAZZ", "BLUES", "ROCK", "POP", "RAP"],
			'Normal'      => ["CONCERT", "PARTITION", "COMPOSITEUR", "RADIO", "ENREGISTREMENT", "MICROPHONE", "AMPLIFICATEUR", "DUO", "SOLO", "FESTIVAL", "DJ", "REMIX", "RHYTHM AND BLUES", "ELECTRO", "HIP HOP", "COUNTRY", "REGGAE", "CLASSIQUE", "METAL", "ALTERNATIF"],
			'Difficile'   => ["HARMONICA", "UKULELE", "MANDOLIN", "HARP", "BANJO", "XYLOPHONE", "DULCIMER", "HARPSICHORD", "TAMBOURINE", "KALIMBA", "OBOE", "BAGPIPES", "TUBA", "SITAR", "CIMBALOM", "ERHU", "THEREMIN", "ZITHER", "OCARINA", "DIDGERIDOO"],
			'Abominable'  => ["RAGTIME", "SYNTHESIZER", "CITAR", "SAZ", "DHRUPAD", "KOMUNGUITAR", "SHENG", "NYCKELHARPA", "GAMBA", "TANPURA", "DIDJERIDU", "CONTRABASSOON", "BASOON", "CLAVICHORD", "OCARINA", "MELLOTRON", "CONTRABASS", "BALALAIKA", "SARANGI", "ZITHER"]
		],
		'Voyages' => [
			'Facile'      => ["VACANCES", "PLAGE", "MONTAGNE", "CAMPING", "CROISIERE", "AVENTURE", "EXPLORATION", "TOURISME", "GUIDE", "CARTE", "HOTEL", "AVION", "TRAIN", "VOITURE", "BAGAGE", "PASSPORT", "SEJOUR", "EXCURSION", "VISITE", "DETENTE"],
			'Normal'      => ["ITINERAIRE", "AGENCE DE VOYAGE", "RESERVATION", "VALISE", "PAYSAGE", "MONUMENT", "CARNET DE VOYAGE", "SOUS MARIN", "JETLAG", "ESCALE", "FARNIENTE", "SOUVENIR", "PHOTOGRAPHIE", "BILLET", "VISA", "VOYAGEUR", "EXPATRIATION", "TERRE INCONNUE", "ECOTOURISME"],
			'Difficile'   => ["EXPEDITION", "PELERINAGE", "VOYAGE INTERSTELLAIRE", "ROAD TRIP", "TREKKING", "RANDONNEE", "VOLCANOLOGIE", "ARCHAEOLOGIE", "ANTHROPOLOGIE", "PHILOLOGIE", "OENOLOGIE", "PLONGEE SOUS MARINE", "MICROAVENTURE", "GEOCACHING", "CYCLOTOURISME", "PARAPENTE", "VOL EN MONTGOLFIERE", "DELTA PLANE", "CIRCUIT CULTUREL", "VOYAGE SPATIAL"],
			'Abominable'  => ["TOUR DU MONDE", "TRAVERSEE ATLANTIQUE", "TOURISME SPATIAL", "ASCENSION EVEREST", "TRAIL", "COURSE AUTOUR DU MONDE", "VOYAGE EN SOLO", "GRAND TOUR", "RANDONNEE TRANSATLANTIQUE", "VOYAGE EN BALLON", "EXPEDITION POLAIRE", "SOUS MARIN HABITABLE", "CIRCUIT DU POLE NORD", "TOUR DE L'ANTARCTIQUE", "RAID DANS LE SAHARA", "SURVIE EN MILIEU HOSTILE", "TRIATHLON EXTREME", "EXPEDITION LUNAIRE", "VOYAGE SUR MARS", "CROISIERE AUTOUR DU MONDE"]
		],
		'Cinéma' => [
			'Facile'      => ["FILM", "ACTEUR", "REALISATEUR", "SCENARIO", "AFFICHE", "OSCARS", "FESTIVAL", "CAMERA", "ROLE", "CINEMA", "SON", "LUMIERE", "SEQUENCE", "COSTUME", "PLATEAU", "GENRE", "HOLLYWOOD", "STAR"],
			'Normal'      => ["INTRIGUE", "BANDE ORIGINALE", "EFFETS SPECIAUX", "MONTAGE", "NOIR ET BLANC", "COSTUME DESIGN", "ANIMATION", "DOCUMENTAIRE", "CAMEO", "DOUBLEUR", "CINEMATOGRAPHIE", "PLAN SEQUENCE"],
			'Difficile'   => ["METTEUR EN SCENE", "CINEMATHEQUE", "BLOCKBUSTER", "CRITIQUE", "FILMOGRAPHIE", "PALME D'OR", "REALISATION", "SCRIPT", "DISTRIBUTION", "FOURNISSEUR", "MONTAGE", "CINEMATIQUE", "CINEMASCOPE", "CINEPHILE", "PROJECTEUR", "STAR SYSTEM", "COSTUMIER", "CINEMATOGRAPHE", "SALLES DE CINEMA", "POSTPRODUCTION"],
			'Abominable'  => ["PARISIEN", "CINEMATOGRAPHIQUE", "CINEMATOGRAPHIC", "CINEMATOGRAPH", "CINEMATOGRAPHER", "CINEMATOGRAPHY", "CINEMATOGRAPHERS", "CINEMATOGRAPHIST", "CINEMATOGRAPHISTS", "CINEMATOLOGIST", "CINEMATOLOGISTS", "CINEMATOLOGY", "CINEMATHESES", "CINEMATHEQUE", "CINEMATHEQUES", "CINEMATICS", "CINERARY", "CINERARIUM", "CINERARIUMS", "CINERARY", "CINERARIUM"]
		],
		'Mode' => [
			'Facile'      => ["MODE", "STYLE", "FASHION", "TENDANCE", "DESIGN", "HAUTE COUTURE", "STYLISTE", "MANNEQUIN", "DEFILE", "COULEUR", "ACCESSOIRE", "MATERIAU", "MARQUE", "INDUSTRIE", "CREATEUR", "COUTURE", "TEXTILE", "VETEMENT", "CHAUSSURE", "BIJOUX"],
			'Normal'      => ["PRET A PORTER", "COLLECTION", "TAILLEUR", "ROBE", "CHEMISE", "PANTALON", "JUPE", "VINTAGE", "FOULARD", "LUNETTES", "CHAUSSURES", "SAC", "BIJOUTERIE", "CEINTURE", "MAILLOT", "ACCESSOIRE", "COIFFURE", "MAQUILLAGE", "PARFUM", "MONTRE"],
			'Difficile'   => ["COUTURIER", "HAUTE COUTURE", "DEFILÉ DE MODE", "MANNEQUINAT", "STYLISME", "COUTURE SUR MESURE", "CREATEUR DE MODE", "GRIF", "TOILETTAGE", "EGERIE", "FASHIONISTA", "GARDE ROBE", "RELOOKING", "FASHION WEEK", "STYLISTE PERSONNEL", "DESIGNER TEXTILE", "FOULARD EN SOIE", "ROBE DE SOIREE", "MODE ETHIQUE", "COUTURE FLAMBOYANTE"],
			'Abominable'  => ["CHIFFONNIER", "MODE VINTAGE", "CATWALK", "MANNEQUINAT", "COUPE COUTURE", "HAUTE COUTURE"]
		],
		'Science' => [
			'Facile'      => ["SCIENCE", "MATHEMATIQUES", "PHYSIQUE", "CHIMIE", "BIOLOGIE", "ASTRONOMIE", "GEOLOGIE", "ECOLOGIE", "GENETIQUE", "BOTANIQUE", "ZOOLOGIE", "PSYCHOLOGIE", "ANTHROPOLOGIE", "INFORMATIQUE", "STATISTIQUES", "RECHERCHE", "EXPERIENCE", "LABORATOIRE", "HYPOTHESE"],
			'Normal'      => ["EQUATION", "THEORIE", "MODELE", "ATOME", "MOLECULE", "CELLULE", "ORGANISME", "ECOSYSTEME", "EVOLUTION", "DNA", "RNA", "PROTEINE", "NEURONE", "SYNAPSE", "CERVEAU", "CONSCIENCE", "BIODIVERSITE", "CLIMATOLOGIE", "ENERGIE", "MAGNETISME"],
			'Difficile'   => ["QUANTIQUE", "RELATIVITE", "STRING THEORY", "PARTICULES ELEMENTAIRES", "THEORIE DU CHAOS", "SYMETRIE", "MATTER WAVE INTERFERENCE", "HEISENBERG UNCERTAINTY", "DARK MATTER", "DARK ENERGY", "BLACK HOLE", "EXOPLANET", "STRING THEORY", "NEUTRINO", "SUPERNOVA", "BIOTECHNOLOGIE", "NANOTECHNOLOGIE", "CYBERNETIQUE", "INTELLIGENCE ARTIFICIELLE", "ROBOTIQUE"],
			'Abominable'  => ["EPISTEMOLOGIE", "ONTOLOGIE", "PHILOSOPHIE DE LA SCIENCE", "METHODOLOGIE SCIENTIFIQUE", "PARADIGME SCIENTIFIQUE", "THESE", "ANTITHESE", "SYNTHESE", "AXIOME", "POSTULAT", "THEOREME", "HYPOTHESE DE TRAVAIL", "REVUE PAR LES PAIRS", "DOUBLE AVEUGLE", "METHODE SCIENTIFIQUE", "DEMARCHES SCIENTIFIQUES", "RECHERCHE FONDAMENTALE", "RECHERCHE APPLIQUEE", "EXPERIENCE DE PENSEE", "ETHIQUE SCIENTIFIQUE"]
		]
	];

	$niveauxDifficulte = [
		'Facile'    => ['erreurs_initiales' => 0],
		'Normal'    => ['erreurs_initiales' => 3],
		'Difficile' => ['erreurs_initiales' => 5],
		'Abominable' => ['erreurs_initiales' => 0, 'contrainte_lettre' => true]
	];
?>