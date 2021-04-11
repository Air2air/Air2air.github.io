
<?php



/* Pages
France:france
Antilles: antilles
Main :1
Agence de Sante: 2
Agriculture et alimentation: 3
Agence du Economie: 4
Culture, jeunesse, sports: 5
Education et formation: 6
Securite et Defense: 7
Socialist Party of France: 31
*/


$page = $_GET["page"];

if ( $page == "home" ) {
$thisContent= '
<div role="main" class="ui-content">
<h3>My alerts</h3>
<div role="main" class="ui-content">
	<fieldset data-role="controlgroup" data-inset="false">
		<legend>Alert me about:</legend>
		<input type="checkbox" name="checkbox-1a" id="checkbox-1a" checked="">
		<label for="checkbox-1a">Education Secondaire</label>
		<input type="checkbox" name="checkbox-2a" id="checkbox-2a" checked="">
		<label for="checkbox-2a">Cricket</label>
		<input type="checkbox" name="checkbox-3a" id="checkbox-3a" checked="">
		<label for="checkbox-3a">Sebastian Delacroix</label>
	</fieldset>
</div>
<form class="ui-filterable">
    <input id="filterBasic-input" data-type="search" placeholder="Add a new alert">
</form></li>

	<div class="ui-grid-a" data-inset="true">
		<div class="ui-block-a">
			<a id="btn-share-support-'.$page.'" href="page.php?page=1" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" style="float:right;font-size:1.04em;">Cancel</a>
		</div>
		<div class="ui-block-b">
			<a id="btn-share-oppose-'.$page.'" href="page.php?page=1" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" style="font-size:1.04em;">Continue</a>
		</div>
	</div>
'; }

if ( $page == "antilles" ) {
$thisContent= '
<div role="main" class="ui-content">
<h3>Still need to populate the Antilles section!</h3>
Click St. Bart\'s above.
</div>
'; }

if ( $page == "france" ) {
$thisContent= '
<div role="main" class="ui-content">
<h3>Still need to populate the France section!</h3>
Click St. Bart\'s above.
</div>
'; }


//Main

if ( $page == "1" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="St. Barthelemy";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorPage="1";
$sponsorImage="saint-barthelemy-flag.png";
$thisContent= '
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">

	<li data-icon="false"><a class="region_link" href="page.php?page=2">
		<h3 class="region_name">Agence de Sante</h3>
		<p class="region_location">Gustavia, Quai du General de Gaulle</p>
		<div class="ui-li-count">
			<span class="red">4</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
	<li data-icon="false"><a class="region_link" href="page.php?page=3">
		<h3 class="region_name">Agriculture et alimentation</h3>
		<p class="region_location">Gustavia, Quai du General de Gaulle</p>
		<div class="ui-li-count">
			<span class="red">6</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
	<li data-icon="false"><a class="region_link" href="page.php?page=4">
		<h3 class="region_name">Agence du Economie</h3>
		<p class="region_location">Zac de Dothemare Sud, Abymes</p>
		<div class="ui-li-count">
			<span class="red">8</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
	<li data-icon="false"><a class="region_link" href="page.php?page=5">
		<h3 class="region_name">Ministry du Culture, jeunesse et sports</h3>
		<p class="region_location">Zac de Dothemare Sud, Abymes</p>
		<div class="ui-li-count">
			<span class="red">18</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
	<li data-icon="false"><a class="region_link" href="page.php?page=6">
		<h3 class="region_name">Education et formation</h3>
		<p class="region_location">Gustavia, Quai du General de Gaulle</p>
		<div class="ui-li-count">
			<span class="red">16</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
	<li data-icon="false"><a class="region_link" href="page.php?page=7">
		<h3 class="region_name">Securite et Defense</h3>
		<p class="region_location">Gustavia, Quai du General de Gaulle</p>
		<div class="ui-li-count">
			<span class="red">2</span>
			<span class="gray"> new</span>
		</div>
	</a></li>
</ul>
';
}









// Agence de Sante

// Main Menu

if ( $page == "2" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Agence de Sante";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="2";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=9">
	<h3 class="region_name">CHIKUNGUNYA: deux cas confirmes a ST MARTIN</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=10">
	<h3 class="region_name">Stratégie nationale de Santé</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=11">
	<h3 class="region_name">Semaine européenne de la vaccination du 27 avril au 04 Mai 2013</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
</ul>
');
}

if ( $page == "9") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence de Sante";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorPage="2";
$issueDate="Mar 10, 2014";
$thisTitle="CHIKUNGUNYA: deux cas confirmés à ST MARTIN";
$thisContent="
<p>
Les services de l’ARS à St Martin ont recensé sur l’ile des cas évocateurs de Chikungunya. L’Agence de Santé (via le pôle Veille sanitaire) et la CIRE Antilles Guyane (Institut National de Veille Sanitaire) ont immédiatement déployé un dispositif de surveillance renforcé.
</p>
<div class='content_image'>
	<img src='http://www.todayifoundout.com/wp-content/uploads/2010/08/mosquito_malaria.png'>
</div>
<p>
Le Chikungunya est transmis à Saint Martin par le moustique Aedes Aegypti, dont les symptômes ressemblent à ceux de la dengue.
Les consignes de prévention et les mesures de protection sont également identiques à celles mises en œuvre contre la dengue :
<ul>
<li>Eviter de vous faire piquer
<li>Lutter contre les moustiques et les gîtes larvaires
<li>Consulter votre médecin traitant en cas de fièvre.
</ul>
Une campagne de communication est en cours grâce aux soins des équipes de la LAV (Lutte Anti Vectorielle).
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "10") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence de Sante";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="2";
$issueDate="Mar 10, 2014";
$thisTitle="Stratégie nationale de Santé";
$thisContent="
<p>
Les 23, 25, 27 et 31 Janvier 2014, l’Agence de Santé de Guadeloupe, Saint-Martin et Saint-Barthélemy organise des débats publics dans le cadre de la Stratégie Nationale de Santé.
</p>
<p>
Chacun des trois territoires de santé sera mobilisé autour de thématiques conformes aux orientations indiquées par la Ministre de la Santé lors du lancement de la Stratégie Nationale de Santé, le 23 septembre dernier.
</p>
<p>
Il sera également question au cours de ces débats publics, d’aborder les problématiques de santé qui se posent de manière forte au sein de la population, en présence de représentants de plusieurs organismes, institutions et associations concernés par ces questions.
Les matinées seront consacrées essentiellement aux sujets relevant de :
</p>
<p>
<ul>
<li>La nutrition
<li>L’activité physique
<li>Le surpoids et l’obésité
<li>Les maladies chroniques
<li>Les après-midis, chaque territoire de santé débâtera autour de tables rondes, de thématiques telles que :
</ul>
<ul>
<li>La cancérologie
<li>La santé des jeunes
<li>Le vieillissement
<li>Une journée spéciale sera dédiée aux « droits des usagers », compte tenu du caractère transversal de ce domaine.
</ul>
</p>
<p>
Les participants attendus à ces débats publics sont les professionnels de santé mais également les usagers.
</p>
<p>
 L’Agence de Santé de Guadeloupe, Saint-Martin et Saint-Barthélemy souhaite la participation active et d’envergure de tous les citoyens guadeloupéens et des îles du Nord qui veulent partager leurs témoignages, initiatives et projets innovants.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "11") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence de Sante";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="2";
$issueDate="Mar 10, 2014";
$thisTitle="Semaine européenne de la vaccination du 27 avril au 04 Mai 2013";
$thisContent="
<p>
La vaccination reste un moyen de prévention indispensable contre certaines maladies. Elle permet de se protéger mais aussi de protéger les autres.
Profitez de la semaine européenne de la vaccination du 27 avril au 04 Mai 2013 pour faire le point sur vos vaccins et ceux de vos proches. 
N’hésitez pas à faire vérifier vos carnets de santé et de vaccination auprès d’un professionnel de santé ou dans un centre de vaccination habilité par l’ARS.

<div class='content_image'>
	<img src='http://www.ars.guadeloupe.sante.fr/typo3temp/pics/89e52d4eaf.png'>
</div>
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}











