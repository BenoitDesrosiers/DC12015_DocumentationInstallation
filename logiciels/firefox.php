<?php
	$titrePage = "Guide d'installation de Mozilla Firefox";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation de Mozilla Firefox<h1>

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
	<a href="#firebug"><h2>Plugin Firebug</h2></a>
	<a href="#firebug-telechargement"><h3>Téléchargement du plugin Firebug</h3></a>
	<a href="#firebug-installation"><h3>Installation du plugin Firebug</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Mozilla Firefox est un navigateur web libre et gratuit, développé et distribué par la Mozilla Foundation avec l'aide de milliers de bénévoles grâce aux méthodes de développement du logiciel libre/open source et à la liberté du code source.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <p>L'installation de Firefox nécessite Windows XP SP2,Windows Server 2003 SP1,Windows Vista,7 ou 8 ou plus récent.</p>
	<p>Processeur: Intel Pentium 4 ou ultérieur, supportant SSE2</p>
	<p>Espace disque dur: au moins 200 mégaoctets de disponible</p>
	<p>Mémoire vive(RAM):Au moins 512mégaoctets</p>
    <p>Les pré-requis sont également disponible à l'adresse <a href="https://www.mozilla.org/en-US/firefox/37.0.2/system-requirements/">https://www.mozilla.org/en-US/firefox/37.0.2/system-requirements/</a></p>
	<p>Actuellement, Firefox ne rends pas public les versions 64-bits de Firefox pour Windows.L’installateur est un installateur universel 32-bits qui fonctionnera autant si votre ordinateur possède un système 32 ou 64 bits.</p>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Vous pouvez télécharger Firefox sur <a href="https://www.mozilla.org/fr/firefox/new/">cette page</a>.</p>
    <p>En date du 24 avril 2015, la version la plus récente est 37.0.2</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable téléchargé. Une fenêtre apparaîtra, offrant l'option "Installer","Annuler" ou "Options".Il est préférable de cliquer sur Options afin que vous soyez assurer que l'installation se fera selon vos préférences.</p>
    <img alt="Première fenêtre firefox" src="../ressources/images/firefox/fenetre1.jpg"/>
    <p>Dans le menu des options avant l'installation, vous pouvez choisir le destination d'installation de Firefox en cliquant sur "Parcourir".Toutefois, l'installateur sélectionne la destination par défault pour l'installation de programmes sur votre système
	Le service de mise à jour en arrière plan fera que les mises à jours de firefox seront téléchargées et installées en arrière plan sans vous en informer.</p>
    <img alt="Options de pré-installation firefox" src="../ressources/images/firefox/options.jpg"/>
    <p>Cliquer ensuite sur "Installer" et patienter le temps du téléchargement de Firefox</p>
    <img alt="Téléchargement de firefox..." src="../ressources/images/firefox/telechargement.jpg"/>
    <p>Patienter ensuite le temps que l'installateur installe Firefox</p>
    <img alt="Installation" src="../ressources/images/firefox/installation.jpg"/>
   
    <p>Une fois l'installation terminée, le navigateur Firefox s'ouvrira</p>
    <img alt="Page d'accueil firefox" src="../ressources/images/firefox/defaulthomepage.jpg"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <p>Processeur: Intel Pentium 4 ou ultérieur, supportant SSE2</p>
	<p>Espace disque dur: au moins 200 mégaoctets de disponible</p>
	<p>Mémoire vive(RAM):Au moins 512mégaoctets</p>
	<p>Les paquets suivants sont requis:</p>
	<ul>
        <li>GTK+2.18 ou ultérieur</li>
        <li>GLib 2.22 ou ultérieur</li>
        <li>Pango 1.14 ou ultérieur</li>
        <li>X.Org 1.0 ou ultérieur(1.7 ou ultérieur recommandé)</li>
        <li>libstdc++ 4.3 ou ultérieur</li>
    </ul>
	<br>
	<p>Les paquets suivants sont recommandés pour un fonctionnement optimal de Firefox:</p>
	<ul>
        <li>NetworkManager 0.7 ou ultérieur</li>
        <li>DBus 1.0 ou ultérieur</li>
        <li>HAL 0.5.8 ou ultérieur</li>
        <li>GNOME 2.16 ou ultérieur</li>
    </ul>
	
    <p>Les pré-requis sont également disponible à l'adresse <a href="https://www.mozilla.org/en-US/firefox/37.0.2/system-requirements/">https://www.mozilla.org/en-US/firefox/37.0.2/system-requirements/</a></p>
	<p>Maintenant que vous vous êtes assuré que votre système a les prérequis,il faut définir si votre système est un système 32bits ou 64bits.
	Pour ce faire, ouvrez le terminal du système(en recherchant « terminal »),puis entrez la commande suivante : uname –m .Puis appuyer sur Entrée.
	Si le terminal affiche x86_64, cela signifie que votre système est 64 bits.Sinon,votre système est un 32bits. 
    
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Téléchargez la version de Mozilla Firefox adapté à votre système :
	Rendez vous sur(anglais) : https://www.mozilla.org/en-US/firefox/all/
	Puis sélectionner la version(32 ou 64 bits--Linux seulement) ainsi que la langue désiré,et sélectionner « Download » vis-à-vis cette version.
	</p>
	<h3><a name="linux-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable téléchargé, et suivez la procédure d'installation pour Windows(plus haut),qui est identique à celle pour système Linux.</p>
	
	<h2><a name="firebug">Plugin Firebug</a></h2>
	<h3><a name="firebug-telechargement">Téléchargement</a></h3>
    <p>À partir de votre navigateur Firefox,rendez vous sur <a href="https://www.mozilla.org/fr/firefox/new/">cette page</a>.</p>
	<p> Cliquer ensuite sur "Add to Firefox".</p>
    <p>En date du 24 avril 2015, la version la plus récente du plugin Firebug 2.0.9.1.</p>
	
	<h3><a name="firebug-installation">Installation du plugin</a></h3>
    <p>Une fois le plugin téléchargé, cette fenêtre apparaîtra.Cliquer sur "Installer maintenant" à la fin du décompte.</p>
	<img alt="Installation firebug" src="../ressources/images/firefox/firebug.jpg"/>


<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="https://www.mozilla.org/fr/">Site officiel Mozilla</a></li>
        


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>