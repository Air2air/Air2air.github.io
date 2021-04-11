

<!-- This shows the status for one machine, selected from the list.  -->

<div  id="container-status" class="hide container">
  <div class="unit-6x2 grayhover row-left">

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
</div>

<script>

// Click function to show the status of one machine.  This is in machine-detail.php
$('#nav-account-back').click(function() {

// Switch from container-status to container-machines
	$('#container-status').hide(0);
	$('#container-machines').fadeIn();

// Change the title bar to the single machine
	$('#nav-machines-title').html('<p class="big-text">My Machines</p>');

// Hide the Back to My Machines button and show the Add button
	$('#nav-account-back').hide(0);
	$('#nav-account-add').show(0);
});

</script>