//Agriculture et alimentation

// Main Menu

if ( $page == "3" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Agriculture et alimentation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="3";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=12">
	<h3 class="region_name">Revision des prix des produits petroliers en Guadeloupe</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=13">
	<h3 class="region_name">Projet d’arrêté préfectoral fixant les seuils de surface des espaces boisés</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=14">
	<h3 class="region_name">Calamité agricole</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
</ul>
');
}

if ( $page == "12" ) {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agriculture et alimentation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="3";
$issueDate="Mar 11, 2014";
$thisTitle="Revision des prix des produits petroliers en Guadeloupe";
$thisContent="
<p>
Le décret n° 2013-1314 du 27 décembre 2013 prévoit que les prix des produits pétroliers et du gaz sont révisés chaque mois en fonction de l’évolution des cours et de la parité monétaire euro/dollar constatées lors du mois précédent.
</p>
<p>
 En février 2014, le marché a évolué de la manière suivante :
</p>
<p>
1 – Hausse de la moyenne des cotations du pétrole brut (Brent) de 0,9 %
</p>
<p>
Le prix moyen du baril de Brent a augmenté, passant de 107,87 $ ( Source : BREND FOB daté, figurant au Platt’s) en janvier à 108,79 $ ( Source : BREND FOB daté, figurant au Platt’s) en février 2014. Cette tendance s’explique essentiellement par l’arrêt de la production dans l’Est de la Lybie.
</p>
<p>
2 – Hausse de la moyenne des cotations du super de 2,6 % et du gazole de 1,6%
</p>
<p>
Cette tendance s’explique par l’arrêt de la production dans l’Est de la Lybie et l’augmentation de la demande liée d’une part à l’amélioration de l’activité économique en Europe et aux USA et d’autre part au climat froid en Amérique du Nord, Asie centrale et Iran pour le Gazole.
</p>
<p>
3 – Baisse de la moyenne des cotations du butane de 0,8 % et hausse de la moyenne des cotations du propane de 15 %
</p>
<p>
Le gaz subit les effets des arrêts de production, notamment au Moyen Orient (Lybie).
</p>
<p>
L’effet de la parité monétaire euro/dollar est pratiquement neutre  : le cours moyen de l’euro par rapport au dollar est passé de 1,361 en janvier à 1,363 en février.
</p>
<p>
Par conséquent, à compter du 1er mars 2014 à zéro heure  :
</p>
<p>
1°/ Pour les carburants routiers, les prix maxima sont fixés comme suit :
<ul>
<li>Super sans plomb  : 1,49 €/l soit +1 ct/l par rapport à février 2014 (1,48 €/l)
<li>Gazole route  : 1,34 €/l soit +1 ct/l par rapport à février 2014 (1,33€/l)
</ul>
Il est à noter que sans la réforme introduite par le décret du 27 décembre 2013, ces prix seraient supérieurs de 2 à 4 cts/l.
</p>
<p>
2°/ Pour la bouteille de gaz de pétrole liquéfié de 12,5 kg, le prix maximum est fixé à 21,69 € au lieu de 21,64 en février, soit une hausse de 0,04 €.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}


