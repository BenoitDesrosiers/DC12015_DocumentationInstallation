<?php
	$titrePage = "Guide d'installation pour JDK (Java Devlopment Kit)";
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/entete.php');
?>

<div class='contenu'>

<h1>Guide d'installation pour JDK (Java Devlopment Kit)<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
    <a href="#windows"><h2>Windows</h2></a>
    <a href="#windows-prealables"><h3>Préalables</h3></a>
    <a href="#windows-telechargement"><h3>Téléchargement</h3></a>
    <a href="#windows-installation"><h3>Procédure d'installation</h3></a>
	<a href="#windows-configuration"><h3>Configuration</h3></a>
    <a href="#windows-verification"><h3>Vérifications</h3></a>
	<a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-prealables"><h3>Préalables</h3></a>
    <a href="#linux-telechargement"><h3>Téléchargement</h3></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
	<a href="#linux-verification"><h3>Vérifications</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>Le Java Development Kit (JDK) est un ensemble de bibliothèques logicielles de base du langage de programmation Java.</p>

<h2><a name="windows">Windows</a></h2>

<h3><a name="windows-prealables">Préalables</a></h3>
    <ul>
        <li>Java SE Runtime Environment (JRE)  3.7.2 ou une version plus récente (S'installe normalment avec JDK)</li>
		<li>Microsoft® Windows® 8/7/Vista/2003 (32 or 64-bit)</li>
		<li>128 Mo de RAM minimum</li>
		<li>Au moins 200 Mo d'espace disque libre</li>
    </ul>
	<br/>

<h3><a name="windows-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">cette page</a>. 
	<br/>Choisissez le fichier exécutable pour Windows (32 ou 64 bits) qui se trouve dans <b>Java SE Development Kit</b>.</p>
	<img alt="Téléchargement" src="../ressources/images/JDK/telechargements.png"/>
	<br/>

<h3><a name="windows-installation">Procédure d'installation</a></h3>
    <p>1. Lancer l'exécutable.</p>
    <img alt="Exécutable" src="../ressources/images/JDK/Install.png"/>
    <br/>
	<p>2.  Cliquez sur Next ... Suivant ...  Close lorsque l'installation est complétée.</p>
    <img alt="Lancement de l'installation" src="../ressources/images/JDK/Install2.png"/>
	<br/>
	<img alt="Lancement de l'installation" src="../ressources/images/JDK/Install3.png"/>
	<br/>
	<img alt="Lancement de l'installation" src="../ressources/images/JDK/Install4.png"/>
	<br/>
	<p>3. Par defaut il devrait s'installer à : "C:\Program Files\Java\jdk1.8.0_xx" (xx signifie la version ex: "C:\Program Files\Java\jdk1.8.0_45") (ce chemin sera substitué par : "[DEFAUT_JAVA]".</p>
    <img alt="Vérification de Java" src="../ressources/images/JDK/JDK_Path.png"/>
	<br/>
	
<h3><a name="windows-configuration">Configuration</a></h3>
    <p>1. Ouvrir la fenêtre de gestion des variables d'environnement.
	<br><u>Pour Windows 7 ou 8 :</u> <b>Panneau de Configuration</b> > <b>Système</b> > <b>Paramètres système avancés</b> > <b>Variables d'environnement</b></p>
	<p>2. Sélectionner la variable <b>PATH</b>.</p>
	<p>3. Cliquer sur <b>Modifier...</b></p>
	<p>4. La variable contiendra probablement déjà des valeurs. Se rendre jusqu'au debut de ceux-ci et ajouter
	le chemin complet vers <b>"[DEFAUT_JAVA]\bin"</b></br>(ne pas oublier d'ajouter un point-virgule APRES le chemin puisque c'est le premier). Exemple : </br>
	<b>c:\Program Files\Java\jdk1.8.0_45\bin;</b> </p>
	<p>5. Cliquer sur <b>Ok</b> pour appliquer les changements.</p>
	<br/>
	
<h3><a name="windows-verification">Vérifications</a></h3>
	<p> 1. Démarrez une console de commandes ( Window + R,  puis écrire cmd et accepter)</p>
	<br/>
	<p> 2. Écrire : Path. </p>
	<p>Si le resultat commence par <b>PATH=[DEFAUT_JAVA]\bin;</b>    C'est que vous avez bien fait votre insertion de PATH dans le systême.</p>
	<br/>
	<p> 3. Écrire : java -version .</p>
	<p>Si le resultat donne : </p>
	<b><p>java version "1.8.0_xx"</p>
	<p>Java(TM) SE Runtime Environment (build 1.8.0_xx-b13)</p>
	<p>Java HotSpot(TM) 64-Bit Server VM (build 25.5-b02, mixed mode)</p></b>
	<br/>
	<p> Cela veux dire que vous avez bien installer JDK </p>
	<br/>

<h2><a name="linux">Linux</a></h2>
<h3><a name="linux-prealables">Préalables</a></h3>
    <ul>
		<li>Java SE Runtime Environment (JRE)  3.7.2 ou une version plus récente (S'installe normalment avec JDK)</li>
		<li>Au moins 200 Mo d'espace disque libre</li>
    </ul>
<h3><a name="linux-telechargement">Téléchargement</a></h3>
    <p>Le lien de téléchargement se trouve sur <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">cette page</a>. 
	<br/>Choisissez le fichier exécutable pour Linux (32 ou 64 bits) qui se trouve dans <b>Java SE Development Kit</b> (Celui avec l'extention : <b>".tar.gz"</b></b>.</p>
	<img alt="Téléchargement" src="../ressources/images/JDK/telechargements.png"/>
	<br/>
<br/>
<h3><a name="linux-installation">Procédure d'installation</a></h3>
    </br>
	<p>1. Ouvrez un terminal puis créez un dossier dans <b>"/usr/local/java"</p>
	<p>$ cd /usr/local</p>
	<p>$ sudo mkdir java</p></b>
	</br>
	<p>2. Extrayez l'intallation</p>
	<b><p>$ cd /usr/local/java</p>
	<p>$ sudo tar xzvf ~/Downloads/jdk-8u{xx}-linux-x64.tar.gz</p>
	</b>
	<p>Note : {xx} signifie la version du votre intallation</p>
	</br>
	<p>3. Entrer les six commandes suivantes (appuyer sur Entrer après chaque ligne). Ceci enregistrera le chemin du JDK dans une variable d'environnement.
	<blockquote>$ sudo update-alternatives --install "/usr/bin/java" "java" "/usr/local/java/jdk1.8.0_{xx}/jre/bin/java" 1 <br/>
	$ sudo update-alternatives --install "/usr/bin/javac" "javac" "/usr/local/java/jdk1.8.0_{xx}/bin/javac" 1 <br/>
	$ sudo update-alternatives --install "/usr/bin/javaws" "javaws" "/usr/local/java/jdk1.8.0_{xx}/jre/bin/javaws" 1 <br/>
	$ sudo update-alternatives --set java /usr/local/java/jdk1.8.0_{xx}/jre/bin/java </br>
	$ sudo update-alternatives --set javac /usr/local/java/jdk1.8.0_{xx}/bin/javac </br>
	$ sudo update-alternatives --set javaws /usr/local/java/jdk1.8.0_{xx}/jre/bin/javaws
	</blockquote></p>
    <br/>
	<h3><a name="linux-verification">Vérifications</a></h3>
	<p>Pour la verification de l'installation Entrez les commendes suivantes : (note les version sont des exemples et peuvent êtres différentes des relutats obtenus ci-dessous)</p>
	<br/>
	<blockquote><p>Commande :    <b>$ javac -version</b></p>
	<p>Resultat :    javac 1.8.0_20</p>
	<br/>
	<p>Commande :    <b>$ java -version</b></p>
	<p>Resultat :    java version "1.8.0_20"</p>
	<p>              Java(TM) SE Runtime Environment (build 1.8.0_20-b26)</p>
	<p>              Java HotSpot(TM) 64-Bit Server VM (build 25.20-b23, mixed mode)</p>
	<br/>
	<p>Commande :    <b>$ which javac</b></p>
	<p>Resultat :    /usr/bin/javac</p>
	<p>Commande :    <b>$ which java</b></p>
	<p>Resultat :    /usr/bin/java</p></blockquote>
<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://www.oracle.com/technetwork/java/javase/documentation/index.html">Site officiel de documentation pour JDK 8 pour les développeurs</a></li>


</div>

<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/DC12015_DocumentationInstallation/php/pieddepage.php');
?>