<?php

include ('data.php');
include ('header.php');

if ( $page >1 ) {
echo '
<ul data-role="listview" data-inset="false" data-theme="a" >
  <li data-icon="false"><a class="region_link" href="page.php?page='.$sponsorPage.'">
	  <div class="region_image" style="background:url(assets/images/'.$sponsorImage.')"/></div> 
	  <h3 class="region_name">'.$sponsorName.'</h3>
	  <p class="region_location">'.$sponsorLocation.'</p>
  </a></li>
';
}

if ( $page <8 &&  $page >1 ) {
echo '
<li style="border-bottom:none">
<form class="ui-filterable">
    <input id="filterBasic-input" data-type="search">
</form></li>
';
}

echo '</ul>';

if ( $page <8 ) {
echo $thisContent;
}

if ( $page == 31 ) {
//echo '</ul>';
echo $thisContent;
}

if ( $page >8 && $page < 31 ) {
	echo '
	<div id="content-block-'.$page.'" role="main" class="ui-content" style="height:auto;border-top:none">
	  <h4 class="issue_date">'.$issueDate.'</h5>
	  <h1 class="legislation_title">'.$issueTitle.'</h1>
		'.$issueContent.'
	</div>';

include ('vote.php');

}

include ('bottom.php');

?>