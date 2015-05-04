<?php
	$titrePage = "Guide d'installation de python";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Python<h1>

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
    <p>Python (Nom inspiré de la série télévisée conçu par le groupe <i>"Monty Python"</i>) est un language de programmation interprété 
    orienté objet conçu par Guido Van Rossum sous une licence libre près de la licence BSD. Ce Guide d'installation démontrera comment 
    installer l'interpréteur de ce language sur différents systèmes d'exploitation.</p>

<h2><a name="windows">Windows</a></h2>
<h3><a name="windows-prealables">Préalables</a></h3>
    <p>Puisqu'il existe de nombreuses versions de Python, il existe plusieurs interpréteurs différents qui eux, possèdent 
    des compatibilités variées d'un système à l'autre.</p>
    <p>L'installation de python 3.4.3 requiert Windows XP ou plus récent.</p>
    <p>L'exécutable d'installation contient les versions 32 et 64 bits ainsi que toutes les dépendances nécessaires.</p>
<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Des liens de téléchargement peuvent être trouvés sur <a href="http://www.python.org/downloads/">cette page</a>.</p>
    <p>En date du 15 Avril 2015, les versions les plus stables sont 3.4.3. et 2.7.9. Ces deux versions possèdent des 
    caractéristiques différentes (principalement la syntaxe) mais la 3.4.3 est la plus avancée jusqu'à présent.</p>
<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Une fois l'exécutable téléchargé, exécutez celui-ci. Il est possible que votre système d'exploitation affiche 
    une fenêtre vous demandant la permission d'administrateur, acceptez et continuez.</p>
    <img alt="Lancez l'exécutable" src="../ressources/images/python/python-1.png"/>
    <p>La prochaine fenêtre vous demandera pour quelles sessions vous souhaitez installer l'interpréteur Python. 
    Sélectionnez selon votre besoin et cliquez sur <i>"Next >"</i></p>
    <img alt="Sessions utilisateur" src="../ressources/images/python/python-2.png"/>
    <p>Ensuite, sélectionnez le dossier dans lequel sera installé l'interpréteur lui-même accompagné des autres dossiers 
    associés, puis cliquez sur <i>"Next >"</i>.</p>
    <img alt="Dossier d'installation" src="../ressources/images/python/python-3.png"/>
    <p>La prochaine fenêtre vous laissera choisir les extensions que vous pouvez ajouter ou retirer à l'installation. 
    Par défaut, il est conseillé de seulement cliquer sur <i>"Next >"</i> et les extensions de base seront installées 
    (pip, par exemple, peut s'avéré très utile).</p>
    <img alt="Extensions supplémentaires" src="../ressources/images/python/python-4.png"/>
    <p>L'installateur commencera immédiatement l'installation et vous devriez avoir la fenêtre de chargement suivante : </p>
    <img alt="Fenêtre de chargement" src="../ressources/images/python/python-5.png"/>
    <p>Une fois terminé, vous n'avez qu'à cliquer sur le bouton <i>"Finish"</i> et l'installation sera complétée.</p>
    <img alt="Installation complétée" src="../ressources/images/python/python-6.png"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>Python est souvent pré inclus par défaut sur plusieurs distributions de Linux. Dans ce cas, il n'est pas 
    nécessaire de l'installer à moins de vouloir le mettre à jour.</p>
    <p>Les paquets suivants sont nécessaires au fonctionnement de Python :</p>
    <ul>
        <li>python-data</li>
        <li>libbabl</li>
        <li>libgegl</li>
        <li>libpython2</li>
        <li>libilmbase6</li>
        <li>libmng1</li>
        <li>libopenexr6</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Si Python n'est pas présent sur votre système, vous devez ajouter un répertoire de téléchargement afin d'avoir accès à l'installateur 
    Python.</p>
    <p>Pour ce faire, vous n'avez qu'à entrer la ligne de commande suivante: <i>"sudo add-apt-repository ppa:fkrull/deadsnakes"</i>.</p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
	<p>Premièrement, ouvrez une console système.</p>
	<p>Entrez ensuite la ligne suivante : <i>"sudo apt-get pythonX.X"</i> (Remplacer X.X par la version souhaitez, '3.4' par exemple).</p>	
    <img alt="Association de fichiers" src="../ressources/images/python/python-ubuntu.png"/>
    <p>Si le système est protégé par un compte administrateur, la console risque de vous demander d'entrer le mot de passe afin de continuer.</p>
    <p>Une série de lignes devrait apparaitre à l'écran, celle-ci démontre que l'installation est en cours. Notez que ces lignes vous informent 
    également de l'installation des packets nécessaires mentionnés précèdement.</p>
    <p>Lorsque la console aura terminé l'installation, vous devriez pouvoir entrez de nouvelles lignes de commande dans la console.</p>
    <p>Vous devriez également pouvoir observer les lignes de commande suivante : <i>"X mis à jour, X nouvellement installés, X à enlever 
    et X non mis à jour."</i></p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="www.python.org/">Site officiel de Python</a></li>
        <li><a href="http://doc.ubuntu-fr.org/python">Python dans la documentation Ubuntu francophone</a></li>
    </ul>
</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>