<?php
	$titrePage = "Guide d'installation de Lamp Server";
	include '../php/entete.php';
?>

<div class='contenu'>

<h1>Guide d'installation de Lamp Server<h1>

<div id="table_des_matieres">
    <a href="#presentation"><h2>Présentation</h2></a>
	<a href="#linux"><h2>Linux</h2></a>
    <a href="#linux-installation"><h3>Procédure d'installation</h3></a>
    <a href="#voir-aussi"><h2>Voir aussi</h2></a>
</div>

<h2><a name="presentation">Présentation</a></h2>
    <p>LAMP est un acronyme désignant un ensemble de logiciels libres sur Linux permettant de construire des serveurs de sites web.</p>

<h2><a name="linux">Linux</a></h2>

<h3><a name="linux-installation">Procédure d'installation</a></h3>
	<p>- Étape 1: Installez Apache:   sudo apt-get install apache2</p>
	<p>- Étape 2: Installez MySQL:   sudo apt-get install mysql-server</p>
	<p>- Étape 3: Installez PHP:   sudo apt-get install php5 libapache2-mod-php5</p>
	<p>- Étape 4: Redémarrez le server Apache:  Le serveur Apache devrait redémarrer automatiquement. S'il ne le fait pas, exécutez la commande suivante:   sudo /etc/init.d/apache2 restart</p>
	<p>- Étape 5: Vérifiez Apache:  Ouvrir votre navigateur internet et allez à http://localhost/ . Vous devriez voir un message indiquant que ça fonctionne.</p>

<h2><a name="voir-aussi">Voir aussi:</a></h2>
    <ul>
        <li><a href="http://howtoubuntu.org/how-to-install-lamp-on-ubuntu">Site d'information</a></li>


</div>

<?php
	include '../php/pieddepage.php'
?>