if ( $page == "13" ) {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agriculture et alimentation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="3";
$issueDate="Mar 11, 2014";
$thisTitle="Projet d’arrêté préfectoral fixant les seuils de surface des espaces boisés au-delà desquels les défrichements sont soumis à autorisation";
$thisContent="
<p>
Contexte du projet
</p>
<p>
En Guadeloupe, les parcelles boisées situées dans des massifs boisés supérieurs à 4 ha doivent faire l’objet d’une demande de défrichement en application de l'article L341-3 du code forestier. L'article L342-1 de ce même code dispose que ce seuil peut être fixé entre 0,5 et 4 hectares par département ou partie de département par le représentant de l'état.
</p>
<p>
Dans un contexte de décentralisation des décisions en matière de défrichement en outre-mer, de réflexion sur l'émergence d\'une filière ''forêt-bois'', de recherche de nouveaux gisements de biomasse à valoriser et de volonté de préserver la biodiversité des forêts, la Direction de l'Alimentation, de l'Agriculture et de la Forêt (DAAF) a souhaité renforcer sa stratégie en matière de protection des forêts et de la biodiversité en élaborant une doctrine sur le défrichement.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "14" ) {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agriculture et alimentation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="3";
$issueDate="Mar 11, 2014";
$thisTitle="Calamité agricole";
$thisContent="
<p>
Dommages causés par la tempête Rafaël en octobre 2012 : le caractère de calamité agricole est reconnu.
</p>
<p>
La Préfète de la Guadeloupe a reconnu par les arrêtés N° 2013-034 /PREF/SGAR et N°2013-035/PREF/SGAR en date du 12 avril 2013 le caractère de calamité agricole pour les filières et les secteurs précisés ci-dessous.
</p>
<p>
Les productions de cultures vivrières, maraîchères, fruitières (y compris banane )sont déclarées sinistrées pour les communes de de Baie-Mahault, Baillif, Basse-Terre, Capesterre-Belle-Eau, Gourbeyre, La Désirade, Le Lamentin, Saint-Claude au titre des pertes de récolte du fait des dommages causés par la tempête Rafaël du 12 au 14 octobre 2012.
</p>
<p>
Pour ces mêmes productions et ces mêmes communes, les plantations pérennes sensibles aux effets des pluies, sont déclarées sinistrées au titre des pertes de fonds.
</p>
<p>
Les dégâts occasionnés sur les infrastructures nécessaires à l'activité agricole (traces, dommages au sol, équipements exposés des exploitations...) localisés sur ces mêmes communes sont également reconnus au titre des pertes de fonds.
</p>
<p>
Les producteurs concernés sont invités à se rapprocher de leurs organisations professionnelles pour la constitution des dossiers :
</p>
<p>
Planteurs adhérents d'un groupement
</p>
<p>
Production de cultures vivrières, maraîchères et fruitières :
</p>
<p>
SICA LPG<br>
CARAIBES MELONNIERS,<br>
SICACFEL,<br>
SICAPAG ,<br>
SICA les ALIZES,<br>
ASSOFWI,<br>
GIE Groupement des Maraichers de Basse-Terre.<br>
</p>
<p>
Planteurs non adhérents à un groupement
</p>
<p>
Pour toutes les productions reconnues sinistrées :
</p>
<p>
CHAMBRE D'AGRICULTURE
Chaque organisation disposera des formulaires individuels de demande d'aide pour procéder à l'élaboration de ces demandes, par producteur.
</p>
<p>
Les documents sont également téléchargeables sur le site de la DAAF:http://daaf971.agriculture.gouv.fr
</p>
<p>
Chaque structure précitée veillera à transmettre les dossiers à la Direction de l'Alimentation, de l'Agriculture et de la Forêt au plus tard :
</p>
<p>
- le vendredi 26 avril 2013 à 12 heures pour les producteurs bénéficiaires des aides POSEI,
</p>
<p>
- le vendredi 17 mai 2013 à 12 heures pour les autres producteurs.
</p>
<p>
Fait à Basse-Terre, le 17 avril 2013
</p>
<p>
Contacts presse en Guadeloupe :
<br>
Eric Bianchini – eric.bianchini@agriculture.gouv.fr - 0590 99 60 36
<br>
Direction de l’Alimentation, de l’Agriculture et de la Forêt
<br>
Service Economie Agricole
<br>
Jardin Botanique –97109 BASSE-TERRE
<br>
Didier-Laurent AUBERT - didier-laurent.aubert@agriculture.gouv.fr – 0690 75 28 88
<br>
Chargé Communication DAAF
<br>
Direction de l’Alimentation, de l’Agriculture et de la Forêt –Guadeloupe
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}














//Agence du Economie

// Main Menu

if ( $page == "4" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Agence du Economie";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="4";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=15">
	<h3 class="region_name">Élections municipales et communautaires : dépôt des candidatures</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=16">
	<h3 class="region_name">Consultation sur le projet de stratégie pour la Guadeloupe du futur contrat de plan État-Région</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=17">
	<h3 class="region_name">La commission départementale d’aménagement commercial (CDAC)</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=18">
	<h3 class="region_name">La fixation des prix des hydrocarbures</h3>
	<p class="region_location">Mar 9, 2014</p>
	</a></li>
	<li class="divider sponsor-message">sponsor messages</li>
	<li><a class="region_link" href="page.php?page=30">
	<h3 class="region_name">Vote for Francois Hollande, Prime Minister</h3>
	<p class="region_location">Socialist Party of France</p>
	</a></li>
</ul>
');
}

