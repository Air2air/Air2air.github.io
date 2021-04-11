

// launchProcess  resets everything to the 'select a provider' stage.  Clicking a header button or the splash page calls it.

function launchProcess() {
	$('.splash, .container, .dashboard').hide(0, function() {
// 2. Show the nav control row  
		$('#container-nav-launch').css({'display':'block'});
// 3. Reset the tab colors to defaults
			$('#tab-nav-os,#tab-nav-config,#tab-nav-launch').removeClass('good active').addClass('empty');
			$('#tab-nav-provider').removeClass('good').addClass('active');
// Tab text: reset to defaults
			$('#tab-nav-provider').html('<div class="button-text">Provider</div>');
			$('#tab-nav-os').html('<div class="button-text">OS</div>');
			$('#tab-nav-config').html('<div class="button-text">Config</div>');
			$('#tab-nav-launch').html('<div class="button-text">Launch</div>');
// Right side dashboard reset: text to zero
			$('#dashOneLeft,#dashOneMiddle,#dashOneRight,#dashTwoLeft,#dashTwoMiddle,#dashTwoRight').html(' ');
// Right side dashboard reset: user buttons color change
				$('.user').show(0, function() {
					$('#btn-user-login,#btn-user-register').removeClass('active').addClass('grayhover').fadeIn(100, function() {
// 5. Show the nav buttons  
								$('#tab-nav-provider').fadeIn(100, function() {
									$('#tab-nav-os').fadeIn(100, function() {
										$('#tab-nav-config').fadeIn(100, function() {
											$('#tab-nav-launch').fadeIn(100);
// 6. Unbind click events from the tabs
											$('#tab-nav-provider,#tab-nav-os,#tab-nav-config,#tab-nav-launch').off('click');
// 7. Show the providers container
											$('#container-provider').fadeIn(100);
										});
									});
								});	
							});
						});
					});
}




/*---------------------------------------------------------------------------------------------------------------------------------*/

// btnRegistration takes you to the registration page.

function btnRegistration() {

// 1. Hide the Splash page and all sibling containers  
$('#container-register').siblings().hide(0, function() {

// Change the colors for the user tabs
	$('#btn-user-register').removeClass('empty gray grayhover').addClass('active');
	$('#btn-user-login').removeClass('active').addClass('grayhover');

// Show the registration container
	$('#container-register').fadeIn(400);
	});
}



/*---------------------------------------------------------------------------------------------------------------------------------*/

// btnLogin takes you to the login page

function btnLogin() {

// 1. Hide everything but the account nav and container
$('.dashboard').hide(0, function() {
	$('#container-login').siblings().hide(0, function() {

// Change the account tab color to active
		$('#btn-user-login').removeClass('grayhover').addClass('active');
		$('#btn-user-register').removeClass('active').addClass('grayhover');

// Show the registration container
		$('#container-login').fadeIn(400);
		});
	});
}


/*---------------------------------------------------------------------------------------------------------------------------------*/

// listMachines takes you to your listing of machines.  

function listMachines() {

// 1. Hide everything but the account nav and container
$('.dashboard').hide(0, function() {
	$('#container-machines').siblings().hide(0);

// Change the account tab color to defaults
		$('#btn-user-register,#btn-user-login').removeClass('active').addClass('grayhover');

// Show the machines nav and container
		$('#nav-machines-title').html('<p class="big-text">My machines</p>');
		$('#container-nav-machines,#container-machines').fadeIn(400);
		});
}


/*---------------------------------------------------------------------------------------------------------------------------------*/

// setProvider takes you to the OS page.

function setProvider() {

	var nameProvider = 'Rackspace';
	var iconProvider= 'rackspace';
	var nameOS = 'CentOS';
	var iconOS= 'centos';
	var nameConfig = '2GBServer';
	var nameMem = '2GB';
	var nameDisk = '20GB';
	var cost = '1.50';

// Tab color: reset this one from active to good
	$('#tab-nav-provider').removeClass('active').addClass('good');

// Tab contents: Put the checkmark in the tab
	$('#tab-nav-provider').html('<div class="icon icon-checkmark"></div>Provider');

// Next Tab: Change it to active
	$('#tab-nav-os').removeClass('empty').addClass('active');

// Right side dashboard:show the selected provider in the dashboard, and show the div
	$('div#dashOneLeft').html('<div class="icon icon-' + iconProvider + '"></div>' + nameProvider);
//	$('.dashboard').show(0);
	$('#dashOne,#dashOneLeft').fadeIn('slow');

// Hide the active container and show the next one
	$('#container-provider').hide(0);
	$('#container-os').fadeIn('fast');

}


/*---------------------------------------------------------------------------------------------------------------------------------*/

// setOS takes you to the config page.

