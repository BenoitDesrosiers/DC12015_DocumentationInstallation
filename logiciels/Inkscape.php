<?php
	$titrePage = "Guide d'installation d'Inkscape";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation d' Inkscape<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Inkscape est un logiciel de création et d'édition d'images vectorielles libre et gratuit.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>Espace disque dure: 184.2 Mo</p>
    <p>Système d'exploitation: Windows 2000, Windows XP, Windows Vista, Windows 7 et 8</p>
    <p>Mémoire vive: 512 Mo minimum</p>
    <p>Processeur: Pentium IV ou équivalent minimum</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://sourceforge.net/projects/inkscape/files/inkscape/0.48.5/Inkscape-0.48.5-1-win32.exe/download?use_mirror=iweb">cette page</a>.</p>
    <p>Le téléchargement devrait démarrer de par lui-même.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>1) Lancer l'exécutable(Double clic sur le fichier téléchargé).</p>
    
    <p>2) La première fenêtre apparaîtra et vous devez sélectionner la langue(tous en anglais).
	<br>Pour notre besoin, sélectionnez "French" pour la langue française.</br></p>
    
    <p>3) L’étape suivante nous indique de fermer tous les programmes utiliser pour mettre a jour certains fichiers système sans redémarrer votre ordinateur.</p>
   
    <p>4) Cliquer sur "Suivant".</p>
     
    <p>5) Vous devez lire la licence utilisateur et cliquer de nouveau le bouton "Suivant >".</p>
    
    <p>6) L’étape suivante présente de nombreuse option d'installation. Les options qui permettront à Inkscape de fonctionner correctement sont déjà sélectionner, mais certains sont 		modifiables</p>
	<ul><h3>Liste des options d'installation</h3>
		<li><strong>Éditeur SVG Inkscape (nécessaire)</strong> et <strong>Environnement GTK+ (nécessaire)</strong> devraient être inutilisable car nécessaire au programme.<br></br></li>
		<li><strong>Pour tous les utilisateurs</strong> : Permet a tous les utilisateurs de l'ordinateur d'utiliser le programme, si cette option est vide, seul l'utilisateur en 			cours pourra utiliser le programme.<br></br></li>
		<li><strong>Raccourcis</strong> se décline en plusieurs sous option:<br></br>
			<ul>
				<li><strong>Bureau</strong> créera un raccourci sur le bureau<br></br></li>
				<li><strong>Lancement rapide</strong> créera un raccourci dans la barre de tache pour lancement rapide<br></br></li>
				<li><strong>Ouvrir les fichiers SVG avec Inkscape</strong> forcera tous les fichiers SVG à ouvrir avec Inkscape<br></br></li>
				<li><strong>Menu contextuel</strong> créera un icon dans le menu Démarrer de votre ordinateur<br></br></li>
			</ul>
		</li>
		<li> <strong>Effacer les préférences personnelles</strong> permet de réinitialiser les préférences d'ancienne version déjà installée. Généralement ne pas cocher cette 			case.<br></br></li>
		<li> <strong>Fichiers additionnels</strong> se décline aussi en 2 sous-options(laisser cocher si vous etes un nouvel utilisateur):<br></br>
			<ul>
				<li><strong>Exemples</strong> installe des exemples d'utilisation.s<br></br></li>
				<li><strong>Didacticiels</strong> sont des tutorielles d'utilisation du programme.<br></br></li>
			</ul>		
		</li>
		<li><strong>Traductions</strong> offre un éventail de langue où Inkscape peut être traduit (laisser la case "français" active)<br></br></li>

	</ul>
    
    <p>7) Cliquer sur le bouton "Suivant >" lorsque les options précédentes vous conviennent.<br></br></p>
    
    <p>8) La fenêtre suivante vous demande où installer Inkscape. Par défaut, le programme s'installe dans "Program Files (x86)" pour les Windows 32 bit ou un nom similaire pour 64 		bits. En cas d'incertitude, laisser la case de "Dossier d'installation" a son état initial. Cliquer sur "Installer" lorsque vous êtes prêt a continuer l'installation.<br></br></p>
    <p>9) La fenêtre suivante présentera une barre de chargement montrant l’évolution de l'installation. Lorsque l'installation sera terminée, les boutons en bas à droite deviendront 		valide. Cliquer sur "Suivant >" pour continuer l'installation.<br></br></p>
    <p>10) Une nouvelle fenêtre vous offrira l'option de lancer Inkscape immédiatement, décocher la case "Lancer Inkscape" pour NE PAS lancer le programme.<br></br></p>
    <p>11) Finalement, le programme est installé et prêt à être utiliser, cliquez sur "Fermer" pour fermer la fenêtre d'installation.<br></br></p>
    


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>