if ( $page == "15") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence du Economie";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="4";
$issueDate="Mar 10, 2014";
$thisTitle="Élections municipales et communautaires : dépôt des candidatures";
$thisContent="
<p>
L’ouverture de la période de dépôts de candidatures pour le 1er  tour des élections municipales et communautaires du 23 mars 2014 est effective à la préfecture de la région Guadeloupe depuis le lundi 10 février 2014 et se terminera le jeudi 6 mars 2014 à 18h00 selon le calendrier suivant.
</p>
<p>
Or, en deux semaines seules 3 listes ont été déposées à la préfecture (1 pour Anse-Bertrand, 1 pour Petit-Bourg et 1 pour Bouillante) alors que le total de listes attendues devrait être aux environs de 120.
</p>
<p>
La préfecture rappelle que pour être élu, le dépôt de candidature est obligatoire pour toutes les communes y compris pour les communes de 3500 habitants qui n’étaient pas jusqu’à présent soumises à cette obligation.
</p>
<p>
Par ailleurs, un dépôt de liste tardif prive les candidats de toute possibilité de compléter en temps utile leur liste, si cette dernière ne comporte pas l’ensemble des éléments prévus par la réglementation. En effet, à compter du jeudi 6 mars à 18h00 plus aucun candidat ne pourra accéder à la préfecture afin de déposer sa liste de candidature.
</p>
<p>
C’est la raison pour laquelle la préfète de région appelle l’attention des candidats potentiels sur la nécessité de se rapprocher dès maintenant des services de la préfecture pour faire enregistrer leur candidature.
</p>
<p>
Une permanence téléphonique est à leur disposition au numéro suivant : 0690 33 06 66
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}


if ( $page == "16") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence du Economie";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="4";
$issueDate="Mar 10, 2014";
$thisTitle="Consultation sur le projet de stratégie pour la Guadeloupe du futur contrat de plan État-Région";
$thisContent="
<p>
La Préfecture et la Région Guadeloupe lancent une consultation publique sur le projet de stratégie pour la Guadeloupe du futur contrat de plan État-Région (CPER) 2014-2020 accompagné d’une note de présentation.
</p>
<p>
Ce document élaboré dans le cadre d’un travail partenarial entre les services de l’État et du conseil régional, vise la définition d’une stratégie globale établie à partir d’un diagnostic des besoins du territoire et esquissant les domaines d’intervention prioritaires du nouveau contrat.
</p>
<p>
Cette réflexion stratégique s’articule autour de six thématiques prioritaires :
</p>
<p>
<ul>
<li>infrastructures et services collectifs de base, vulnérabilité des territoires et populations ;
aménagement urbain durable ;
<li>gestion des ressources énergétiques et environnementales (transitions énergétiques et écologiques) ;
<li>développement de la recherche et de l’innovation, filières d’excellence ;
<li>cohésion sociale et employabilité ;
<li>développement économique durable (comprenant le développement de l’économie numérique).
<li>Ces six thématiques sont complétées de deux volets particuliers (les priorités d’investissement en matière de mobilité multimodale ; et les quartiers prioritaires de la politique de la ville) ainsi que deux documents annexes (la stratégie de cohérence régionale d’aménagement numérique du territoire ; et la stratégie pour l’emploi, l’orientation et la formation professionnelle).
</p>
<p>
L’ensemble des éléments est consultable dans le cadre d’une consultation publique ouverte jusqu’au 31 janvier 2014.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "17") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence du Economie";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="4";
$issueDate="Mar 10, 2014";
$thisTitle="La commission départementale d’aménagement commercial (CDAC)";
$thisContent="
<p>
La commission départementale d’aménagement commercial (CDAC) délivre les autorisations d’exploitation commerciale. Elle statue sur les créations et modifications des surfaces de vente au détail. Elle est également compétente en matière d'aménagement cinématographique. Le secrétariat de la CDAC est assuré par les services de la préfecture de la région Guadeloupe.
</p>
<p>
Conformément à l’article L751-2 du code de commerce , chaque CDAC est composée de 5 élus, dont le maire de la commune d’implantation, et de 3 personnalités qualifiées en matière de consommation, de développement durable et d’aménagement du territoire.
</p>
<p>
Aucun membre de la CDAC ne peut délibérer dans une affaire où il a un intérêt personnel ou s’il représente ou a représenté une ou des parties concernées.
</p>
<p>
Pour saisir la commission départementale, le porteur de projet doit adresser un dossier de demande au secrétariat de la CDAC. Les indications et renseignements devant être fournis à cette occasion sont détaillés dans l’arrêté du 21 août 2009 .
</p>
<p>
La demande ainsi formulée doit comporter des informations relatives au demandeur, une présentation du projet et de ses effets au regard de l’aménagement du territoire, du développement durable et de la préservation de l’environnement. Les conditions de réalisation du projet doivent également être abordées.
</p>
<p>
À compter de l’enregistrement de la demande, la CDAC dispose d’un délai de 2 mois  pour examiner le projet dont elle a été saisi. Passé ce délai, la décision est réputée favorable.
</p>
<p>
La CDAC est présidée par le préfet, ou son représentant qui anime les débats sans prendre part au vote. Elle ne peut délibérer que si elle dispose du quorum de 5 membres présents sur 8 pour un projet d’aménagement commercial. Si ce quorum n’est pas atteint, une nouvelle CDAC devra se réunir dans des délais contraints. Elle ne pourra alors se tenir que si au moins 4 de ses membres sont présents. La CDAC se prononce sur la totalité du projet. Elle se prononce par un vote à bulletins nominatifs. L’autorisation n’est acquise que si le projet recueille le vote favorable de la majorité absolue des membres présents.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "18") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Agence du Economie";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="4";
$issueDate="Mar 10, 2014";
$thisTitle="La fixation des prix des hydrocarbures relève en Guadeloupe";
$thisContent="
<p>
La fixation des prix des hydrocarbures relève en Guadeloupe, comme dans l’ensemble des DOM, d’un régime dérogatoire puisque c’est le Préfet qui détermine les prix maxima de vente des produits, alors qu’en métropole ces prix sont librement fixés par les compagnies pétrolières.
</p>
<p>
Le décret n° 2003-1241 du 23 décembre 2003 constituait le cadre d’intervention de l’autorité administrative.
</p>
<p>
Les différents rapports d’inspection qui ont été produits en 2009 et 2010 ont mis en évidence la nécessité d’actualiser les mécanismes d’analyse des coûts supportés par les différents opérateurs de la chaîne de production et d’approvisionnement.
</p>
<p>
C’est le décret n° 2010-1332  du 8 novembre 2010  qui a conclu cette procédure de révision des conditions d’organisation du marché pétrolier.
</p>
<p>
Ce décret constitue donc aujourd’hui le cadre dans lequel sont déterminés les prix des carburants.
</p>
<p>
Par rapport au dispositif antérieur, le nouveau régime est marqué par le double souci de promouvoir un mécanisme qui permette de préserver le modèle antillais de production et de distribution des carburants, tout en se conformant aux conditions réelles du marché et en assurant la plus totale transparence sur la formation des prix.
</p>
<p>
De manière concrète, les modalités de calculs des prix et de ses composantes, dont les cotations  du brut et des produits finis et semi-finis  qui servent à calculer les variations des coûts d’achat des produits, ainsi que la parité euro-dollar, ont été exposées et expliquées à l’ensemble des membres de l’Observatoire des prix et des revenus  lors de sa séance du 15 avril 2011.
</p>
<p>
Comme annoncé notamment lors de cette séance, ces modalités de calculs ont été précisées et complétées par voie d’un arrêté préfectoral de méthode, à la fois en Guadeloupe, en Guyane et en Martinique. Cet arrêté a été signé le 22 juin 2011 en Guadeloupe.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}









