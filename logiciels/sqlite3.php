<?php
	$titrePage = "Guide d'installation de SQLite3";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

    <h1>Guide d'installation de SQLite3<h1>

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
        <p>SQLite3 est un gestionnaire de base de donnée simple léger et rapide.</p>

    <h2><a name="windows">Windows</a></h2>

    <h3><a name="windows-prealables">Préalables</a></h3>
        <p>L'installation de SQLite3 ne nécessite pas de librairie particulière.</p>
        <p>Toutes les dépendences nécessaires sont fournise.</p>

    <h3><a name="windows-telechargement">Téléchargement</a></h3>
        <p>Les liens de téléchargement sont sur <a href="http://www.sqlite.org/download.html">cette page</a>.</p>
        <p>Il vous faut télécharger l'interpréteur de commande et les librairie ".dll" comme montré par l'image ci-dessous.</p>

    <h3><a name="windows-installation">Procédure d'installation</a></h3>
        <p>Cliquer-glisser le contenue des archives dans un dossier (de préférence dans C:\Windows\system32).</p>
        <img alt="Image Cliquer-Glisser" src="../ressources/images/sqlite3/installSQLite3.gif"/>
        <p>C'est tout. il ne vous reste qu'à tester votre instalation en ouvrant une invite decommande en pressant et maintenant la touche Windows sur votre clavier et appuyer sur la touche "R" et tapper dans la nouvelle fenêtre cmd.</p>
        <p>L'invite de commande s'ouvrira. Entrez la commande suivante:</p>
        <p class="terminal">sqlite3</p> 
        <p>Si vous avez bien suivit les instructions vous aurez un résultat comme le suivant:<p>
        <img alt="Sqlite3 dans un invite de commande" src="../ressources/images/sqlite3/resultatWindows.jpg"/>
        <p>Pour quitter il suffit de tapper:</p>
        <p class="terminal">.q</p>

    <h3><a name="Problèmes possibles">Problèmes possibles</a></h3>
    //a finir

    <h2><a name="linux">Linux</a></h2>
    <h3><a name="linux-prealables">Préalables</a></h3>
       <p>Les packets nécessaires sont fournis par le packets sqlite3</p>
    <h3><a name="linux-telechargement">Téléchargement</a></h3>
        <p>Votre gestionaire de paquets favoris (logithèque Ubuntu ou synaptic, aptitude ou équivalent) devrait être capable de trouver et installer sqlite3 sans difficultée.</p>
    <h3><a name="linux-installation">Procédure d'installation</a></h3>
        <p>Dans le cas d'Ubuntu, on peut passer par un terminal ou par la Logithèque Ubuntu.</p>
    <h4>Terminal</h4>
        <p>Ouvrir un terminal. Il suffit de taper «Terminal» dans la barre de recherche du Dash (la première icône en haut de la barre à gauche de l'écran) et cliquer sur l'icône correspondante dans les résultats. Ou "CTRL+ALT+T"</p>
        <p>Dans la fenêtre qui s'ouvre, entrer la commande suivante:<p>
        <p class="terminal">sudo apt-get install sqlite3</p>
        <p>Réviser les changements affichés et confirmer. Le mot de passe de l'utilisateur «root» sera demandé.</p>
        <p>Le gestionnaire de paquets va télécharger et installer tous les paquets nécessaires.</p>
    <h4>Logithèque Ubuntu</h4>
        <p>Ouvrir l'application Logithèque Ubuntu aplartir du dash ou du menu..</p>
        <p>Taper "sqlite3" dans la boîte de recherche de la Logithèque et sélectionner l'application correspondante, qui devrait être le premier résultat. Sinon recherché dans la liste z </p>
        <img alt="Chercher Gimp dans la logiquèque" src="../ressources/images/gimp/logitheque-gimp.png"/>
        <p>Cliquer sur le bouton Install. Une icône s'ajoutera à la barre de lancement et indiquera la progression du téléchargement.</p>
        <img alt="Ouvrir la Logithèque Ubuntu" src="../ressources/images/gimp/progres-installation.png"/>
    <h4>Terminé</h4>
        <p>À la fin du processus d'instalation sqlite3 peut être lancer dans un terminal .</p>
        <img alt="SQLite3 est installé" src="../ressources/images/sqlite3/resultatUbuntu.png"/>

    <h2><a name="voir-aussi">Voir aussi:</a></h2>
        <ul>
            <li><a href="http://www.windows93.net/">Site officiel de Windows93</a></li>
            <li><a href="http://jesaispasquoifaire.com">Je sais pas quoi faire</a></li>
        </ul>
</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>
