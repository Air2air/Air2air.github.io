

<div id="container-provider" class="row-left hide container">
	<div id="providerAmazon" class="unit-1x1 active"><div class="icon icon-amazon"></div>Amazon</div>
	<div id="providerRackspace" class="unit-1x1 active"><div class="icon icon-rackspace"></div>Rackspace</div>
</div>

<script>


$('#providerAmazon, #providerRackspace').click(setProvider);



$('#tab-nav-provider').click(function () {

// Tab color: reset this one to active
	$(this).removeClass('good').addClass('active');

// Tab color: reset siblings to empty
	$(this).siblings().removeClass('active').addClass('empty');

// Tab text: reset to defaults
	$('#tab-nav-provider').html('<p>Provider</p>');
	$('#tab-nav-os').html('<p>OS</p>');
	$('#tab-nav-config').html('<p>Config</p>');

// Right side dashboard: reset text to zero and hide
	$('#dashOneLeft,#dashOneRight,#dashTwoLeft,#dashTwoRight,#dashThreeLeft,#dashThreeRight').html(' ');
	$('#dashOne,#dashTwo,#dashThree,#container-os,#container-config,#container-launch,#container-register').hide();

// User account buttons: reset to default
	$('#btn-user-login').removeClass('active').addClass('grayhover');

// Show the active container
	$('#container-provider').fadeIn(400);
	$('.row-provider').fadeIn(400);

});

</script>