//Culture, jeunesse, sports: 5

// Main Menu

if ( $page == "5" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Ministry du Culture, jeunesse, sports";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="5";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=19">
	<h3 class="region_name">Le guide Sport & Handicap de Guadeloupe</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=20">
	<h3 class="region_name">Le Service Civique</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=21">
	<h3 class="region_name">Validation des acquis de l’expérience</h3>
	<p class="region_location">Mar 9, 2014</p>
	</a></li>
</ul>
');
}

if ( $page == "19") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Ministry du Culture, jeunesse, sports";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="5";
$issueDate="Mar 10, 2014";
$thisTitle="Le guide Sport & Handicap de Guadeloupe";
$thisContent="
<p>
En complément du site national handiguide, cette réalisation régionale vise à permettre à chacun de trouver une réponse et d’intégrer la pratique physique et sportive dans son projet de vie, source de mieux être et de défi personnel. Il apporte également des conseils pratiques aux clubs souhaitant accueillir des personnes en situation de handicap.
</p>
<p>
Ce guide regroupe un ensemble d’informations utiles aux personnes en situation de handicap pour les aider à pratiquer l’activité physique et sportive de leur choix. Il apporte également aux clubs sportifs souhaitant accueillir ce public une approche de base des différents types de handicap et des conseils pratiques pour la mise en œuvre de leur projet.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "20") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Ministry du Culture, jeunesse, sports";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="5";
$issueDate="Mar 10, 2014";
$thisTitle="Le Service Civique";
$thisContent="
<p>
Le Service Civique permet à tous les jeunes de 16 à 25 ans qui le souhaitent de s’engager sur une période de 6 à 12 mois, pour une mission au service de la collectivité et de l’intérêt général. Il peut être effectué auprès d’organismes à but non lucratif ou de personnes morales de droit public en France ou à l’international.
</p>
<p>
Les missions de Service Civique couvrent des domaines prioritaires pour la Nation et l’ensemble de la société tels que la solidarité et la lutte contre l’exclusion, l’éducation, l’environnement, le sport et la culture, etc.
</p>
<p>
Le Service Civique propose d’unifier sous un statut homogène, lisible et simple, quelques uns des principaux dispositifs de volontariats. Il simplifie également la procédure d’agrément pour les organismes d’accueil pour permettre aux structures d’accueillir plus facilement des volontaires.
</p>
<p>
Il donne lieu à une indemnité et à une couverture sociale adaptée prises en charge intégralement par l’État. Le Service Civique est également valorisé dans le parcours de formation au travers du livret de compétence, des cursus universitaires ou de la validation des acquis de l’expérience.
</p>
<p>
En 2010, 10 000 jeunes seront concernés par le Service Civique. D'ici à 5 ans, il a vocation à mobiliser 75 000 jeunes.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "21") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Ministry du Culture, jeunesse, sports";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="5";
$issueDate="Mar 7, 2014";
$thisTitle="Validation des acquis de l’expérience";
$thisContent="
<p>
La validation des acquis de l’expérience : La VAE permet d’obtenir tout ou partie d’un diplôme ou d’un certificat de qualification professionnelle, sur la base d’une expérience personnelle ou professionnelle. Toute personne, quelque soit son âge, sa nationalité, son statut et son niveau de formation, ayant au moins 3 ans d’expérience salariée, bénévole en rapport direct avec le diplôme visé, peut faire valider ses compétences et bénéficier de la VAE.
</p>
<p>
Par exemple, vous pouvez obtenir le diplôme aide-soignant après une expérience d’au moins trois ans en établissement de santé ou à domicile, dans les soins d’hygiène et de confort : toilette, habillage, prise des repas, élimination et déplacement.
</p>
<p>
Le diplôme obtenu par la VAE est le même que celui obtenu en formation initiale. Concrètement, le candidat intéressé devra remplir un dossier de recevabilité : si celui-ci est retenu, il passera alors devant un jury qui vérifiera ses compétences, ses aptitudes et les connaissances exigées pour l’obtention du diplôme ou du certificat concerné.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}













