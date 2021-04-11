

<div id="container-os" class="row-left hide container">
	<div id="osAmazon" class="unit-1x1 active"><div class="icon icon-amazon"></div>AmazonLinux</div>
	<div id="osCentos" class="unit-1x1 active"><div class="icon icon-centos"></div>Centos</div>
	<div id="osDebian" class="unit-1x1 active"><div class="icon icon-debian"></div>Debian</div>
	<div id="osFedora" class="unit-1x1 active"><div class="icon icon-fedora"></div>Fedora</div>
</div>

<script>

$('#osAmazon,#osCentos,#osDebian,#osFedora').click(setOS);

/*
Tab functions
If we are on a later form and have come back here to start over again.
*/

$('#tab-nav-os').click(function () {

// Tab color and text: reset it to active
	$(this).removeClass('good').addClass('active').html('<p>OS</p>');

// Right side dashboard: reset text to zero and hide
	$('.dashboard').html(' ');
	$('#container-config').siblings().hide(0);

// User account buttons: reset to default
	$('#btn-user-login').removeClass('active').addClass('grayhover');

// Show the active container
	$('#container-os').fadeIn(400);
	$('.row-provider').fadeIn(400);

});


</script>


