<?php
	$titrePage = "Guide d'installation de larp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Larp<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Larp (<i>Logiciel d'Algorithmes et de Résolution de Problèmes</i>), est un logiciel éducatif 
    d'enseignement de l'algorithmique en programmation structurée en exploitant le pseudo-code et 
    les organigrammes.</p>
 
<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de ce logiciel requiert les configurations matériels suivantes au minimum : </p>
    <ul>
        <li>Ordinateur de type PC</li>
        <li>64 Mo de mémoire vive</li>
        <li>10 Mo d'espace libre sur le disque rigide</li>
    </ul>
    <p>Ainsi que les configurations logiciels suivante au minimum : </p>
    <ul>
        <li>Microsoft® Windows® 95, 98, ME, NT, 2000, XP ou Vista®</li>
        <li>Microsoft® Internet Explorer v4.0 ou une version plus récente</li>
    </ul>
<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://larp.marcolavoie.ca/fr/download/download.htm">cette page</a>.</p>
    <p>Depuis le premier mars 2008, Larp est devenu disponible en version gratuiciel. Afin d'obtenir plus de détail sur les licenses d'utiliation, veuillez vous rendre sur le <a href="http://larp.marcolavoie.ca/fr">site officiel</a></p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Une fois l'exécutable téléchargé, exécuter celui-ci.</p>
    <img alt="lancer-executable" src="../ressources/images/larp/larp-1.png"/>
    <p><a name="choix"><a>La fenêtre de présentation apparaitera, cliquer sur suivant afin de poursuivre l'installation. 
    Ensuite, vous verrez là fenêtre suivante dans laquelle vous choisirez la langue du programme.</p>
    <img alt="choix" src="../ressources/images/larp/larp-2.png"/>
    <p>Veuillez lire attentivement le contrat de license et ensuite, selectionner l'option illustrant si vous comprenez et acceptez les termes émis.</p>
    <img alt="accord-de-license" src="../ressources/images/larp/larp-3.png"/>
    <p>La page suivante vous laissera choisir la version souhaitez, dans ce cas-ci, vous pouvez simplement cliquer sur "suivant".</p>
    <img alt="version" src="../ressources/images/larp/larp-4.png"/>
    <p>Veuillez lire les informations émises sur la fenêtre suivante et une fois cela fait, cliquer sur suivant.</p>
    <img alt="informations" src="../ressources/images/larp/larp-5.png"/>
    <p>En cliquant sur le bouton "parcourir" le programme vous laisse selectionner une destination d'installation possèdant un espace libre d'au moins 0.7 mégabytes, tel que demandé sur la fenêtre.</p>
    <img alt="dossier-installation" src="../ressources/images/larp/larp-6.png"/>
    <p>La page suivante vous permet de selectionner où vous souhaitez mettre un raccourci vers le programme suite à l'installation. Une fois selectionné, cliquer sur "suivant".</p>
    <img alt="raccourci" src="../ressources/images/larp/larp-7.png"/>
    <p>Les options de tâches supplémentaires affichés vous permet de selectionner si vous souhaitez 
    ou non mettre un icone sur le bureau et sur la barre de lancement rapide, pour le reste, laissez 
    les autres tâches selectionné et cliquer sur "suivant".</p>
    <img alt="raccourci-bureau" src="../ressources/images/larp/larp-8.png"/>
    <p>Cliquer ensuite sur "installer" afin de démarrer la procédure d'installation.</p>
    <img alt="installer" src="../ressources/images/larp/larp-9.png"/>
    <p>Vous devriez pouvoir observer la barre de chargement suivante.</p>
    <img alt="chargement" src="../ressources/images/larp/larp-10.png"/>
    <p>Une fois terminé, la fenêtre suivante devrait apparaitre. Cliquer sur "Terminer" afin de finaliser l'installation.</p>
    <img alt="installation-complete" src="../ressources/images/larp/larp-11.png"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>Veuillez noter que LARP à été développé pour les système Windows seulement. Par contre, il est possible de les installater à l'aide des logiciels comme Wine</p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
    <p>Une fois l'exécutable téléchargé, exécuter celui-ci avec Wine.</p>
    <img alt="larp-wine" src="../ressources/images/larp/larp-wine.png"/>
    <p>Pour le reste de l'installation, référez-vous à l'installation sur Windows, puisqu'elle s'effectue exactement de la même manière que mentionné <a href="#choix">ici</a>.</p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://larp.marcolavoie.ca/fr/default.htm">Site officiel de Larp</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>