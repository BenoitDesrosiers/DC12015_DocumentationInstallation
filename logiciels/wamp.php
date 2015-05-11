<?php
	$titrePage = "Guide d'installation de WampServer";
	include '../php/entete.php';
?>

<div class='contenu'>

<h1>Guide d'installation de WampServer<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>WampServer est une plate-forme de développement Web sous Windows pour des applications Web dynamiques à l’aide du serveur Apache2, du langage de scripts PHP et d’une base de données MySQL. Il possède également PHPMyAdmin pour gérer plus facilement vos bases de données.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de WampServer nécessite, Windows Vista, Windows 7 ou Windows 8.</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://www.wampserver.com">le site de WampServer</a>. Télécharger la version 32 ou 64 bits selon la version du système. </p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancez l'exécutable. Ensuite, cliqué sur <i>Next</i>.</p>
    <img alt="Lancement de l'installation" src="../ressources/images/wamp/wamp-1.png"/>
	<p>Acceptez le contrat de licence. Ensuite, cliquez sur <i>Next</i>.</p>
    <img alt="Accepter le contrat de licence." src="../ressources/images/wamp/wamp-2.png"/>
    <p>Sélectionnez le dossier où vous voulez installer le logiciel, puis cliquez sur <i>Next</i>.</p>
    <img alt="Destination de l'installation du logiciel" src="../ressources/images/wamp/wamp-3.png"/>
    <p>Sélectionnez les icones additionnels que vous voulez créer, puis cliquez sur <i>Next</i>.</p>
    <img alt="Choix des icones." src="../ressources/images/wamp/wamp-4.png"/>
    <p>Cliquez sur <i>Install</i> pour lancer l'installation.</p>
	<img alt="Résumé des choix précédents" src="../ressources/images/wamp/wamp-5.png"/>
    <p>Attendre que l'installation se termine.</p>
    <img alt="Installation en cours" src="../ressources/images/wamp/wamp-6.png"/>
    <p>Sélectionnez le navigateur internet par defaut, puis cliquez sur <i>Ouvrir</i>.</p>
    <img alt="Sélection du navigateur internet" src="../ressources/images/wamp/wamp-7.png"/>
    <p>Entrez le SMTP et le email. Vous pouvez laisser les valeurs par defaut. Cliquez sur <i>Next</i>.</p>
    <img alt="Destination du raccourci du logiciel" src="../ressources/images/wamp/wamp-8.png"/>
    <p>L'installation est terminée. Si vous ne désirez pas lancer le logiciel tout de suite, décochez la case <i>Launch WampServer 2 now</i>. Cliquez sur <i>Finish</i> pour quitter l'installateur.</p>
    <img alt="Installation terminée" src="../ressources/images/wamp/wamp-9.png"/>
<span style="color:red">Comment je fais pour savoir si l'installation c'est bien passé ?</span>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://www.wampserver.com/">Site de WampServer</a></li>


</div>

<?php
	include '../php/pieddepage.php'
?>