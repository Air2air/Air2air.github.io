
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
	<h3 class="region_name">Strat�gie nationale de Sant�</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=11">
	<h3 class="region_name">Semaine europ�enne de la vaccination du 27 avril au 04 Mai 2013</h3>
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
$thisTitle="CHIKUNGUNYA: deux cas confirm�s � ST MARTIN";
$thisContent="
<p>
Les services de l�ARS � St Martin ont recens� sur l�ile des cas �vocateurs de Chikungunya. L�Agence de Sant� (via le p�le Veille sanitaire) et la CIRE Antilles Guyane (Institut National de Veille Sanitaire) ont imm�diatement d�ploy� un dispositif de surveillance renforc�.
</p>
<div class='content_image'>
	<img src='http://www.todayifoundout.com/wp-content/uploads/2010/08/mosquito_malaria.png'>
</div>
<p>
Le Chikungunya est transmis � Saint Martin par le moustique Aedes Aegypti, dont les sympt�mes ressemblent � ceux de la dengue.
Les consignes de pr�vention et les mesures de protection sont �galement identiques � celles mises en �uvre contre la dengue :
<ul>
<li>Eviter de vous faire piquer
<li>Lutter contre les moustiques et les g�tes larvaires
<li>Consulter votre m�decin traitant en cas de fi�vre.
</ul>
Une campagne de communication est en cours gr�ce aux soins des �quipes de la LAV (Lutte Anti Vectorielle).
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
$thisTitle="Strat�gie nationale de Sant�";
$thisContent="
<p>
Les 23, 25, 27 et 31 Janvier 2014, l�Agence de Sant� de Guadeloupe, Saint-Martin et Saint-Barth�lemy organise des d�bats publics dans le cadre de la Strat�gie Nationale de Sant�.
</p>
<p>
Chacun des trois territoires de sant� sera mobilis� autour de th�matiques conformes aux orientations indiqu�es par la Ministre de la Sant� lors du lancement de la Strat�gie Nationale de Sant�, le 23 septembre dernier.
</p>
<p>
Il sera �galement question au cours de ces d�bats publics, d�aborder les probl�matiques de sant� qui se posent de mani�re forte au sein de la population, en pr�sence de repr�sentants de plusieurs organismes, institutions et associations concern�s par ces questions.
Les matin�es seront consacr�es essentiellement aux sujets relevant de :
</p>
<p>
<ul>
<li>La nutrition
<li>L�activit� physique
<li>Le surpoids et l�ob�sit�
<li>Les maladies chroniques
<li>Les apr�s-midis, chaque territoire de sant� d�b�tera autour de tables rondes, de th�matiques telles que :
</ul>
<ul>
<li>La canc�rologie
<li>La sant� des jeunes
<li>Le vieillissement
<li>Une journ�e sp�ciale sera d�di�e aux � droits des usagers �, compte tenu du caract�re transversal de ce domaine.
</ul>
</p>
<p>
Les participants attendus � ces d�bats publics sont les professionnels de sant� mais �galement les usagers.
</p>
<p>
 L�Agence de Sant� de Guadeloupe, Saint-Martin et Saint-Barth�lemy souhaite la participation active et d�envergure de tous les citoyens guadeloup�ens et des �les du Nord qui veulent partager leurs t�moignages, initiatives et projets innovants.
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
$thisTitle="Semaine europ�enne de la vaccination du 27 avril au 04 Mai 2013";
$thisContent="
<p>
La vaccination reste un moyen de pr�vention indispensable contre certaines maladies. Elle permet de se prot�ger mais aussi de prot�ger les autres.
Profitez de la semaine europ�enne de la vaccination du 27 avril au 04 Mai 2013 pour faire le point sur vos vaccins et ceux de vos proches. 
N�h�sitez pas � faire v�rifier vos carnets de sant� et de vaccination aupr�s d�un professionnel de sant� ou dans un centre de vaccination habilit� par l�ARS.

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
	<h3 class="region_name">Projet d�arr�t� pr�fectoral fixant les seuils de surface des espaces bois�s</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=14">
	<h3 class="region_name">Calamit� agricole</h3>
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
Le d�cret n� 2013-1314 du 27 d�cembre 2013 pr�voit que les prix des produits p�troliers et du gaz sont r�vis�s chaque mois en fonction de l��volution des cours et de la parit� mon�taire euro/dollar constat�es lors du mois pr�c�dent.
</p>
<p>
 En f�vrier 2014, le march� a �volu� de la mani�re suivante :
