<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de GIMP<h1>

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
    <p>GIMP (acronyme de <i>GNU Image Manipulation Program</i>, aussi orthographié <i>Gimp</i>) est un logiciel de création et d'édition d'images matricielles libre et gratuit.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de GIMP nécessite Windows XP SP3 (ou XP x64 SP2) ou plus récent (Vista, 7 et 8).</p>
    <p>L'installateur contient les versions 32 et 64-bit ainsi que toutes les dépendances nécessaires.</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="www.gimp.org/downloads/">cette page</a>.</p>
    <p>En date du 27 février 2015, la version la plus récente est la 2.8.14, disponible directement <a href="http://download.gimp.org/pub/gimp/v2.8/windows/gimp-2.8.14-setup.exe">ici</a>. Il est nécessaire d'avoir au moins 87MB d'espace libre sur son disque dur pour pouvoir compléter le téléchargement.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable. Une fenêtre apparaîtra, offrant de sélectionner langue utilisée par l'installateur. Cependant, le français ne figure pas parmi les options.</p>
    <img alt="Sélection de la langue" src="../ressources/images/gimp/gimp-1.png"/>
    <p>Une fois la langue sélectionnée, choisir <i>Install</i> pour une installation standard ou <i>Customize</i> pour une installation personnalisée. La suite de ce guide s'applique a une installation personnalisée.</p>
    <img alt="Installation standard ou personnalisée" src="../ressources/images/gimp/gimp-2.png"/>
    <p>Prendre connaissance de la license, puis cliquer sur <i>Next</i>.</p>
    <img alt="Accord de license" src="../ressources/images/gimp/gimp-3.png"/>
    <p>Choisir entre une installation compacte ou complète et choisir les modules individuels, puis cliquer sur <i>Next</i>.</p>
    <img alt="Installation complète" src="../ressources/images/gimp/gimp-4.png"/>
    <img alt="Installation minimale" src="../ressources/images/gimp/gimp-5.png"/>
    <p>Sélectionner les types de fichiers d'image à ouvrir avec GIMP par défaut, puis cliquer sur <i>Next</i>.</p>
    <img alt="Association de fichiers" src="../ressources/images/gimp/gimp-6.png"/>
    <p>Finalement, cocher ou décocher les options pour créer ou non un raccourci sur le bureau et dans la barre des tâches.</p>
    <img alt="Création de raccourcis" src="../ressources/images/gimp/gimp-7.png"/>
    <p>Réviser les paramètres d'installation. Au besoin, cliquer sur <i>Back</i> pour revenir en arrière et les modifier, puis cliquer sur <i>Install</i> pour procéder à l'installation.</p>
    <img alt="Révision des paramètres" src="../ressources/images/gimp/gimp-8.png"/>
    <p>À la fin de l'extraction des fichiers, appuyer sur <i>Finish</i> pour terminer le processus.</p>
    <img alt="Sélection de la langue" src="../ressources/images/gimp/gimp-9.png"/>
    <img alt="Sélection de la langue" src="../ressources/images/gimp/gimp-10.png"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>GIMP vient de base avec plusieurs distributions Linux. Dans ce cas, il n'est pas nécessaire de l'installer. Ce n'est pas le cas d'Ubuntu, qui a cessé de l'inclure au printemps 2010.</p>
    <p>Les packets suivants sont nécessaires au fonctionnement de GIMP:</p>
    <ul>
        <li>gimp-data</li>
        <li>libbabl</li>
        <li>libgegl</li>
        <li>libgimp2</li>
        <li>libilmbase6</li>
        <li>libmng1</li>
        <li>libopenexr6</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>La façon propre d'installer GIMP est de passer par le gestionnaire de paquets de sa distribution.</p>
    <p>Dans le cas d'Ubuntu, on peut passer par la Logithèque Ubuntu ou par un terminal.</p>
    <p>Logithèque Ubuntu: ...<p>
    <p>Terminal: ...<p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="www.gimp.org/">Site officiel de GIMP</a></li>
        <li><a href="http://doc.ubuntu-fr.org/gimp">GIMP dans la documentation Ubuntu francophone</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>