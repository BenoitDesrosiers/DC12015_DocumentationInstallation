<?php
	$titrePage = "Guide d'installation d'Oracle VM VirtualBox";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation d'Oracle VM VirtualBox<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Oracle VM VirtualBox permet de faire fonctionner un systeme d'exploitation virtuellement pour des fins de teste ou peu importe pourquoi vous voulez l'utiliser</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>Les versions suivantes de Windows sont supportées</p>
    <ul>
    	<li>Windows XP, tous les service pack</li>
	<li>Winders Server 2003 (32 bits)</li>
	<li>Windows Vista (32 et 64 bits)</li>
	<li>Windows Server 2008 (32 et 64 bits)</li>
	<li>Windows 7 (32 et 64 bits) </li>
	<li>Windows 8 (32 et 64 bits)</li>
	<li>Windows Server 2012 (64 bits)</li>
    </ul>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://www.oracle.com/technetwork/server-storage/virtualbox/downloads/index.html">cette page</a>.</p>
    <p>En date du 8 mai 2015, la version la plus récente est la 4.3.26-98988. Il est nécessaire d'avoir au moins 106 MB d'espace libre sur son disque dur pour pouvoir compléter le téléchargement.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Une fois sur la page du site donné plus haut, cliquez sur le lien «Windows Installer»</p>
    <p>Le téléchargement du fichier «VirtualBox-4.3.26-98988-Win.exe» devrait démarrer automatiquement.</p>
    <img alt="Windows Installer" src="../ressources/images/virtualbox/VB_ss_site.png"/>
    <p>Une fois le téléchargement fait, cliquez ou double cliquer sur le fichier pour lancer l'installation.</p>
    <p>Une fenêtre apparaîtra et ensuite cliquer sur le bouton «Exécuter»</p>
    <img alt="Fenetre de windows installer" src="../ressources/images/virtualbox/VB_ss_1.png"/>
    <p>Ensuite cliquer sur le bouton «Next >»</p>
    <img alt="Demarrer l'installation" src="../ressources/images/virtualbox/VB_ss_2.png"/>
    <p>Cliquer encore sur le bouton «Next >»</p>
    <img alt="Installation des features" src="../ressources/images/virtualbox/VB_ss_3.png"/>
    <p>Ensuite vient la sélection de différents options.</p>
    <ul>
	<li>«Create a shortcut on the desktop» créera un raccourci sur le bureau de votre machine.</li>
	<li>«Create a shortcut in the Quick Launch Bar» créera un bouton dans la barre de tache pour un demarage rapide.</li>
	<li>«Register file associations» associera le fichier de registre.</li>
    </ul>
    <p>La dernière option devrait être sélectionnée, les 2 premiers sont selon votre préférence. Quand votre choix fait, cliquer de nouveau sur le bouton «Next >».</p>
    <img alt="options d'installation" src="../ressources/images/virtualbox/VB_ss_4.png"/>
    <p>La prochaine étape vous déconnectera temporairement d'internet, lorsque vous serez prêt, appuyer sur le bouton «Yes».</p>
    <img alt="internet lost" src="../ressources/images/virtualbox/VB_ss_5.png"/>
    <p>La prochaine étape démarre l'installation, cliquez sur le bouton «Install».</p>
    <img alt="debut de l'installation" src="../ressources/images/virtualbox/VB_ss_6.png"/>
    <p>Il se pourrait qu'une fenêtre s'affiche pour continuer l'installation, cliquez sur le bouton «Oui».</p>
    <img alt="Autorisation" src="../ressources/images/virtualbox/VB_ss_7.png"/>
    <p>Une seconde fenêtre s'affichera vous demandent d'installer le logiciel de périphérique de la machine virtuelle. Oracle Corporation est très fiable, vous pouvez donc cliquer sur la case «Toujours faire confiance ...». Pour une machine virtuelle, il est préférable que celle-ci ai accès a vos périphériques. Cliquez sur le bouton «Installer».</p>
    <img alt="Installation en cours 1" src="../ressources/images/virtualbox/VB_ss_8.png"/>
    <p>Voilà! Vous avez installé Oracle VM VirtualBox. Pour compléter l'installation, cliquez sur le bouton «Finish».</p>
    <img alt="Installation en cours 2" src="../ressources/images/virtualbox/VB_ss_9.png"/>
    <p>Voici à quoi devrait ressembler l’écran de VirtualBox.</p>
    <img alt="Terminé" src="../ressources/images/virtualbox/VB_ss_10.png"/>

</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>
