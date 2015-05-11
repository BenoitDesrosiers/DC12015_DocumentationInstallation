<?php
	$titrePage = "Guide d'installation de Case Complete";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

	<h1>Guide d'installation de Case Complete<h1>

	<div id="table_des_matieres">
		<a href="#presentation"><h2>Présentation</h2></a>
		<a href="#prealables"><h3>Préalables</h3></a>
		<a href="#windows"><h2>Windows</h2></a>
		<a href="#windows-telechargement"><h3>Téléchargement</h3></a>
		<a href="#windows-installation"><h3>Procédure d'installation</h3></a>
		<a href="#voir-aussi"><h2>Voir aussi</h2></a>
	</div>

	<h2><a name="presentation">Présentation</a></h2>
		<p>CaseComplete est une application de gestion d'exigences qui permet aux analystes d'affaires et aux développeurs de logiciels de créer et de gérer des cas d'utilisations et des spécifications de logiciels. CaseComplete permet d'éditer la partie textuelle des cas d'utilisations et des exigences dans un environnement guidé et la capacité de créer divers types de diagrammes incluant des diagrammes des cas d'utilisations, esquisses d'interfaces utilisateur graphiques et des organigrammes.</p>

	<h3><a name="windows-prealables">Préalables</a></h3>
		<ul>
			<li>Windows XP avec service pack 2 ou plus récent.</li>
			<li>.Net Framework 4.5 ou plus récent.</li>
			<li>Pour générer des rapports Word et visionner le tutoriel. Il vous faudra Microsoft Word 2003 ou plus récent.</li>
			<li>Pour générer des rapports Excel. Il vous faudra Microsoft Excel 2003 ou plus récent.</li>
			<li>Pour visionner le tutoriel. Il vous faudra un lecteur PDF.</li>
		</ul>

	<h2><a name="windows">Windows</a></h2>

	<h3><a name="windows-telechargement">Téléchargement</a></h3>
		<p>Des liens de téléchargement peuvent être trouvés sur <a href="http://casecomplete.com/newversion">http://casecomplete.com/newversion</a>.</p>
		<p>CaseComplete 2015 (9 mai 2015): <a href="http://serlio.s3.amazonaws.com/CaseCompleteSetup2015.exe">Téléchargement direct.</a></p
		
	<h3><a name="windows-installation">Procédure d'installation</a></h3>
		<p>Cliquer sur <i>enregistrer le fichier</i> et executer l'installateur qui devrait se trouver dans le dossier téléchargement.</p>
		<img alt="Telechargement" src="../ressources/images/caseComplete/telechargement.png"/>
		<p>Attendre le téléchargement de l'assistant d'installation.</p>
		<img alt="Installateur" src="../ressources/images/caseComplete/installateur.png"/>
		<p>Lire l'accord de licence et sélectionner <i>I accept the terms of the license agreement</i> ensuite cliquer sur <i>Next</i>.</p>
		<img alt="Licence" src="../ressources/images/caseComplete/licence.png"/>
		<p>Sélectionner le type d'installation, <i>Typical</i> est recommandé, ensuite cliquer sur <i>Next</i>.</p>
		<img alt="Configuration" src="../ressources/images/caseComplete/configuration.png"/>
		<p>Sélectionner le répertoire de destination à l'aide du bouton <i>Change...</i>. Une fois le répertoire choisi cliquer sur <i>Next</i>.</p>
		<img alt="Destination" src="../ressources/images/caseComplete/destination.png"/>
		<p>Attendre la fin de l'installation.</p>
		<img alt="Installation" src="../ressources/images/caseComplete/installation.png"/>
		<p>Sélectionner l'option <i>Run CaseComplete 2015 now</i> si vous voulez démarrer CaseComplete suite à la fermeture de l'installateur. Cliquer sur <i>Finish</i>.</p>
		<img alt="Succès" src="../ressources/images/caseComplete/succes.png"/>
		<p>Pour activer CaseComplete aller dans l'onglet <i>Tools</i> dans la section <i>License</i> et appuyer sur <i>Activate</i>.</p>
		<img alt="Activation" src="../ressources/images/caseComplete/activation.png"/>
		<p>Entrer votre nom, votre organisation (optionnel) et numéro de série (fourni par le professeur). Ensuite cliquer sur <i>Activate</i>.</p>
		<img alt="Clé d'activation" src="../ressources/images/caseComplete/cleActivation.png"/>
		<p>CaseComplete est maintenant activé et prêt à être utilisé.<p>
		<img alt="Actif" src="../ressources/images/caseComplete/actif.png"/>
	

	<h2><a name="voir-aussi">Voir aussi:</a></h2>
		<ul>
			<li><a href="http://casecomplete.com/">Site officiel de Case Complete </a></li>
		</ul>
</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>