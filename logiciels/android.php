<?php
	$titrePage = "Guide d'installation d'Android SDK";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation d'Android SDK<h1>

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
    <p>Description.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <ul>
        <li>Java Development Kit (JDK) 7 (<a href="">voir guide d'installation</a>)</li>
        <li>Eclipse 3.7.2 ou une version plus récente (<a href="">voir guide d'installation</a>)</li>
    </ul>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="https://developer.android.com/sdk/index.html#Other">cette page</a>. 
	Choisissez le fichier exécutable pour Windows qui se trouve dans <b>SDK Tools Only</b>.</p>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>Lancer l'exécutable</p>
    <img alt="" src="../ressources/images/android/installation-win-etape1.png"/>
    <p>L'installateur va vérifier qu'une version de Java SE Development Kit est bien installée sur l'ordinateur.</p>
    <img alt="" src="../ressources/images/android/installation-win-etape2.png"/>
    <p>Choisir si le SDK doit être installé pour tous les utilisateurs de l'ordinateur ou seulement celui-ci</p>
    <img alt="" src="../ressources/images/android/installation-win-etape3.png"/>
    <p>Choisir le dossier où installer le SDK. Il est recommandé de l'installer directement à la racine du C:/, dans un dossier appelé 'Android'</p>
    <img alt="" src="../ressources/images/android/installation-win-etape4.png"/> 
	<p>Sélectionner le dossier du menu Démarrer où créer les raccourcis (ou cocher 'Do not create
shortcuts' pour ne pas créer de raccourci)</p>
    <img alt="" src="../ressources/images/android/installation-win-etape5.png"/>
    <p>Cliquer sur <b>Install</b> pour lancer l'installation. Attendez puis cliquez sur <b>Next</b> lorsque l'installation est complétée.</p>
    <img alt="" src="../ressources/images/android/installation-win-etape6.png"/>
    <p>Décocher <b>Start SDK Manager</b> et cliquer sur <b>Finish</b></p>
    <img alt="" src="../ressources/images/android/installation-win-etape7.png"/>
    <p>Démarrer Eclipe.</p>
	<p>Dans le menu, sélectionner <b>Help > Install New Software</b> et cliquer sur <b>Add...</b></p>
    <img alt="" src="../ressources/images/android/installation-win-etape9.png"/>
    <p>Entrer les informations suivantes: <i>ADT Plugin</i> dans <b>Name</b> et <i>https://dl-ssl.google.com/android/eclipse/</i> dans <b>Location</b></p>
    <img alt="" src="../ressources/images/android/installation-win-etape10.png"/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <ul>
        <li>a</li>
        <li>b</li>
        <li>c</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="https://developer.android.com/sdk/index.html#Other">cette page</a>. 
	Choisissez la version Linux qui se trouve dans <b>SDK Tools Only</b>.<p>
<h3><a name="linux-installation">Procédure d'installation</a></h3>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="https://developer.android.com/index.html">Site officiel d'Android pour les développeurs</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>