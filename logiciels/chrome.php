<?php
	$titrePage = "Guide d'installation de Gimp";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de GIMP<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Pr�sentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Pr�alables</h3></a>
    <a href="#windows-telechargement"><h3>T�l�chargement</h3></a>
    <a href="#windows-installation"><h3>Proc�dure d'installation</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Pr�alables</h3></a>
    <a href="#linux-telechargement"><h3>T�l�chargement</h3></a>
    <a href="#linux-installation"><h3>Proc�dure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Pr�sentation</a></h2>
    <p>GIMP (acronyme de <i>GNU Image Manipulation Program</i>, aussi orthographi� <i>Gimp</i>) est un logiciel de cr�ation et d'�dition d'images matricielles libre et gratuit.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Pr�alables</a></h3>
    <p>L'installation de GIMP n�cessite Windows XP SP3 (ou XP x64 SP2) ou plus r�cent (Vista, 7 et 8).</p>
    <p>L'installateur contient les versions 32 et 64-bit ainsi que toutes les d�pendances n�cessaires.</p>

<h3><a name="windows-telechargement">T�l�chargement</a></h3>
    <p>Des liens de t�l�chargement peuvent �tre trouv�s sur <a href="www.gimp.org/downloads/">cette page</a>.</p>
    <p>En date du 27 f�vrier 2015, la version la plus r�cente est la 2.8.14, disponible directement <a href="http://download.gimp.org/pub/gimp/v2.8/windows/gimp-2.8.14-setup.exe">ici</a>. Il est n�cessaire d'avoir au moins 87MB d'espace libre sur son disque dur pour pouvoir compl�ter le t�l�chargement.</p>

<h3><a name="windows-installation">Proc�dure d'installation</a></h3>
    <p>Lancer l'ex�cutable. Une fen�tre appara�tra, offrant de s�lectionner langue utilis�e par l'installateur. Cependant, le fran�ais ne figure pas parmi les options.</p>
    <img alt="S�lection de la langue" src="../ressources/images/gimp/gimp-1.png"/>
    <p>Une fois la langue s�lectionn�e, choisir <i>Install</i> pour une installation standard ou <i>Customize</i> pour une installation personnalis�e. La suite de ce guide s'applique a une installation personnalis�e.</p>
    <img alt="Installation standard ou personnalis�e" src="../ressources/images/gimp/gimp-2.png"/>
    <p>Prendre connaissance de la license, puis cliquer sur <i>Next</i>.</p>
    <img alt="Accord de license" src="../ressources/images/gimp/gimp-3.png"/>
    <p>Choisir entre une installation compacte ou compl�te et choisir les modules individuels, puis cliquer sur <i>Next</i>.</p>
    <img alt="Installation compl�te" src="../ressources/images/gimp/gimp-4.png"/>
    <img alt="Installation minimale" src="../ressources/images/gimp/gimp-5.png"/>
    <p>S�lectionner les types de fichiers d'image � ouvrir avec GIMP par d�faut, puis cliquer sur <i>Next</i>.</p>
    <img alt="Association de fichiers" src="../ressources/images/gimp/gimp-6.png"/>
    <p>Finalement, cocher ou d�cocher les options pour cr�er ou non un raccourci sur le bureau et dans la barre des t�ches.</p>
    <img alt="Cr�ation de raccourcis" src="../ressources/images/gimp/gimp-7.png"/>
    <p>R�viser les param�tres d'installation. Au besoin, cliquer sur <i>Back</i> pour revenir en arri�re et les modifier, puis cliquer sur <i>Install</i> pour proc�der � l'installation.</p>
    <img alt="R�vision des param�tres" src="../ressources/images/gimp/gimp-8.png"/>
    <p>� la fin de l'extraction des fichiers, appuyer sur <i>Finish</i> pour terminer le processus.</p>
    <img alt="S�lection de la langue" src="../ressources/images/gimp/gimp-9.png"/>
    <img alt="S�lection de la langue" src="../ressources/images/gimp/gimp-10.png"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Pr�alables</a></h3>
    <p>GIMP vient de base avec plusieurs distributions Linux. Dans ce cas, il n'est pas n�cessaire de l'installer. Ce n'est pas le cas d'Ubuntu, qui a cess� de l'inclure au printemps 2010.</p>
    <p>Les packets suivants sont n�cessaires au fonctionnement de GIMP:</p>
    <ul>
        <li>gimp-data</li>
        <li>libbabl</li>
        <li>libgegl</li>
        <li>libgimp2</li>
        <li>libilmbase6</li>
        <li>libmng1</li>
        <li>libopenexr6</li>
    </ul>
<h3><a name="linux-telechargement">T�l�chargement</a></h3>
    <p>La fa�on propre d'installer GIMP est de passer par le gestionnaire de paquets de sa distribution.</p>
    <p>Dans le cas d'Ubuntu, on peut passer par la Logith�que Ubuntu ou par un terminal.</p>
    <p>Logith�que Ubuntu: ...<p>
    <p>Terminal: ...<p>
<h3><a name="linux-installation">Proc�dure d'installation</a></h3>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="www.gimp.org/">Site officiel de GIMP</a></li>
        <li><a href="http://doc.ubuntu-fr.org/gimp">GIMP dans la documentation Ubuntu francophone</a></li>


</div>

<?php
	include '/DC12015_DocumentationInstallation/php/pieddepage.php'
?>