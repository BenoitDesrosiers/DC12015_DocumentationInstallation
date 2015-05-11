<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Google Chrome<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-telechargement"><h3>Téléchargement</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Chrome est un navigateur web privateur développé par Google basé sur le projet libre Chromium fonctionnant sous Windows, Mac, Linux, Android et iOS. Google Chrome est identique à Chromium hormis un logo différent et quelques fonctionnalités en moins ou en développement.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation du navigateur Google Chrome nécessite Windows XP SP2 ou ultérieur,Windows Vista,7 ou 8.</p>
	<p>Processeur: Intel Pentium 4 ou ultérieur </p>
	<p>Espace sur disque dur: au moins 350 mégaoctets </p>
	<p>Mémoire vive(RAM): Au moins 512 mégaoctets </p>
	<p>Les pré-requis sont également disponible <a href="https://support.google.com/chrome/answer/95346?hl=fr">ici</a> </p>
    <p>Vous devez définir si votre système est un système 32 ou 64 bits.Pour ce faire, 
	ouvrez le menu Démarrer,puis faite un clic droit sur « Ordinateur », et ensuite un clic gauche sur « Propriétés ».
	Cette information se trouvera vis-à-vis la ligne « Type du système ».Il est important de télécharger la bonne version de l’installateur(32 ou 64 bits) afin de permettre une utilisation optimale de Google Chrome.</p>
<span style="color:red">très bien, mais mal formaté ... même chose pour linux</span>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Vous pouvez télécharger Google Chrome sur <a href="https://www.google.com/chrome/browser/desktop/">cette page</a>.</p>
	<p>Assurer vous que le bon installeur sera télécharger(regarder sous le bouton bleu "Télécharger Google Chrome" ce qui est écrit).Si ce n'est pas le bon système
	cliquer sur "Télécharger Chrome pour une autre plate-forme" en dessous en choissisez le bon système"</p>
	<p>Lorsque vous aurez cliquer, une fenêtre apparaîtra avec les Conditions d'utilisation de Chrome(que vous pourrez lire éventuellement..),puis sélectionner "Accepter et installer"</p>
    <p>En date du 23 avril 2015, la version la plus récente est 42.0.2311.90 m</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable Chromesetup.exe téléchargé.<br>Patientez le temps du téléchargement de Chrome. <br>
	<img alt="Téléchargement de chrome" src="../ressources/images/chrome/downchrome.jpg"/>
	Notez que l'installation de Chrome est presque entièrement automatisé(quasiment).<br>
	<img alt="Installation de chrome" src="../ressources/images/chrome/installchrome.jpg"/><br>À la fin de l'installation,le navigateur Chrome s'ouvrira automatiquement</p>
    <img alt="Ouverture de chrome" src="../ressources/images/chrome/main.jpg"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>L'installation du navigateur Google Chrome nécessite Linux Ubuntu 12.04 ou ultérieur, Debian 7 ou ultérieur, OpenSuse 12.2 ou ultérieur ou encore Fedora Linux 17</p>
	<p>Processeur: Intel Pentium 4 ou ultérieur </p>
	<p>Espace sur disque dur: au moins 350 mégaoctets </p>
	<p>Mémoire vive(RAM): Au moins 512 mégaoctets </p>
	<p>Les pré-requis sont également disponible <a href="https://support.google.com/chrome/answer/95346?hl=fr">ici</a> </p>
    <p>Vous devez définir si votre système est un système 32 ou 64 bits.Pour ce faire,
	ouvrez le terminal du système(en recherchant « terminal »),puis entrez la commande suivante : uname –m .Puis appuyer sur Entrée.Si le terminal affiche x86_64, cela signifie que votre système est 64 bits.Sinon,votre système est un 32bits.</p> 	
	<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Vous pouvez télécharger Google Chrome sur <a href="https://www.google.com/chrome/browser/desktop/">cette page</a>.</p>
	<p>Assurer vous que le bon installeur sera télécharger(regarder sous le bouton bleu "Télécharger Google Chrome" ce qui est écrit).Si ce n'est pas le bon système
	cliquer sur "Télécharger Chrome pour une autre plate-forme" en dessous en choissisez le bon système"</p>
	<p>Lorsque vous aurez cliquer, une fenêtre apparaîtra avec les Conditions d'utilisation de Chrome(que vous pourrez lire éventuellement..),puis sélectionner "Accepter et installer"</p>
    <p>En date du 23 avril 2015, la version la plus récente est 42.0.2311.90 m</p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
<p>Lancer l'exécutable téléchargé.<br>Patientez le temps du téléchargement de Chrome. <br>
	<img alt="Téléchargement de chrome" src="../ressources/images/chrome/downchrome.jpg"/>
	Notez que l'installation de Chrome est presque entièrement automatisé(quasiment).<br>
	<img alt="Installation de chrome" src="../ressources/images/chrome/installchrome.jpg"/><br>À la fin de l'installation,le navigateur Chrome s'ouvrira automatiquement</p>
    <img alt="Ouverture de chrome" src="../ressources/images/chrome/main.jpg"/>



</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>