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
	<a href="#windows-configuration"><h3>Configuration</h3></a>
    <a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-telechargement"><h3>Téléchargement</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
	<a href="#plugin-eclipse"><h2>Plugin pour Eclipse</h2></a>
	<a href="#plugin-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Le kit de développement (SDK) Android  est un ensemble d'outil permettant de développer des applications pour le système d'exploitation Android. Il inclut un débogueur, un émulateur, des bibliothèques logicielles, de la documentation et des exemples de codes.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <ul>
        <li>Java Development Kit (JDK) 7 (<a href="">voir guide d'installation</a>)</li>
        <li>Eclipse 3.7.2 ou une version plus récente (<a href="">voir guide d'installation</a>)</li>
		<li>Microsoft® Windows® 8/7/Vista/2003 (32 or 64-bit)</li>
		<li>2 Go de RAM minimum (4 Go recommandé)</li>
		<li> Au moins 1 Go d'espace disque libre</li>
    </ul>
	<br/>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="https://developer.android.com/sdk/index.html#Other">cette page</a>. 
	<br/>Choisissez le fichier exécutable pour Windows qui se trouve dans <b>SDK Tools Only</b>.</p>
	<img alt="Téléchargement" src="../ressources/images/android/telechargement-windows.png"/>
	<br/>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>1. Lancer l'exécutable.</p>
    <img alt="Exécutable" src="../ressources/images/android/installation-win-etape1.png"/>
    <br/>
	<p>2. L'installateur va vérifier qu'une version de Java SE Development Kit est bien installée sur l'ordinateur.</p>
    <img alt="Vérification de Java" src="../ressources/images/android/installation-win-etape2.png"/>
    <br/>
	<p>3. Choisir si le SDK doit être installé pour tous les utilisateurs de l'ordinateur ou seulement celui-ci. <span style="color:red">comment choisir????</span></p>
    <img alt="Choix d'utilisateurs" src="../ressources/images/android/installation-win-etape3.png"/>
    <br/>
	<p>4. Choisir le dossier où installer le SDK. Il est recommandé de l'installer directement à la racine du C:/, dans un dossier appelé <i>Android</i>.</p>
    <img alt="Choix du répertoire d'installation" src="../ressources/images/android/installation-win-etape4.png"/> 
	<br/>
	<p>5. Sélectionner le dossier du menu Démarrer où créer les raccourcis (ou cocher <i>Do not create
	shortcuts</i> pour ne pas créer de raccourci).</p>
    <img alt="Options de raccourci" src="../ressources/images/android/installation-win-etape5.png"/>
    <br/>
	<p>6. Cliquer sur <b>Install</b> pour lancer l'installation. Attendez puis cliquez sur <b>Next</b> lorsque l'installation est complétée.</p>
    <img alt="Lancement de l'installation" src="../ressources/images/android/installation-win-etape6.png"/>
    <br/>
	<p>7. Laisser coché <b>Start SDK Manager</b> et cliquer sur <b>Finish</b>.</p>
    <img alt="Fin de l'installation" src="../ressources/images/android/installation-win-etape7.png"/>
    <br/>
	<p>8. Lorsque SDK Manager sera ouvert, sélectionner les packages à installer, au minimum :<span style="color:red">pourquoi ceux là?  référer au cours </span></p>
	<ul>
        <li>Android SDK Platform-tools</li>
        <li>Android SDK Build-tools</li>
        <li>Android Support Library</li>
		<li>Google USB Driver</li>
    </ul>
	<p>Choisir également les API (versions de Android) dont vous aurez besoin.
	<br/>
	<u>NOTE :</u> Vous pouvez tout cocher, mais l'installation risque de prendre beaucoup de temps.</p>
    <img alt="Installation des packages" src="../ressources/images/android/installation-win-etape8.png"/>
	<br/>
	<p>9. Accepter les licences et attendre que l'installation se complète.</p>
    <img alt="Licences des packages" src="../ressources/images/android/installation-win-etape9.png"/>
	<br/>
	
<h3><a name="windows-configuration">Configuration</a></h3>
    <p>1. Ouvrir la fenêtre de gestion des variables d'environnement.
	<br><u>Pour Windows 7 ou 8 :</u> <b>Panneau de Configuration</b> > <b>Système</b> > <b>Paramètres système avancés</b> > <b>Variables d'environnement</b></p>
	<p>2. Sélectionner la variable <b>PATH</b>.</p>
	<p>3. Cliquer sur <b>Modifier...</b></p>
	<p>4. La variable contiendra probablement déjà des valeurs. Se rendre jusqu'à la fin de la ligne et ajouter
	les chemins complets vers <b>tools</b> et <b>platform-tools</b> du SDK, en les séparant par des point-virgules (ne pas oublier d'ajouter un point-virgule avant le premier s'il y a déjà d'autres éléments). 
	Par exemple, si vous l'avez installé à la racine du C, cela devrait donner : <i>C:\Android\sdk\tools;C:\Android\sdk\platform-tools</i></p>
	<p>5. Cliquer sur <b>Ok</b> pour appliquer les changements.</p>
	<br/>
	


<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <ul>
        <li>Java Development Kit (JDK) 7 (<a href="">voir guide d'installation</a>)</li>
        <li>Eclipse 3.7.2 ou une version plus récente (<a href="">voir guide d'installation</a>)</li>
		<li>Environnement GNOME ou KDE</li>
		<li>Librairie GNU C (glibc) 2.15 ou plus récente</li>
        <li>2 Go de RAM minimum (4 Go recommandé)</li>
		<li> Au moins 1 Go d'espace disque libre</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="https://developer.android.com/sdk/index.html#Other">cette page</a>. 
	<br>Choisissez la version Linux qui se trouve dans <b>SDK Tools Only</b>.</p>
	<img alt="Téléchargement" src="../ressources/images/android/telechargement-linux.png"/>
<br/>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
   <p>1. Extraire le dossier téléchargé à l'emplacement désiré (par exemple, dans un nouveau dossier nommé <i>Android</i> dans <b>Home</b>)</p>
	<p>2. Ouvrir un terminal et se rendre au répertoire où le dossier a été extrait.</p>
	<p>3. Entrer les trois commandes suivantes (appuyer sur Entrer après chaque ligne). Ceci enregistrera le chemin du SDK dans une variable d'environnement
	<blockquote>cd android-sdk-linux/tools/ <br/>
	echo "export PATH=${PATH}:$(pwd)" >> ~/.bashrc <br/>
	. ~/.bashrc</blockquote></p>
    <img alt="" src="../ressources/images/android/installation-linux-etape3.png"/>
    <br/>
	<p>4. Toujours dans le terminal, entrer <b>android update sdk</b>. Ceci ouvrira Android SDK Manager.</p>
	<p><u>NOTE :</u> Si la commande est introuvable, il est possible d'accéder au SDK Manager à partir
	d'Eclipse, une fois le plugin installé. Passez à <a href="">cette partie</a>,<span style="color:red">mauvais lien</span>puis exécutez les étapes 5 et 6 ensuite.</p>
	<p>5. Lorsque SDK Manager sera ouvert, sélectionner les packages à installer, au minimum :</p>
	<ul>
        <li>Android SDK Platform-tools</li>
        <li>Android SDK Build-tools</li>
        <li>Android Support Library</li>
    </ul>
	<p>Choisir également les API (versions de Android) dont vous aurez besoin.
	<br/>
	<u>NOTE :</u> Vous pouvez tout cocher, mais l'installation risque de prendre beaucoup de temps.</p>
    <img alt="" src="../ressources/images/android/installation-linux-etape5.png"/> 
	<br/>
	<p>6. Accepter les licences et attendre que l'installation se complète.</p>
    <img alt="" src="../ressources/images/android/installation-linux-etape6.png"/>
	<br/>
	
<h2><a name="plugin-eclipse">Plugin pour Eclipse</a></h2>
<h3><a name="plugin-installation">Procédure d'installation</a></h3>
	<p><i>La procédure est la même pour Windows et Linux.</i></p>
	<p>1. Démarrer Eclipe.</p>
	<p>2. Dans le menu, sélectionner <b>Help > Install New Software</b> et cliquer sur <b>Add...</b></p>
    <img alt="Menu Eclipse" src="../ressources/images/android/installation-plugin-etape2.png"/>
    <br/>
	<p>3. Entrer les informations suivantes: <i>ADT Plugin</i> dans <b>Name</b> et <i>https://dl-ssl.google.com/android/eclipse/</i> dans <b>Location</b>.</p>
    <img alt="Choix du plugin à installer" src="../ressources/images/android/installation-plugin-etape3.png"/>
	<br/>
	<p>4. Cocher <b>Developer Tools</b> et cliquer sur <b>Next</b>.</p>
	<img alt="Sélection du plugin" src="../ressources/images/android/installation-plugin-etape4.png"/>
	<br/>
	<p>5. La fenêtre suivante va afficher une liste de ce qui sera installé. Cliquer sur <b>Next</b>.</p>
	<p>6. Lire et accepter les licenses, puis cliquer sur <b>Finish</b>. L'installation va commencer.</p>
    <img alt="Licences du plugin" src="../ressources/images/android/installation-plugin-etape6.png"/>
	<p><u>NOTE :</u> Il est possible qu'un message s'affiche durant l'installation disant que la validité
	du logiciel ne peut pas être vérifiée. Cliquer simplement sur OK.</p>
	<img alt="Message d'erreur Licences" src="../ressources/images/android/installation-plugin-etape6-note.png"/>
	<br/>
	<p>7. À la fin, un message demandera de redémarrer Eclipse pour que les changements soient appliqués.
	Cliquer sur <b>Yes</b>.</p>
    <img alt="Redémarrer Eclipse" src="../ressources/images/android/installation-plugin-etape7.png"/>
	<br/>
	<p>8. À l'ouverture d'Eclipse, il est possible qu'il ne trouve pas le répertoire d'Android SDK. Aller
	dans <b>Window</b> > <b>Préferences</b> > <b>Android</b> et dans <i>SDK Location</i>, sélectionner le dossier où le SDK a été installé
	 (normalement C:/Android).</p>
    <img alt="Ajout du répertoire du SDK" src="../ressources/images/android/installation-plugin-etape8.png"/>
	<br/>
	<span style="color:red">comment je fais pour savoir que ca a fonctionné?</span>
<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="https://developer.android.com/index.html">Site officiel d'Android pour les développeurs</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>