//Education et formation: 6

// Main Menu

if ( $page == "6" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=22">
	<h3 class="region_name">Journée nationale de innovation 2014</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=23">
	<h3 class="region_name">Le Service Civique</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=24">
	<h3 class="region_name">Eduquer en pays dominé... Ecrire en pays dominé</h3>
	<p class="region_location">Mar 9, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=25">
	<h3 class="region_name">Visite au collège Maryse Condé</h3>
	<p class="region_location">Mar 7, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=26">
	<h3 class="region_name">Deux nouvelles formations d’ingénieur tournées vers le développement durable</h3>
	<p class="region_location">Mar 4, 2014</p>
	</a></li>
</ul>
');
}

if ( $page == "22") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$issueDate="Mar 10, 2014";
$thisTitle="Journée nationale de innovation 2014";
$thisContent="
<p>
Découvrez les 30 projets sélectionnés pour la journée nationale de l'innovation et votez pour celui qui retient votre attention. L'académie de la Guadeloupe est dignement représentée par le lycée Raoul Georges Nicolo qui fait partie du « top 30 » avec le projet ''design culinaire'' ! Les votes sont ouverts jusqu'au jeudi 27 mars à 11h. Les résultats seront proclamés le jour de l'événement et sur le site ''Respire''. La journée nationale de l'innovation 2014 se tiendra le jeudi 27 mars prochain à la Bibliothèque nationale de France (Bnf), à Paris.
</p>
<p>
30 projets parmi 530 candidatures ont été sélectionnés par un grand jury. Cette sélection comporte des actions portées par des enseignants du premier ou du second degré, des chefs d'établissement, des directeurs d'école ou encore par des formateurs.
</p>
<p>
La journée de l'innovation est également l'occasion pour des professionnels expérimentés et des chercheurs de haut niveau d'échanger et de mettre leur expérience au service du plus grand nombre. L'événement national s'articule avec les ''semaines académiques de l'innovation''.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "23") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$issueDate="Mar 10, 2014";
$thisTitle="Le Service Civique";
$thisContent="
<p>
Le Service Civique permet à tous les jeunes de 16 à 25 ans qui le souhaitent de s’engager sur une période de 6 à 12 mois, pour une mission au service de la collectivité et de l’intérêt général. Il peut être effectué auprès d’organismes à but non lucratif ou de personnes morales de droit public en France ou à l’international.
</p>
<p>
Les missions de Service Civique couvrent des domaines prioritaires pour la Nation et l’ensemble de la société tels que la solidarité et la lutte contre l’exclusion, l’éducation, l’environnement, le sport et la culture, etc.
</p>
<p>
Le Service Civique propose d’unifier sous un statut homogène, lisible et simple, quelques uns des principaux dispositifs de volontariats. Il simplifie également la procédure d’agrément pour les organismes d’accueil pour permettre aux structures d’accueillir plus facilement des volontaires.
</p>
<p>
Il donne lieu à une indemnité et à une couverture sociale adaptée prises en charge intégralement par l’État. Le Service Civique est également valorisé dans le parcours de formation au travers du livret de compétence, des cursus universitaires ou de la validation des acquis de l’expérience.
</p>
<p>
En 2010, 10 000 jeunes seront concernés par le Service Civique. D'ici à 5 ans, il a vocation à mobiliser 75 000 jeunes.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "24") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$issueDate="Mar 9, 2014";
$thisTitle="Eduquer en pays dominé... Ecrire en pays dominé";
$thisContent="
<p>
Les 20 et 21 février 2014 se sont déroulées les premières journées des Lettres et de l'histoire sur le thème : Eduquer en pays dominé (Afrique, Amérique, Caraïbes, Europe). A partir d'une préconisation de la ministre de l'enseignement supérieur Geneviève Fioraso, qui préconisait le rapprochement des universités et des classes préparatoires, ces journées ont concrétisé le partenariat entre les classes préparatoires littéraires du lycée.
</p>
<p>
Gerville-Réache de Basse-Terre et le département pluri-disciplinaire de Sciences Humaines de l'UAG. Des chercheurs de l'Université des Antilles-Guyane, mais aussi de l'hexagone, avec comme invité d'honneur l'écrivain Patrick Chamoiseau y ont animé des conférences et des tables rondes.
</p>
<p>
Le recteur d'académie, Stephan Martens, est intervenu en ouverture de ces rencontres le jeudi 20 février, sur le campus du camp Jacob à Saint-Claude. Il a ainsi affirmé l'intérêt de la mise en débat d'une telle question dans la formation intellectuelle  des jeunes.
</p>
<p>
Il s'est appuyé sur les écritures diverses en pays dominé pour expliquer que derrière les barrières des langues imposées, il fallait voir dans ces écritures, quelles que soient les époques et les situations, l'affirmation d'une identité, la résistance en œuvre, et l'imaginaire au travail, la libération d'une littérature et l'avènement d'une littérature de libération.
</p>
<p>
Bien sûr, le recteur s'est attaché à mettre cette thématique en lien avec les priorités du nouveau projet d'académie 2014-2017, pour ce qui concerne notamment la maîtrise de la langue écrite et parlée, nécessaire pour que nos élèves ne deviennent pas des ''sauvageons'', mais aussi la prise en compte de la langue créole maternelle et l'intégration de ses spécificités dans l'apprentissage de la langue française dans toutes les disciplines, pour reconquérir une estime de soi parfois bafouée.
</p>
<p>
Enfin, dépassement ou sublimation, cette analyse de l''écriture en pays dominé, de l'éducation en pays dominé, doit ouvrir une réflexion qui permette d'éviter les visions réductrices et démobilisatrices...
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "25") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$issueDate="Mar 7, 2014";
$thisTitle="Visite au collège Maryse Condé";
$thisContent="
<p>
Le vendredi 21 février 2014, le recteur d'académie, Stephan Martens, s'est rendu au collège Maryse Condé à la Désirade. Petit collège rural souffrant de la double insularité, le collège qui accueille 84 élèves, encadrés par 10 enseignants, est un établissement de proximité piloté par une équipe dynamique et impliquée, qui s’est fixée comme objectifs la réussite scolaire des élèves et leur ouverture au monde.
</p>
<p>
L’environnement rend les conditions d’accueil et d’apprentissage exceptionnelles, qui malheureusement ne stabilisent pas les personnels dont le ''turn over'' important fragilise toute prise en charge pédagogique malgré les efforts de l’équipe de direction. Pour les mêmes raisons d’isolement, le remplacement des personnels absents est une vraie difficulté, comme le passage irrégulier des personnels sociaux et de santé. Par ailleurs, l’effectif de l’établissement est très sensible aux variations conjoncturelles, ainsi à la rentrée 2014 l’effectif en 6ème est de 6 élèves, l’apport extérieur étant quasiment nul, l’établissement devra supporter l’impact de cette cohorte pendant 4 ans.
</p>
<p>
Ce contexte particulièrement difficile au plan pédagogique, rend obligatoire l’innovation pédagogique et la construction d’un modèle unique inter-degrés. Des modalités administratives et pédagogiques différentes doivent être rapidement explorées  avec l’aide des corps d’inspection, la mise en place du conseil école collège ainsi que le socle commun sont des éléments qui doivent permettre la co-animation pédagogique et une proposition de projet unique école-collège.
</p>
<p>
Aussi, un projet est attendu pour la fin du mois de mai 2014. Le modèle proposé doit s’appuyer sur une articulation réussie des potentiels des premier et second degrés et doit optimiser l’emploi des ressources humaines, tous les décloisonnements pédagogiques seront accueillis favorablement.
</p>
<p>
Le conseil pédagogique et le conseil d’administration extraordinaire ont permis à chacun de s’exprimer dans une ambiance constructive. La présence du maire a ouvert les débats sur plusieurs pistes de progrès.
</p>
<p>
La mise en place d’un réseau école-collège est impérative.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "26") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Education et formation";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="6";
$issueDate="Mar 4, 2014";
$thisTitle="Deux nouvelles formations d’ingénieur tournées vers le développement durable";
$thisContent="
<p>
La cérémonie d’ouverture des formations d’ingénieur tournées vers le développement durable s’est déroulée le vendredi 28 Février 2014, en présence du ministre des Outremers, sur le Campus de Fouillole.
</p>
<p>
Ces deux nouveaux diplômes, génie de l’environnement et génie des systèmes énergétiques, sont le résultat de la persévérance du doyen, le professeur Alex Méril, mais aussi du soutien financier de la région Guadeloupe à hauteur de 10 millions d’euros et du partenariat de qualité avec EDT Guadeloupe, représenté par son directeur Pascal Mithois, parrain de la promotion et avec l’ENSIACET, école prestigieuse d’ingénieurs de Toulouse, représenté par son directeur Jean Marc Le Lann.
</p>
<p>
Entrecoupés d’intermèdes musicaux, en présence du recteur d’académie, des élus, des chefs d’entreprise, de la communauté universitaire et des 16 étudiants de la promotion « Raoul Nicolo », la cérémonie a permis à chaque intervenant d’exprimer son soutien à cette initiative de l’UAG, pôle Guadeloupe.
</p>
<p>
La présidente de l’université, Corinne Mencé-Caster, a salué cette dynamique universitaire, ambitieuse et partagée, qui prouve la capacité de l’UAG à proposer une carte des formations attractive et des formations d’excellence, ouvertes sur le monde caribéen et sur l’international.
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}













