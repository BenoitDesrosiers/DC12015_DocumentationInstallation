<?php
	$titrePage = "Guide d'installation d'Avs4You Video Editor";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Microsoft&#169 Sql server 2014 Management Studio<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
	<a href="#linux"><h2>Linux</h2></a>
	<a href="#verification"><h2>Vérification de l'installation</h2></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Microsoft SQL Server 2014 Express est un système de gestion de données puissant et fiable, proposé gratuitement. Il offre un magasin de données complet et fiable pour les applications bureautiques et sites web légers.</p>

<h2><a name="windows">Windows</a></h2>

	<h3><a name="windows-prealables">Préalables</a></h3>
		<p>L'installation de SQL server 2014 nécessite Windows (7 et 8).</p>
		<p>Le logiciel demande minimalement un processeur AMD ou Intel single-core 1GHZ ou plus, 512mo de RAM ainsi qu'une carte son compatible windows. Il est aussi nécessaire d'avoir au moins 4.2Go d'espace disque libre pour l'installation</p>

	<h3><a name="windows-telechargement">Téléchargement</a></h3>
		<p>Le lien pour télécharger le logiciel se trouve sur <a href="http://www.microsoft.com/en-US/download/details.aspx?id=42299">cette page</a>.</p>
		<p>L'installeur prend environ 853mo d'espace</p>
		<img alt="Telechargement_1" src="../ressources/images/sqlServer2014ManagementStudio/etape_1.png">
		<p>Après avoir cliqué sur le bouton télécharger, il faut choisir le fichier ExpressAndTools, commeindiqué sur l'image:</p>
		<img alt="Telechargement_2" src="../ressources/images/sqlServer2014ManagementStudio/etape_2.png">

	<h3><a name="windows-installation">Procédure d'installation</a></h3>
		<p>Cliquer sur le bouton <i>Oui</i> pour valider l'installation</p>
		<img alt="Vallidation des droits d'installation" src="../ressources/images/sqlServer2014ManagementStudio/etape_3.png"/>
		<p>Sélectionnez un répertoire pour l'extraction des fichiers d'installation en cliquant sur <i>Parcourir</i>. ATTENTION: Ceux-ci nécessitent un espace de 680mo supplémentaire. Laisser par défaut sinon. Appuyer sur <i>Ok</i> pour poursuivre.</p>
		<img alt="Repertoire d'extraction" src="../ressources/images/sqlServer2014ManagementStudio/etape_4.png"/>
		<p>Patientez pendant l'extraction des fichiers</p>
		<img alt="Extraction des fichiers" src="../ressources/images/sqlServer2014ManagementStudio/etape_5.png"/>
		<p>Cliquer sur <i>New SQL Server stand-alone installation or add [...] </i> pour installer une nouvelle instance de Sql server</p>
		<img alt="Centre d'installation" src="../ressources/images/sqlServer2014ManagementStudio/etape_6.png"/>
		<p>Patienter pendant la préparation du logiciel d'installation</p>
		<img alt="Préparation de l'assistant d'installation" src="../ressources/images/sqlServer2014ManagementStudio/etape_7.png"/>
		<p>Prendre connaissance des conditions d'utilisation du logiciel, cocher la case <i>I accept the license terms.</i>, puis cliquer sur <i>Next</i></p>
		<img alt="Condition d'utilisation" src="../ressources/images/sqlServer2014ManagementStudio/etape_8.png"/>
		<p>Sélection des fonctionnalités à installer. Cocher toute les cases commeindiqué, puis laisser les répertoires d'installation comme tel pour éviter des configurations supplémentaires. Cliquer sur <i>Next > </i> pour continuer.</p>
		<img alt="fonctionnalités à installer" src="../ressources/images/sqlServer2014ManagementStudio/etape_9.png"/>
		<p>Nommer l'instance de SQL server dans le champ <i>Named instance</i> si nécessaire, laisser le nom par défaut sinon. Cliquer sur <i>Next ></i> pour continuer</p>
		<img alt="Attribution du nom de l'instance" src="../ressources/images/sqlServer2014ManagementStudio/etape_10.png"/>
		<p>Configuration du serveur SQL. Laisser tous le contenu par défaut et cliquer sur <i>Suivant</i> pour continuer.</p>
		<img alt="Configuration du serveur 1" src="../ressources/images/sqlServer2014ManagementStudio/etape_11.png"/>
		<p>Suite de la configuration du serveur SQL. S'assurer que la ligne <i>Windows authentication mode</i> est sélectionnée, puis choisir l'utilisateur de l'ordinateur qui sera l'administrateur du serveur SQL. Cliquer sur <i>Next > </i> pour continuer</p>
		<img alt="Configuration du serveur 2" src="../ressources/images/sqlServer2014ManagementStudio/etape_12.png"/>
		<p>Patientez pendant l'installation du serveur SQL</p>
		<img alt="Installation" src="../ressources/images/sqlServer2014ManagementStudio/etape_13.png"/>
		<p>S'assurer que toutes les fonctionalités ont été correctement installée, puis cliquer sur <i>Close</i> pour Quitter l'assistant d'installation.</p>
		<img alt="Résumé des actions effectuées" src="../ressources/images/sqlServer2014ManagementStudio/etape_14.png"/>
		<p>Cliquer sur le X rouge en haut à droite pour fermer le centre d'installation de SQL server.</p>
		<img alt="Fenêtre du centre d'installation" src="../ressources/images/sqlServer2014ManagementStudio/etape_15.png"/>
		
		

<h2><a name="linux">Linux</a></h2>
	<p>Il faut savoir qu'il n'y a actuellement pas de version linux de ce logiciel. Le seul système d'exploitation compatible est Windows.</p>

<h2><a name="verification">Vérification de l'installation</a></h2>
	<p>Afin de savoir si l'installation s'est bel et bien effectué correctement, procéder comme suit.</p>
	<p>Localiser l'icône d' sur votre bureau et double cliquer dessus. </p>
	<img alt="iconeBureau" src="../ressources/images/sqlServer2014ManagementStudio/iconeBureau.png"/>
	<p>Le logiciel demande à se connecter au serveur de base de donnée qui est présentement en marche sur votre ordinateur. Il faut indiquer le nom du serveur que vous avez utilisé lors de l'installation plus haut, puis cliquer sur <i>Connect</i></p>
	<img alt="connexion" src="../ressources/images/sqlServer2014ManagementStudio/connexion.png"/>
	<p>L'interface du logiciel devrai ressembler à ceci:</p>
	<img alt="interface" src="../ressources/images/sqlServer2014ManagementStudio/interface.png"/>		
	<p>Si c'est le cas, alors tout s'est bien déroulé!</p>
	<p>Vous pouvez maintenant créer vos requêtes SQL en utilisant le bouton <i>New Query</i>
	<img alt="interface" src="../ressources/images/sqlServer2014ManagementStudio/boutonNewQuery.png"/>
	<p>C'est maintenant à vous de créer la magie!</p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://www.microsoft.com/fr-ca/server-cloud/products/sql-server/default.aspx">Site officiel pour Microsoft&#169 SQL Server</a></li>

</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>