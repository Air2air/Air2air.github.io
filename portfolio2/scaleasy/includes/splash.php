
<div class="splash hide">
	<div class="bigbutton">
	</div>
</div>

<script>
//  Load the splash onLoad 
$(document).ready(function() {
	$('.logo').fadeIn(800, function() {
		$('.splash').fadeIn('slow');
	});
});


//Splash and Logo click to reset function

$('.logo, .splash').click(launchProcess);


</script>