//Securite et Defense: 7

// Main Menu

if ( $page == "7" ) {
$regionFull="St. Barthelemy | French Antilles | France";
$sponsorName="Securite et Defense";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="7";
$thisContent=utf8_encode('
<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=27">
	<h3 class="region_name">Catastrophe naturelle</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=28">
	<h3 class="region_name">Les risques majeurs en Guadeloupe</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=29">
	<h3 class="region_name">Information préventive</h3>
	<p class="region_location">Mar 9, 2014</p>
	</a></li>
</ul>
');
}

if ( $page == "27") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Securite et Defense";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="7";
$issueDate="Mar 13, 2014";
$thisTitle="Catastrophe naturelle";
$thisContent="
<p>
Le dispositif relatif à la procédure de reconnaissance de l'état de catastrophe naturelle pour les communes et à l'indemnisation des victimes s'applique en fonction des lois 82-600 modifiée et 90-509.
</p>
<p>
Catnat
</p>
<p>
Les conditions cumulatives pour mettre en jeu la garantie « Catastrophe Naturelle » sont :
<ul>
<li>Les biens endommagés doivent être couverts par un contrat d’assurance garantissant les dommages incendie ou tout autre dommage aux biens
<li>Les biens immobiliers construits et les activités exercées doivent respecter les règles administratives en vigueur,
<li>L’état de catastrophe naturelle doit être constaté par un arrêté interministériel après étude des dossiers par la commission interministérielle.
<li>Les rôles de chacun
<li>Les administrés ayant subi des dégâts doivent :
</ul>
Se manifester auprès de leur mairie, faire une déclaration de sinistre auprès de leur assureur dans les 5 jours francs suivant le phénomène.
Les maires doivent :
<ul>
<li>Rassembler les demandes des sinistrés et s’assurer qu’ils remplissent bien les critères d’éligibilité,
<li>Déposer une demande communale de reconnaissance de l’état de catastrophe naturelle en Préfecture Formulaire__CatNat_13669
<li>Joindre un rapport précisant les mesures de prévention déjà mises en œuvre ou envisagées pour palier les conséquences de ces événements, 
<li>Joindre une carte géographique précise de la zone sinistrée, 
<li>Joindre des photographies des désordres occasionnés.
</ul>
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "28") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Securite et Defense";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="7";
$issueDate="Mar 10, 2014";
$thisTitle="Les risques majeurs en Guadeloupe";
$thisContent="
<p>
Le risque majeur est la possibilité d'un événement d'origine naturelle, dont les effets peuvent mettre en jeu un grand nombre de personnes, occasionner des dommages importants et dépasser les capacités de réaction de la société.
</p>
<p>
L'existence d'un risque majeur est liée :
<ul>
<li>d'une part à la présence d'un événement, qui est la manifestation d'un phénomène naturel ou anthropique ;
<li>d'autre part à l'existence d'enjeux, qui représentent l'ensemble des personnes et des biens pouvant être affectés par un phénomène. Les conséquences d'un risque majeur sur les enjeux se mesurent en terme de vulnérabilité. 
</ul>
</p>
<p>
Un risque majeur est caractérisé par sa faible fréquence et par son énorme gravité.
</p>
<p>
Les  risques naturels en Guadeloupe:
</ul>
<li>Le risque cyclonique
<li>Le risque inondation
<li>Le risque sismique
<li>Le risque mouvement de terrain
<li>Le risque volcanique
<li>Le risque tsunami
<li>Les risques technologiques  en Guadeloupe
<li>Le risque Industriel
<li>Le risque TMD (Transport Matières Dangereuses)
</ul>
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