</p>
<p>
1 � Hausse de la moyenne des cotations du p�trole brut (Brent) de 0,9 %
</p>
<p>
Le prix moyen du baril de Brent a augment�, passant de 107,87 $ ( Source : BREND FOB dat�, figurant au Platt�s) en janvier � 108,79 $ ( Source : BREND FOB dat�, figurant au Platt�s) en f�vrier 2014. Cette tendance s�explique essentiellement par l�arr�t de la production dans l�Est de la Lybie.
</p>
<p>
2 � Hausse de la moyenne des cotations du super de 2,6 % et du gazole de 1,6%
</p>
<p>
Cette tendance s�explique par l�arr�t de la production dans l�Est de la Lybie et l�augmentation de la demande li�e d�une part � l�am�lioration de l�activit� �conomique en Europe et aux USA et d�autre part au climat froid en Am�rique du Nord, Asie centrale et Iran pour le Gazole.
</p>
<p>
3 � Baisse de la moyenne des cotations du butane de 0,8 % et hausse de la moyenne des cotations du propane de 15 %
</p>
<p>
Le gaz subit les effets des arr�ts de production, notamment au Moyen Orient (Lybie).
</p>
<p>
L�effet de la parit� mon�taire euro/dollar est pratiquement neutre  : le cours moyen de l�euro par rapport au dollar est pass� de 1,361 en janvier � 1,363 en f�vrier.
</p>
<p>
Par cons�quent, � compter du 1er mars 2014 � z�ro heure  :
</p>
<p>
1�/ Pour les carburants routiers, les prix maxima sont fix�s comme suit :
<ul>
<li>Super sans plomb  : 1,49 �/l soit +1 ct/l par rapport � f�vrier 2014 (1,48 �/l)
<li>Gazole route  : 1,34 �/l soit +1 ct/l par rapport � f�vrier 2014 (1,33�/l)
</ul>
Il est � noter que sans la r�forme introduite par le d�cret du 27 d�cembre 2013, ces prix seraient sup�rieurs de 2 � 4 cts/l.
</p>
<p>
2�/ Pour la bouteille de gaz de p�trole liqu�fi� de 12,5 kg, le prix maximum est fix� � 21,69 � au lieu de 21,64 en f�vrier, soit une hausse de 0,04 �.
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
$thisTitle="Projet d�arr�t� pr�fectoral fixant les seuils de surface des espaces bois�s au-del� desquels les d�frichements sont soumis � autorisation";
$thisContent="
<p>
Contexte du projet
</p>
<p>
En Guadeloupe, les parcelles bois�es situ�es dans des massifs bois�s sup�rieurs � 4 ha doivent faire l�objet d�une demande de d�frichement en application de l'article L341-3 du code forestier. L'article L342-1 de ce m�me code dispose que ce seuil peut �tre fix� entre 0,5 et 4 hectares par d�partement ou partie de d�partement par le repr�sentant de l'�tat.
</p>
<p>
Dans un contexte de d�centralisation des d�cisions en mati�re de d�frichement en outre-mer, de r�flexion sur l'�mergence d\'une fili�re ''for�t-bois'', de recherche de nouveaux gisements de biomasse � valoriser et de volont� de pr�server la biodiversit� des for�ts, la Direction de l'Alimentation, de l'Agriculture et de la For�t (DAAF) a souhait� renforcer sa strat�gie en mati�re de protection des for�ts et de la biodiversit� en �laborant une doctrine sur le d�frichement.
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
$thisTitle="Calamit� agricole";
$thisContent="
<p>
Dommages caus�s par la temp�te Rafa�l en octobre 2012 : le caract�re de calamit� agricole est reconnu.
</p>
<p>
La Pr�f�te de la Guadeloupe a reconnu par les arr�t�s N� 2013-034 /PREF/SGAR et N�2013-035/PREF/SGAR en date du 12 avril 2013 le caract�re de calamit� agricole pour les fili�res et les secteurs pr�cis�s ci-dessous.
</p>
<p>
Les productions de cultures vivri�res, mara�ch�res, fruiti�res (y compris banane )sont d�clar�es sinistr�es pour les communes de de Baie-Mahault, Baillif, Basse-Terre, Capesterre-Belle-Eau, Gourbeyre, La D�sirade, Le Lamentin, Saint-Claude au titre des pertes de r�colte du fait des dommages caus�s par la temp�te Rafa�l du 12 au 14 octobre 2012.
</p>
<p>
Pour ces m�mes productions et ces m�mes communes, les plantations p�rennes sensibles aux effets des pluies, sont d�clar�es sinistr�es au titre des pertes de fonds.
</p>
<p>
Les d�g�ts occasionn�s sur les infrastructures n�cessaires � l'activit� agricole (traces, dommages au sol, �quipements expos�s des exploitations...) localis�s sur ces m�mes communes sont �galement reconnus au titre des pertes de fonds.
</p>
<p>
Les producteurs concern�s sont invit�s � se rapprocher de leurs organisations professionnelles pour la constitution des dossiers :
</p>
<p>
Planteurs adh�rents d'un groupement
</p>
<p>
Production de cultures vivri�res, mara�ch�res et fruiti�res :
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
Planteurs non adh�rents � un groupement
</p>
<p>
Pour toutes les productions reconnues sinistr�es :
</p>
<p>
CHAMBRE D'AGRICULTURE
Chaque organisation disposera des formulaires individuels de demande d'aide pour proc�der � l'�laboration de ces demandes, par producteur.
</p>
<p>
Les documents sont �galement t�l�chargeables sur le site de la DAAF:http://daaf971.agriculture.gouv.fr
</p>
<p>
Chaque structure pr�cit�e veillera � transmettre les dossiers � la Direction de l'Alimentation, de l'Agriculture et de la For�t au plus tard :
</p>
<p>
- le vendredi 26 avril 2013 � 12 heures pour les producteurs b�n�ficiaires des aides POSEI,
</p>
<p>
- le vendredi 17 mai 2013 � 12 heures pour les autres producteurs.
</p>
<p>
Fait � Basse-Terre, le 17 avril 2013
</p>
<p>
Contacts presse en Guadeloupe :
<br>
Eric Bianchini � eric.bianchini@agriculture.gouv.fr - 0590 99 60 36
<br>
Direction de l�Alimentation, de l�Agriculture et de la For�t
<br>
Service Economie Agricole
<br>
Jardin Botanique �97109 BASSE-TERRE
<br>
Didier-Laurent AUBERT - didier-laurent.aubert@agriculture.gouv.fr � 0690 75 28 88
<br>
Charg� Communication DAAF
<br>
Direction de l�Alimentation, de l�Agriculture et de la For�t �Guadeloupe
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
	<h3 class="region_name">�lections municipales et communautaires : d�p�t des candidatures</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=16">
	<h3 class="region_name">Consultation sur le projet de strat�gie pour la Guadeloupe du futur contrat de plan �tat-R�gion</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=17">
	<h3 class="region_name">La commission d�partementale d�am�nagement commercial (CDAC)</h3>
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
$thisTitle="�lections municipales et communautaires : d�p�t des candidatures";
$thisContent="
<p>
L�ouverture de la p�riode de d�p�ts de candidatures pour le 1er  tour des �lections municipales et communautaires du 23 mars 2014 est effective � la pr�fecture de la r�gion Guadeloupe depuis le lundi 10 f�vrier 2014 et se terminera le jeudi 6 mars 2014 � 18h00 selon le calendrier suivant.
</p>
<p>
Or, en deux semaines seules 3 listes ont �t� d�pos�es � la pr�fecture (1 pour Anse-Bertrand, 1 pour Petit-Bourg et 1 pour Bouillante) alors que le total de listes attendues devrait �tre aux environs de 120.
</p>
<p>
La pr�fecture rappelle que pour �tre �lu, le d�p�t de candidature est obligatoire pour toutes les communes y compris pour les communes de 3500 habitants qui n��taient pas jusqu�� pr�sent soumises � cette obligation.
</p>
<p>
Par ailleurs, un d�p�t de liste tardif prive les candidats de toute possibilit� de compl�ter en temps utile leur liste, si cette derni�re ne comporte pas l�ensemble des �l�ments pr�vus par la r�glementation. En effet, � compter du jeudi 6 mars � 18h00 plus aucun candidat ne pourra acc�der � la pr�fecture afin de d�poser sa liste de candidature.
</p>
<p>
C�est la raison pour laquelle la pr�f�te de r�gion appelle l�attention des candidats potentiels sur la n�cessit� de se rapprocher d�s maintenant des services de la pr�fecture pour faire enregistrer leur candidature.
</p>
<p>
Une permanence t�l�phonique est � leur disposition au num�ro suivant : 0690 33 06 66
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
$thisTitle="Consultation sur le projet de strat�gie pour la Guadeloupe du futur contrat de plan �tat-R�gion";
$thisContent="
<p>
La Pr�fecture et la R�gion Guadeloupe lancent une consultation publique sur le projet de strat�gie pour la Guadeloupe du futur contrat de plan �tat-R�gion (CPER) 2014-2020 accompagn� d�une note de pr�sentation.
</p>
<p>
Ce document �labor� dans le cadre d�un travail partenarial entre les services de l��tat et du conseil r�gional, vise la d�finition d�une strat�gie globale �tablie � partir d�un diagnostic des besoins du territoire et esquissant les domaines d�intervention prioritaires du nouveau contrat.
</p>
<p>
Cette r�flexion strat�gique s�articule autour de six th�matiques prioritaires :
</p>
<p>
<ul>
<li>infrastructures et services collectifs de base, vuln�rabilit� des territoires et populations ;
am�nagement urbain durable ;
<li>gestion des ressources �nerg�tiques et environnementales (transitions �nerg�tiques et �cologiques) ;
<li>d�veloppement de la recherche et de l�innovation, fili�res d�excellence ;
<li>coh�sion sociale et employabilit� ;
<li>d�veloppement �conomique durable (comprenant le d�veloppement de l��conomie num�rique).
<li>Ces six th�matiques sont compl�t�es de deux volets particuliers (les priorit�s d�investissement en mati�re de mobilit� multimodale ; et les quartiers prioritaires de la politique de la ville) ainsi que deux documents annexes (la strat�gie de coh�rence r�gionale d�am�nagement num�rique du territoire ; et la strat�gie pour l�emploi, l�orientation et la formation professionnelle).
</p>
<p>
L�ensemble des �l�ments est consultable dans le cadre d�une consultation publique ouverte jusqu�au 31 janvier 2014.
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
$thisTitle="La commission d�partementale d�am�nagement commercial (CDAC)";
$thisContent="
<p>
La commission d�partementale d�am�nagement commercial (CDAC) d�livre les autorisations d�exploitation commerciale. Elle statue sur les cr�ations et modifications des surfaces de vente au d�tail. Elle est �galement comp�tente en mati�re d'am�nagement cin�matographique. Le secr�tariat de la CDAC est assur� par les services de la pr�fecture de la r�gion Guadeloupe.
</p>
<p>
Conform�ment � l�article L751-2 du code de commerce , chaque CDAC est compos�e de 5 �lus, dont le maire de la commune d�implantation, et de 3 personnalit�s qualifi�es en mati�re de consommation, de d�veloppement durable et d�am�nagement du territoire.
</p>
<p>
Aucun membre de la CDAC ne peut d�lib�rer dans une affaire o� il a un int�r�t personnel ou s�il repr�sente ou a repr�sent� une ou des parties concern�es.
</p>
<p>
Pour saisir la commission d�partementale, le porteur de projet doit adresser un dossier de demande au secr�tariat de la CDAC. Les indications et renseignements devant �tre fournis � cette occasion sont d�taill�s dans l�arr�t� du 21 ao�t 2009 .
</p>
<p>
La demande ainsi formul�e doit comporter des informations relatives au demandeur, une pr�sentation du projet et de ses effets au regard de l�am�nagement du territoire, du d�veloppement durable et de la pr�servation de l�environnement. Les conditions de r�alisation du projet doivent �galement �tre abord�es.
</p>
<p>
� compter de l�enregistrement de la demande, la CDAC dispose d�un d�lai de 2 mois  pour examiner le projet dont elle a �t� saisi. Pass� ce d�lai, la d�cision est r�put�e favorable.
</p>
<p>
La CDAC est pr�sid�e par le pr�fet, ou son repr�sentant qui anime les d�bats sans prendre part au vote. Elle ne peut d�lib�rer que si elle dispose du quorum de 5 membres pr�sents sur 8 pour un projet d�am�nagement commercial. Si ce quorum n�est pas atteint, une nouvelle CDAC devra se r�unir dans des d�lais contraints. Elle ne pourra alors se tenir que si au moins 4 de ses membres sont pr�sents. La CDAC se prononce sur la totalit� du projet. Elle se prononce par un vote � bulletins nominatifs. L�autorisation n�est acquise que si le projet recueille le vote favorable de la majorit� absolue des membres pr�sents.
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
$thisTitle="La fixation des prix des hydrocarbures rel�ve en Guadeloupe";
$thisContent="
<p>
La fixation des prix des hydrocarbures rel�ve en Guadeloupe, comme dans l�ensemble des DOM, d�un r�gime d�rogatoire puisque c�est le Pr�fet qui d�termine les prix maxima de vente des produits, alors qu�en m�tropole ces prix sont librement fix�s par les compagnies p�troli�res.
</p>
<p>
Le d�cret n� 2003-1241 du 23 d�cembre 2003 constituait le cadre d�intervention de l�autorit� administrative.
</p>
<p>
Les diff�rents rapports d�inspection qui ont �t� produits en 2009 et 2010 ont mis en �vidence la n�cessit� d�actualiser les m�canismes d�analyse des co�ts support�s par les diff�rents op�rateurs de la cha�ne de production et d�approvisionnement.
</p>
<p>
C�est le d�cret n� 2010-1332  du 8 novembre 2010  qui a conclu cette proc�dure de r�vision des conditions d�organisation du march� p�trolier.
</p>
<p>
Ce d�cret constitue donc aujourd�hui le cadre dans lequel sont d�termin�s les prix des carburants.
</p>
<p>
Par rapport au dispositif ant�rieur, le nouveau r�gime est marqu� par le double souci de promouvoir un m�canisme qui permette de pr�server le mod�le antillais de production et de distribution des carburants, tout en se conformant aux conditions r�elles du march� et en assurant la plus totale transparence sur la formation des prix.
</p>
<p>
De mani�re concr�te, les modalit�s de calculs des prix et de ses composantes, dont les cotations  du brut et des produits finis et semi-finis  qui servent � calculer les variations des co�ts d�achat des produits, ainsi que la parit� euro-dollar, ont �t� expos�es et expliqu�es � l�ensemble des membres de l�Observatoire des prix et des revenus  lors de sa s�ance du 15 avril 2011.
</p>
<p>
Comme annonc� notamment lors de cette s�ance, ces modalit�s de calculs ont �t� pr�cis�es et compl�t�es par voie d�un arr�t� pr�fectoral de m�thode, � la fois en Guadeloupe, en Guyane et en Martinique. Cet arr�t� a �t� sign� le 22 juin 2011 en Guadeloupe.
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
	<h3 class="region_name">Validation des acquis de l�exp�rience</h3>
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
En compl�ment du site national handiguide, cette r�alisation r�gionale vise � permettre � chacun de trouver une r�ponse et d�int�grer la pratique physique et sportive dans son projet de vie, source de mieux �tre et de d�fi personnel. Il apporte �galement des conseils pratiques aux clubs souhaitant accueillir des personnes en situation de handicap.
</p>
<p>
Ce guide regroupe un ensemble d�informations utiles aux personnes en situation de handicap pour les aider � pratiquer l�activit� physique et sportive de leur choix. Il apporte �galement aux clubs sportifs souhaitant accueillir ce public une approche de base des diff�rents types de handicap et des conseils pratiques pour la mise en �uvre de leur projet.
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
Le Service Civique permet � tous les jeunes de 16 � 25 ans qui le souhaitent de s�engager sur une p�riode de 6 � 12 mois, pour une mission au service de la collectivit� et de l�int�r�t g�n�ral. Il peut �tre effectu� aupr�s d�organismes � but non lucratif ou de personnes morales de droit public en France ou � l�international.
</p>
<p>
Les missions de Service Civique couvrent des domaines prioritaires pour la Nation et l�ensemble de la soci�t� tels que la solidarit� et la lutte contre l�exclusion, l��ducation, l�environnement, le sport et la culture, etc.
</p>
<p>
Le Service Civique propose d�unifier sous un statut homog�ne, lisible et simple, quelques uns des principaux dispositifs de volontariats. Il simplifie �galement la proc�dure d�agr�ment pour les organismes d�accueil pour permettre aux structures d�accueillir plus facilement des volontaires.
</p>
<p>
Il donne lieu � une indemnit� et � une couverture sociale adapt�e prises en charge int�gralement par l��tat. Le Service Civique est �galement valoris� dans le parcours de formation au travers du livret de comp�tence, des cursus universitaires ou de la validation des acquis de l�exp�rience.
</p>
<p>
En 2010, 10 000 jeunes seront concern�s par le Service Civique. D'ici � 5 ans, il a vocation � mobiliser 75 000 jeunes.
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
$thisTitle="Validation des acquis de l�exp�rience";
$thisContent="
<p>
La validation des acquis de l�exp�rience : La VAE permet d�obtenir tout ou partie d�un dipl�me ou d�un certificat de qualification professionnelle, sur la base d�une exp�rience personnelle ou professionnelle. Toute personne, quelque soit son �ge, sa nationalit�, son statut et son niveau de formation, ayant au moins 3 ans d�exp�rience salari�e, b�n�vole en rapport direct avec le dipl�me vis�, peut faire valider ses comp�tences et b�n�ficier de la VAE.
</p>
<p>
Par exemple, vous pouvez obtenir le dipl�me aide-soignant apr�s une exp�rience d�au moins trois ans en �tablissement de sant� ou � domicile, dans les soins d�hygi�ne et de confort : toilette, habillage, prise des repas, �limination et d�placement.
</p>
<p>
Le dipl�me obtenu par la VAE est le m�me que celui obtenu en formation initiale. Concr�tement, le candidat int�ress� devra remplir un dossier de recevabilit� : si celui-ci est retenu, il passera alors devant un jury qui v�rifiera ses comp�tences, ses aptitudes et les connaissances exig�es pour l�obtention du dipl�me ou du certificat concern�.
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
	<h3 class="region_name">Journ�e nationale de innovation 2014</h3>
	<p class="region_location">Mar 13, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=23">
	<h3 class="region_name">Le Service Civique</h3>
	<p class="region_location">Mar 10, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=24">
	<h3 class="region_name">Eduquer en pays domin�... Ecrire en pays domin�</h3>
	<p class="region_location">Mar 9, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=25">
	<h3 class="region_name">Visite au coll�ge Maryse Cond�</h3>
	<p class="region_location">Mar 7, 2014</p>
	</a></li>
	<li><a class="region_link" href="page.php?page=26">
	<h3 class="region_name">Deux nouvelles formations d�ing�nieur tourn�es vers le d�veloppement durable</h3>
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
$thisTitle="Journ�e nationale de innovation 2014";
$thisContent="
<p>
D�couvrez les 30 projets s�lectionn�s pour la journ�e nationale de l'innovation et votez pour celui qui retient votre attention. L'acad�mie de la Guadeloupe est dignement repr�sent�e par le lyc�e Raoul Georges Nicolo qui fait partie du � top 30 � avec le projet ''design culinaire'' ! Les votes sont ouverts jusqu'au jeudi 27 mars � 11h. Les r�sultats seront proclam�s le jour de l'�v�nement et sur le site ''Respire''. La journ�e nationale de l'innovation 2014 se tiendra le jeudi 27 mars prochain � la Biblioth�que nationale de France (Bnf), � Paris.
</p>
<p>
30 projets parmi 530 candidatures ont �t� s�lectionn�s par un grand jury. Cette s�lection comporte des actions port�es par des enseignants du premier ou du second degr�, des chefs d'�tablissement, des directeurs d'�cole ou encore par des formateurs.
</p>
<p>
La journ�e de l'innovation est �galement l'occasion pour des professionnels exp�riment�s et des chercheurs de haut niveau d'�changer et de mettre leur exp�rience au service du plus grand nombre. L'�v�nement national s'articule avec les ''semaines acad�miques de l'innovation''.
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
Le Service Civique permet � tous les jeunes de 16 � 25 ans qui le souhaitent de s�engager sur une p�riode de 6 � 12 mois, pour une mission au service de la collectivit� et de l�int�r�t g�n�ral. Il peut �tre effectu� aupr�s d�organismes � but non lucratif ou de personnes morales de droit public en France ou � l�international.
</p>
<p>
Les missions de Service Civique couvrent des domaines prioritaires pour la Nation et l�ensemble de la soci�t� tels que la solidarit� et la lutte contre l�exclusion, l��ducation, l�environnement, le sport et la culture, etc.
</p>
<p>
Le Service Civique propose d�unifier sous un statut homog�ne, lisible et simple, quelques uns des principaux dispositifs de volontariats. Il simplifie �galement la proc�dure d�agr�ment pour les organismes d�accueil pour permettre aux structures d�accueillir plus facilement des volontaires.
</p>
<p>
Il donne lieu � une indemnit� et � une couverture sociale adapt�e prises en charge int�gralement par l��tat. Le Service Civique est �galement valoris� dans le parcours de formation au travers du livret de comp�tence, des cursus universitaires ou de la validation des acquis de l�exp�rience.
</p>
<p>
En 2010, 10 000 jeunes seront concern�s par le Service Civique. D'ici � 5 ans, il a vocation � mobiliser 75 000 jeunes.
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
$thisTitle="Eduquer en pays domin�... Ecrire en pays domin�";
$thisContent="
<p>
Les 20 et 21 f�vrier 2014 se sont d�roul�es les premi�res journ�es des Lettres et de l'histoire sur le th�me : Eduquer en pays domin� (Afrique, Am�rique, Cara�bes, Europe). A partir d'une pr�conisation de la ministre de l'enseignement sup�rieur Genevi�ve Fioraso, qui pr�conisait le rapprochement des universit�s et des classes pr�paratoires, ces journ�es ont concr�tis� le partenariat entre les classes pr�paratoires litt�raires du lyc�e.
</p>
<p>
Gerville-R�ache de Basse-Terre et le d�partement pluri-disciplinaire de Sciences Humaines de l'UAG. Des chercheurs de l'Universit� des Antilles-Guyane, mais aussi de l'hexagone, avec comme invit� d'honneur l'�crivain Patrick Chamoiseau y ont anim� des conf�rences et des tables rondes.
</p>
<p>
Le recteur d'acad�mie, Stephan Martens, est intervenu en ouverture de ces rencontres le jeudi 20 f�vrier, sur le campus du camp Jacob � Saint-Claude. Il a ainsi affirm� l'int�r�t de la mise en d�bat d'une telle question dans la formation intellectuelle  des jeunes.
</p>
<p>
Il s'est appuy� sur les �critures diverses en pays domin� pour expliquer que derri�re les barri�res des langues impos�es, il fallait voir dans ces �critures, quelles que soient les �poques et les situations, l'affirmation d'une identit�, la r�sistance en �uvre, et l'imaginaire au travail, la lib�ration d'une litt�rature et l'av�nement d'une litt�rature de lib�ration.
</p>
<p>
Bien s�r, le recteur s'est attach� � mettre cette th�matique en lien avec les priorit�s du nouveau projet d'acad�mie 2014-2017, pour ce qui concerne notamment la ma�trise de la langue �crite et parl�e, n�cessaire pour que nos �l�ves ne deviennent pas des ''sauvageons'', mais aussi la prise en compte de la langue cr�ole maternelle et l'int�gration de ses sp�cificit�s dans l'apprentissage de la langue fran�aise dans toutes les disciplines, pour reconqu�rir une estime de soi parfois bafou�e.
</p>
<p>
Enfin, d�passement ou sublimation, cette analyse de l''�criture en pays domin�, de l'�ducation en pays domin�, doit ouvrir une r�flexion qui permette d'�viter les visions r�ductrices et d�mobilisatrices...
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
$thisTitle="Visite au coll�ge Maryse Cond�";
$thisContent="
<p>
Le vendredi 21 f�vrier 2014, le recteur d'acad�mie, Stephan Martens, s'est rendu au coll�ge Maryse Cond� � la D�sirade. Petit coll�ge rural souffrant de la double insularit�, le coll�ge qui accueille 84 �l�ves, encadr�s par 10 enseignants, est un �tablissement de proximit� pilot� par une �quipe dynamique et impliqu�e, qui s�est fix�e comme objectifs la r�ussite scolaire des �l�ves et leur ouverture au monde.
</p>
<p>
L�environnement rend les conditions d�accueil et d�apprentissage exceptionnelles, qui malheureusement ne stabilisent pas les personnels dont le ''turn over'' important fragilise toute prise en charge p�dagogique malgr� les efforts de l��quipe de direction. Pour les m�mes raisons d�isolement, le remplacement des personnels absents est une vraie difficult�, comme le passage irr�gulier des personnels sociaux et de sant�. Par ailleurs, l�effectif de l��tablissement est tr�s sensible aux variations conjoncturelles, ainsi � la rentr�e 2014 l�effectif en 6�me est de 6 �l�ves, l�apport ext�rieur �tant quasiment nul, l��tablissement devra supporter l�impact de cette cohorte pendant 4 ans.
</p>
<p>
Ce contexte particuli�rement difficile au plan p�dagogique, rend obligatoire l�innovation p�dagogique et la construction d�un mod�le unique inter-degr�s. Des modalit�s administratives et p�dagogiques diff�rentes doivent �tre rapidement explor�es  avec l�aide des corps d�inspection, la mise en place du conseil �cole coll�ge ainsi que le socle commun sont des �l�ments qui doivent permettre la co-animation p�dagogique et une proposition de projet unique �cole-coll�ge.
</p>
<p>
Aussi, un projet est attendu pour la fin du mois de mai 2014. Le mod�le propos� doit s�appuyer sur une articulation r�ussie des potentiels des premier et second degr�s et doit optimiser l�emploi des ressources humaines, tous les d�cloisonnements p�dagogiques seront accueillis favorablement.
</p>
<p>
Le conseil p�dagogique et le conseil d�administration extraordinaire ont permis � chacun de s�exprimer dans une ambiance constructive. La pr�sence du maire a ouvert les d�bats sur plusieurs pistes de progr�s.
</p>
<p>
La mise en place d�un r�seau �cole-coll�ge est imp�rative.
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
$thisTitle="Deux nouvelles formations d�ing�nieur tourn�es vers le d�veloppement durable";
$thisContent="
<p>
La c�r�monie d�ouverture des formations d�ing�nieur tourn�es vers le d�veloppement durable s�est d�roul�e le vendredi 28 F�vrier 2014, en pr�sence du ministre des Outremers, sur le Campus de Fouillole.
</p>
<p>
Ces deux nouveaux dipl�mes, g�nie de l�environnement et g�nie des syst�mes �nerg�tiques, sont le r�sultat de la pers�v�rance du doyen, le professeur Alex M�ril, mais aussi du soutien financier de la r�gion Guadeloupe � hauteur de 10 millions d�euros et du partenariat de qualit� avec EDT Guadeloupe, repr�sent� par son directeur Pascal Mithois, parrain de la promotion et avec l�ENSIACET, �cole prestigieuse d�ing�nieurs de Toulouse, repr�sent� par son directeur Jean Marc Le Lann.
</p>
<p>
Entrecoup�s d�interm�des musicaux, en pr�sence du recteur d�acad�mie, des �lus, des chefs d�entreprise, de la communaut� universitaire et des 16 �tudiants de la promotion � Raoul Nicolo �, la c�r�monie a permis � chaque intervenant d�exprimer son soutien � cette initiative de l�UAG, p�le Guadeloupe.
</p>
<p>
La pr�sidente de l�universit�, Corinne Menc�-Caster, a salu� cette dynamique universitaire, ambitieuse et partag�e, qui prouve la capacit� de l�UAG � proposer une carte des formations attractive et des formations d�excellence, ouvertes sur le monde carib�en et sur l�international.
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
	<h3 class="region_name">Information pr�ventive</h3>
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
Le dispositif relatif � la proc�dure de reconnaissance de l'�tat de catastrophe naturelle pour les communes et � l'indemnisation des victimes s'applique en fonction des lois 82-600 modifi�e et 90-509.
</p>
<p>
Catnat
</p>
<p>
Les conditions cumulatives pour mettre en jeu la garantie � Catastrophe Naturelle � sont :
<ul>
<li>Les biens endommag�s doivent �tre couverts par un contrat d�assurance garantissant les dommages incendie ou tout autre dommage aux biens
<li>Les biens immobiliers construits et les activit�s exerc�es doivent respecter les r�gles administratives en vigueur,
<li>L��tat de catastrophe naturelle doit �tre constat� par un arr�t� interminist�riel apr�s �tude des dossiers par la commission interminist�rielle.
<li>Les r�les de chacun
<li>Les administr�s ayant subi des d�g�ts doivent :
</ul>
Se manifester aupr�s de leur mairie, faire une d�claration de sinistre aupr�s de leur assureur dans les 5 jours francs suivant le ph�nom�ne.
Les maires doivent :
<ul>
<li>Rassembler les demandes des sinistr�s et s�assurer qu�ils remplissent bien les crit�res d��ligibilit�,
<li>D�poser une demande communale de reconnaissance de l��tat de catastrophe naturelle en Pr�fecture Formulaire__CatNat_13669
<li>Joindre un rapport pr�cisant les mesures de pr�vention d�j� mises en �uvre ou envisag�es pour palier les cons�quences de ces �v�nements, 
<li>Joindre une carte g�ographique pr�cise de la zone sinistr�e, 
<li>Joindre des photographies des d�sordres occasionn�s.
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
Le risque majeur est la possibilit� d'un �v�nement d'origine naturelle, dont les effets peuvent mettre en jeu un grand nombre de personnes, occasionner des dommages importants et d�passer les capacit�s de r�action de la soci�t�.
</p>
<p>
L'existence d'un risque majeur est li�e :
<ul>
<li>d'une part � la pr�sence d'un �v�nement, qui est la manifestation d'un ph�nom�ne naturel ou anthropique ;
<li>d'autre part � l'existence d'enjeux, qui repr�sentent l'ensemble des personnes et des biens pouvant �tre affect�s par un ph�nom�ne. Les cons�quences d'un risque majeur sur les enjeux se mesurent en terme de vuln�rabilit�. 
</ul>
</p>
<p>
Un risque majeur est caract�ris� par sa faible fr�quence et par son �norme gravit�.
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
<li>Le risque TMD (Transport Mati�res Dangereuses)
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
$thisTitle="Information pr�ventive";
$thisContent="
<p>
L'information pr�ventive sur les risques majeurs est un droit du citoyen inscrit dans le code de l'environnement. Elle consiste � d�crire les risques, leurs cons�quences pr�visibles pour les personnes, les biens, l'environnement et � faire conna�tre les mesures de pr�vention et de sauvegarde � appliquer pour en limiter les effets.
</p>
<p>
La responsabilit� d'information du citoyen est partag�e entre le pr�fet et le maire.
</p>
<p>
 DDRM_2004
