

<div id="container-nav-machines" class="row-left hide container">
	<div id="nav-machines-title" class="unit-4x1 gray"><p class="big-text">My Machines</p></div>
	<div id="nav-account-add" class="unit-15x1 good"><p class="big-text" style="font-size:4em;top:-40px">+</p></div>
	<div id="nav-account-back" class="unit-15x1 good hide"><div class="button-text">My Machines</div></div>
</div>


<div id="container-machines" class="hide container">

	<div id="NandServer" class="unit-6x1 grayhover row-left">
		<div class="unit-status good">
			<div class="status-legend-text">
				Status
			</div>
			<div class="icon-status icon-checkmark">
			</div>
		</div>
		<div class="unit-2x1"style="width:240px">
			<div class="legend-text">
				Name
			</div>
			<div class="value-text">
				Nandserver
			</div>
		</div>
		<div class="unit-1x1left">
			<div class="icon icon-fedora"></div>
			Fedora 12
		</div>
		<div class="unit-15x1">
			<div class="legend-text">
				Cost to Date
			</div>
			<div class="big-text">
				$1.50
			</div>
		</div>
	</div>

	<div id="ToddServer" class="unit-6x1 grayhover row-left">
		<div class="unit-status good">
			<div class="status-legend-text">
				Status
			</div>
			<div class="icon-status icon-checkmark">
			</div>
		</div>
		<div class="unit-2x1"style="width:240px">
			<div class="legend-text">
				Name
			</div>
			<div class="value-text">
				ToddServer
			</div>
		</div>
		<div class="unit-1x1left">
			<div class="icon icon-debian"></div>
			Debian
		</div>
		<div class="unit-15x1">
			<div class="legend-text">
				Cost to Date
			</div>
			<div class="big-text">
				$2.50
			</div>
		</div>
	</div>

<div id="2GBServer" class="unit-6x1 grayhover row-left">
		<div class="unit-status active">
			<div class="status-legend-text">
				Status
			</div>
			<div class="icon-status icon-alert">
			</div>
		</div>
		<div class="unit-2x1"style="width:240px">
			<div class="legend-text">
				Name
			</div>
			<div class="value-text">
				ScaleX Test Server
			</div>
		</div>
		<div class="unit-1x1left">
			<div class="icon icon-centos"></div>
			Centos 6.3
		</div>
		<div class="unit-15x1">
			<div class="legend-text">
				Cost to Date
			</div>
			<div class="big-text">
				$3.50
			</div>
		</div>
	</div>

</div>


<script>


// Add new server button
 $('#nav-account-button').click(launchProcess);

// Click function to show the status of one machine.  This is in machine-detail.php
$('#NandServer, #ToddServer, #2GBServer').click(function() {

// Switch from container-machines to container-status
	$('#container-machines').hide(0);
	$('#container-status').fadeIn();

// Change the title bar to the single machine
	$('#nav-machines-title').html('<p class="big-text">NandServer</p>');

// Hide the Add button and show the Back to My Machines button
	$('#nav-account-add').hide(0);
	$('#nav-account-back').show(0);
});

</script>