if ( $page == "29") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Securite et Defense";
$sponsorLocation="Gustavia, Quai du General de Gaulle";
$sponsorImage="saint-barthelemy-flag.png";
$sponsorPage="7";
$issueDate="Mar 9, 2014";
$thisTitle="Information préventive";
$thisContent="
<p>
L'information préventive sur les risques majeurs est un droit du citoyen inscrit dans le code de l'environnement. Elle consiste à décrire les risques, leurs conséquences prévisibles pour les personnes, les biens, l'environnement et à faire connaître les mesures de prévention et de sauvegarde à appliquer pour en limiter les effets.
</p>
<p>
La responsabilité d'information du citoyen est partagée entre le préfet et le maire.
</p>
<p>
 DDRM_2004
</p>
<p>
Le préfet arrête la liste des communes où des risques sont identifiés et établit un dossier qui recense et décrit les phénomènes prévisibles et les accidents, leurs conséquences sur les personnes et les biens ainsi que les mesures individuelles et collectives pour en réduire les dommages. Ce dossier est nommé Dossier Départemental sur les Risques Majeurs (DDRM) . 
Le maire, sur la base des informations transmises par le préfet, doit établir un document qui précise les dispositions particulières qu'il a prises au titre de ses pouvoirs de police. Ce document est nommé Document d'Information Communal sur les Risques Majeurs (DICRIM).
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}






if ( $page == "31" ) {
$regionFull="Socialist Party of France";
$sponsorName="Socialist Party of France";
$sponsorLocation="Paris, France";
$sponsorPage="31";
$sponsorImage="socialist-party.png";
$thisContent= '

<ul data-role="listview" data-filter="true" data-input="#filterBasic-input" data-inset="false" data-theme="a"  data-divider-theme="a" data-count-theme="a">
	<li><a class="region_link" href="page.php?page=30">
	<h3 class="region_name">Vote for Francois Hollande, Prime Minister</h3>
	<p class="region_location">Socialist Party of France</p>
	</a></li>
</ul>
';
}


if ( $page == "30") {
$regionFull="Guadeloupe | French Antilles | France";
$sponsorName="Socialist Party of France";
$sponsorLocation="Paris, France";
$sponsorPage="31";
$sponsorImage="socialist-party.png";
$issueDate="Mar 9, 2014";
$thisTitle="Vote for Francois Hollande this Sunday";
$thisContent="
<p>
L'information préventive sur les risques majeurs est un droit du citoyen inscrit dans le code de l'environnement. Elle consiste à décrire les risques, leurs conséquences prévisibles pour les personnes, les biens, l'environnement et à faire connaître les mesures de prévention et de sauvegarde à appliquer pour en limiter les effets.
</p>
<img style='height:200px;width:auto;float:left;margin:10px 20px 10px 0' src='http://img.timeinc.net/time/2012/t100poll/t100poll_hollande_francois.jpg'>
<p>
La responsabilité d'information du citoyen est partagée entre le préfet et le maire.
</p>
<p>
 DDRM_2004
</p>
<p>
Le préfet arrête la liste des communes où des risques sont identifiés et établit un dossier qui recense et décrit les phénomènes prévisibles et les accidents, leurs conséquences sur les personnes et les biens ainsi que les mesures individuelles et collectives pour en réduire les dommages. Ce dossier est nommé Dossier Départemental sur les Risques Majeurs (DDRM) . 
Le maire, sur la base des informations transmises par le préfet, doit établir un document qui précise les dispositions particulières qu'il a prises au titre de ses pouvoirs de police. Ce document est nommé Document d'Information Communal sur les Risques Majeurs (DICRIM).
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

?>

