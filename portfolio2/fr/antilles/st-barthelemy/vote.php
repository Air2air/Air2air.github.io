<?php 

echo '

<div data-role="footer" data-position="fixed">
	<div class="ui-grid-a" data-inset="true">
		<div class="ui-block-a">
			<a id="btn-vote-support-'.$page.'" href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-heart ui-nodisc-icon ui-btn-icon-left button_green" style="float:right;font-size:1.04em;">Support</a>
		</div>
		<div class="ui-block-b">
			<a id="btn-vote-oppose-'.$page.'" href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-forbidden ui-nodisc-icon ui-btn-icon-right button_red" style="font-size:1.04em;">Oppose</a>
		</div>
	</div>
</div>

<div id="vote-block-'.$page.'" role="main" class="ui-content">
	<!-- ul data-role="listview" data-inset="false" data-theme="a">
		<li>
			<a id="vote-block-li-'.$page.'" class="region_link" href="#">
			<h3 class="region_name">'.$issueTitle.'</h3>
			<p class="region_location">'.$issueDate.'</p></a>
		</li>
	</ul -->
	<p style="text-align:center">
		<div class="chart-vote">
			<div class="chart-vote-info">
				<div class="chart-vote-number">'.date("g:i", time()).' <span style="font-size:.6em">'.date("a", time()).'</span></div>
				<div class="chart-vote-text">'.date("j F Y", time()).'</div>
			</div>
			<div class="chart-vote-chart" style="background: url(assets/images/chart-1.png)">
			</div>
		</div>
	</p>

	<fieldset data-role="controlgroup" data-inset="true">
		<legend>Send to my friends:</legend>
		<input type="checkbox" name="checkbox-1a" id="checkbox-1a">
		<label for="checkbox-1a">Natalie Dormer</label>
		<input type="checkbox" name="checkbox-2a" id="checkbox-2a">
		<label for="checkbox-2a">Matthew McConaughey</label>
		<input type="checkbox" name="checkbox-3a" id="checkbox-3a">
		<label for="checkbox-4a">Kelly Clarkson</label>
		<input type="checkbox" name="checkbox-4a" id="checkbox-4a">
		<label for="checkbox-5a">Laurence Kasdan</label>
	</fieldset>

	<label for="textarea-2">Comment:</label>
<textarea data-theme="a" cols="40" rows="16" name="textarea-2" id="textarea-2" style="height:120px!important">Hi - 
Join me in supporting this issue in St. Bart\'s:
http://www.meocracy.com/fr/guadeloupe/st-barthelemy/page.php?page='.$page.'
	</textarea>

	<div class="ui-grid-a" data-inset="true">
		<div class="ui-block-a">
			<a id="btn-share-skip-'.$page.'" href="page.php?page=home" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" style="float:right;font-size:1.04em;">Skip</a>
		</div>
		<div class="ui-block-b">
			<a id="btn-share-send-'.$page.'" href="page.php?page=home" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" style="font-size:1.04em;">Send</a>
		</div>
	</div>


</div>

<script>
// Hide the vote and share blocks
$(document).ready(function() {
	$("#btn-vote-support-'.$page.', #btn-vote-oppose-'.$page.'").show(0);
	$("#vote-block-'.$page.'").hide(0);
});

// Click footer vote buttons, hide the content and show the vote block
$(document).ready(function() {
	$("#btn-vote-support-'.$page.', #btn-vote-oppose-'.$page.'").click(function() {
		$("#btn-vote-support-'.$page.', #btn-vote-oppose-'.$page.'").fadeOut(200, function() {
			$("#header, #content-block-'.$page.'").slideUp(200, function() {
				$("#vote-block-'.$page.'").fadeIn(200);
			});
		});
	});
});

// If you do not want to vote but want to go back to the article, clicking the content LI takes you back to the content and kills the vote block
$(document).ready(function() {
	$("#vote-block-li-'.$page.'").click(function() {
		$("#vote-block-'.$page.'").hide(0);
		$("#content-block-'.$page.'").slideDown(200);
		$("#btn-vote-support-'.$page.', #btn-vote-oppose-'.$page.'").fadeIn(200);
	});
});

// Make sure the header unhides
$(document).ready(function() {
	$("#btn-share-skip-'.$page.', #btn-share-send-'.$page.'").click(function() {
		$("#header").show(0);
	});
});

</script>

';

?>