function setOS() {

	var nameProvider = 'Rackspace';
	var iconProvider= 'rackspace';
	var nameOS = 'CentOS';
	var iconOS= 'centos';
	var nameConfig = '2GBServer';
	var nameMem = '2GB';
	var nameDisk = '20GB';
	var cost = '1.50';

// Tab color: reset this one from active to good
	$('#tab-nav-os').removeClass('active').addClass('good');

// Tab contents: Put the checkmark in the tab
	$('#tab-nav-os').html('<div class="icon icon-checkmark"></div>OS');

// Next Tab: Change it to active
	$('#tab-nav-config').removeClass('empty').addClass('active');

// Tab functions: rebind click events to the next tab and the previous tabs
	$('#tab-nav-provider,#tab-nav-os,#tab-nav-config').on('click');

// Right side dashboard:show the selected provider in the dashboard, and show the div
	$('div#dashOneRight').html('<div class="icon icon-' + iconOS + '"></div>' + nameOS);
	$('#dashOneRight').fadeIn('slow');

// Hide the active container and show the next one
	$('#container-os').hide(0);
	$('#container-config').fadeIn('fast');
}



/*---------------------------------------------------------------------------------------------------------------------------------*/

// setConfig takes you to the launch machine page.

function setConfig() {

	var nameProvider = 'Rackspace';
	var iconProvider= 'rackspace';
	var nameOS = 'CentOS';
	var iconOS= 'centos';
	var nameConfig = '2GBServer';
	var nameMem = '2GB';
	var nameDisk = '20GB';
	var cost = '1.50';

// Tab color: reset this one from active to good
	$('#tab-nav-config').removeClass('active').addClass('good');

// Tab contents: Put the checkmark in the tab
	$('#tab-nav-config').html('<div class="icon icon-checkmark"></div>Config');

// Next Tab: Change it to active
	$('#tab-nav-launch').removeClass('empty').addClass('active');

// Tab functions: rebind click events from this tab and previous tabs
	$('#tab-nav-provider,#tab-nav-os,#tab-nav-config').on('click');

// Right side dashboard:show the selected vars in the dashboard, and show the divs
	$('#dashTwo,#dashTwoLeft,#dashTwoRight').fadeIn();
	$('#dashTwoLeft').html('<div class="legend-text">Package</div><div class="value-text">' + nameConfig + '</div>');
	$('#dashTwoRight').html('<div class="legend-text">Est. cost</div><div class="big-text">$' + cost + '</div>');

	$('#dashThree,#dashThreeLeft,#dashThreeRight').fadeIn();
	$('#dashThreeLeft').html('<div class="legend-text">Memory</div><div class="big-text">' + nameMem + '</div>');
	$('#dashThreeRight').html('<div class="legend-text">Disk</div><div class="big-text">' + nameDisk + '</div>');

// Hide the active container and show the next one
	$('#container-config').hide();
	$('#container-launch').fadeIn();
}




/*---------------------------------------------------------------------------------------------------------------------------------*/

// launchMachine takes you to either the registration or  provisioning page.

function launchMachine() {

	var nameProvider = 'Rackspace';
	var iconProvider= 'rackspace';
	var nameOS = 'CentOS';
	var iconOS= 'centos';
	var nameConfig = '2GBServer';
	var nameMem = '2GB';
	var nameDisk = '20GB';
	var cost = '1.50';

// Tab color: reset this one from active to good
	$('#tab-nav-launch').removeClass('active').addClass('good');

// Tab contents: Put the checkmark in the tab
	$('#tab-nav-launch').html('<div class="icon icon-checkmark"></div>Launch');

// Tab functions: rebind click events from this tab and previous tabs
	$('#tab-nav-provider,#tab-nav-os,#tab-nav-config').on('click');

// Right side dashboard:show the selected vars in the dashboard, and show the divs
	$('#dashTwo,#dashTwoLeft,#dashTwoRight').fadeIn();
	$('#dashTwoLeft').html('<div class="legend-text">Package</div><div class="value-text">' + nameConfig + '</div>');
	$('#dashTwoRight').html('<div class="legend-text">Est. cost</div><div class="big-text">$' + cost + '</div>');

	$('#dashThree,#dashThreeLeft,#dashThreeRight').fadeIn();
	$('#dashThreeLeft').html('<div class="legend-text">Memory</div><div class="big-text">' + nameMem + '</div>');
	$('#dashThreeRight').html('<div class="legend-text">Disk</div><div class="big-text">' + nameDisk + '</div>');

// Account Tab: Change it to active
	$('#btn-user-login').removeClass('grayhover').addClass('active');

// Hide the active container and show the next one
	$('#container-launch').hide();
	$('#container-register').fadeIn();
}




/*---------------------------------------------------------------------------------------------------------------------------------*/

// provisionMachine takes you to the machine provisioning page.

function provisionMachine() {

// 1. Hide the Registration page and all sibling containers  
	$('#container-provision').siblings().hide(0, function() {

// Change the colors for the user tabs
	$('#btn-user-register, #btn-user-login').removeClass('active').addClass('grayhover');

// Show the Provisioning container
		$('#container-provision').fadeIn(400);
	});
}


