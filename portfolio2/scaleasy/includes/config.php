
<div id="container-config" class="hide container">

	<div id="256Server" class="unit-6x1 active row-left">
		<div class="unit-1x1left">
			<div class="icon icon-centos"></div>
			Centos 6.3
		</div>
		<div class="unit-2x1"style="width:178px">
			<div class="legend-text">
				Package
			</div>
			<div class="valuetext">
				256 Server
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Memory
			</div>
			<div class="big-text">
				256
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Disk
			</div>
			<div class="big-text">
				10GB
			</div>
		</div>
		<div class="unit-1x1right">
			<div class="legend-text">
				Est. cost
			</div>
			<div class="big-text">
				$1.50
			</div>
		</div>
	</div>

	<div id="1GBServer" class="unit-6x1 active row-left">
		<div class="unit-1x1left">
			<div class="icon icon-centos"></div>
			Centos 6.3
		</div>
		<div class="unit-2x1"style="width:178px">
			<div class="legend-text">
				Package
			</div>
			<div class="value-text">
				1GB Super Server
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Memory
			</div>
			<div class="big-text">
				1GB
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Disk
			</div>
			<div class="big-text">
				10GB
			</div>
		</div>
		<div class="unit-1x1right">
			<div class="legend-text">
				Est. cost
			</div>
			<div class="big-text">
				$2.50
			</div>
		</div>
	</div>

<div id="2GBServer" class="unit-6x1 active row-left">
		<div class="unit-1x1left">
			<div class="icon icon-centos"></div>
			Centos 6.3
		</div>
		<div class="unit-2x1"style="width:178px">
			<div class="legend-text">
				Package
			</div>
			<div class="value-text">
				2GB Super Server
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Memory
			</div>
			<div class="big-text">
				2GB
			</div>
		</div>
		<div class="unit-1x1">
			<div class="legend-text">
				Disk
			</div>
			<div class="big-text">
				20GB
			</div>
		</div>
		<div class="unit-1x1right">
			<div class="legend-text">
				Est. cost
			</div>
			<div class="big-text">
				$3.50
			</div>
		</div>
	</div>

</div>


<script>

$('#256Server, #1GBServer, #2GBServer').click(setConfig);



$('#tab-nav-config').click(function () {

// Tab color and text: reset it to active
	$(this).removeClass('good').addClass('active').html('<p>Config</p>');

// Hide any other open containers
	$(',#container-provider,#container-launch,#container-register').hide(0);

// User account buttons: reset to default
	$('#btn-user-login').removeClass('active').addClass('grayhover');

// Show the active container
	$('#container-config').fadeIn(400);
	$('.row-config').fadeIn(400);

});


</script>