</p>
<p>
Le pr�fet arr�te la liste des communes o� des risques sont identifi�s et �tablit un dossier qui recense et d�crit les ph�nom�nes pr�visibles et les accidents, leurs cons�quences sur les personnes et les biens ainsi que les mesures individuelles et collectives pour en r�duire les dommages. Ce dossier est nomm� Dossier D�partemental sur les Risques Majeurs (DDRM) . 
Le maire, sur la base des informations transmises par le pr�fet, doit �tablir un document qui pr�cise les dispositions particuli�res qu'il a prises au titre de ses pouvoirs de police. Ce document est nomm� Document d'Information Communal sur les Risques Majeurs (DICRIM).
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
L'information pr�ventive sur les risques majeurs est un droit du citoyen inscrit dans le code de l'environnement. Elle consiste � d�crire les risques, leurs cons�quences pr�visibles pour les personnes, les biens, l'environnement et � faire conna�tre les mesures de pr�vention et de sauvegarde � appliquer pour en limiter les effets.
</p>
<img style='height:200px;width:auto;float:left;margin:10px 20px 10px 0' src='http://img.timeinc.net/time/2012/t100poll/t100poll_hollande_francois.jpg'>
<p>
La responsabilit� d'information du citoyen est partag�e entre le pr�fet et le maire.
</p>
<p>
 DDRM_2004
</p>
<p>
Le pr�fet arr�te la liste des communes o� des risques sont identifi�s et �tablit un dossier qui recense et d�crit les ph�nom�nes pr�visibles et les accidents, leurs cons�quences sur les personnes et les biens ainsi que les mesures individuelles et collectives pour en r�duire les dommages. Ce dossier est nomm� Dossier D�partemental sur les Risques Majeurs (DDRM) . 
Le maire, sur la base des informations transmises par le pr�fet, doit �tablir un document qui pr�cise les dispositions particuli�res qu'il a prises au titre de ses pouvoirs de police. Ce document est nomm� Document d'Information Communal sur les Risques Majeurs (DICRIM).
</p>
";
$issueTitle = utf8_encode($thisTitle);
$issueContent = utf8_encode($thisContent);
}

?>

