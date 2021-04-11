

<?php 

echo '

<!DOCTYPE html>
<html> 
<head>
 <!-- base href="/"/ -->
<meta charset="utf-8"/>
<title>'.$regionFull.'</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="apple-touch-icon" ref="/assets/images/app/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/app/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/app/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/app/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/app/apple-touch-icon-144x144.png" />

<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400|Roboto+Condensed:100,300,400" rel="stylesheet" type="text/css">
<link href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/import.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

</head>  
<body>

<div data-role="page" data-title="Meocracy" data-theme="a">

  <div id="header" data-role="header" style="border-bottom:0px!important;">
    <div data-role="navbar">
      <ul>';

		if ( $page == "home" ) { echo '<li class="header_nav header_nav_active">'; } else { echo '<li class="header_nav">'; } 
		echo '
          <a class="nation_link" href="page.php?page=home">
          <img class="nav_home_img" src="assets/images/icon-app.png"/>
          <p class="nav_home">Moi</p>
          </a>
        </li>';
		if ( $page >= 1 && $page <= 50 ) { echo '<li class="header_nav header_nav_active">'; } else { echo '<li class="header_nav">'; } 
		echo '
          <a class="city_link" data-ajax="true" href="page.php?page=1">
          <img class="city_seal" src="assets/images/saint-barthelemy-flag.png"/>
          <p class="city_name">St. Bart\'s</p>
          </a>
        </li>';
		if ( $page == "antilles" ) { echo '<li class="header_nav header_nav_active">'; } else { echo '<li class="header_nav">'; } 
		echo '
          <a class="county_link" data-ajax="true" href="page.php?page=antilles">
          <img class="county_seal" src="assets/images/guadeloupe.png"/>
          <p class="county_name">Antilles</p>
          </a>
        </li>';
		if ( $page == "france" ) { echo '<li class="header_nav header_nav_active">'; } else { echo '<li class="header_nav">'; } 
		echo '
          <a class="state_link" data-ajax="true" href="page.php?page=france">
          <img class="state_seal" src="assets/images/france.png"/>
          <p class="state_name">France</p>
          </a>
        </li>
      </ul>
    </div>
  </div><!-- /header -->

';

?>




