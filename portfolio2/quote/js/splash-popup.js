var btnDelay = '3000';

// Open on Slide 0.
$('#btn-help').click(function() {
	$('#splashModal').modal();
	$('#splash-slide-0').siblings().hide(0, function() { 
		$('#splash-slide-0').delay(1000).fadeIn(400,function() { 
			$('#splash-arrow-0-next').delay(btnDelay).css('background-color','#ee4000');
		});
	});
});

// Go to Slide 0
$('#splash-arrow-1-prev,#splash-arrow-3-next').click(function() {
	$('#splash-slide-0').siblings().hide(0, function() { 
		$('#splash-slide-0').fadeIn(400,function() { 
			$('#splash-arrow-0-next').delay(btnDelay).css('background-color','#ee4000');
		});
	});
});

// Go to Slide 1
$('#splash-arrow-2-prev,#splash-arrow-0-1,#splash-arrow-1-1,#splash-arrow-2-1,#splash-arrow-3-1,#splash-arrow-0-next').click(function() {
	$('#splash-slide-1').siblings().hide(0, function() { 
		$('#splash-slide-1').fadeIn(400,function() { 
			$('#splash-arrow-1-next').delay(btnDelay).css('background-color','#ee4000');
		});
	});
});

// Go to Slide 2
$('#splash-arrow-3-prev,#splash-arrow-0-2,#splash-arrow-1-2,#splash-arrow-2-2,#splash-arrow-3-2,#splash-arrow-1-next').click(function() {
	$('#splash-slide-2').siblings().hide(0, function() { 
		$('#splash-slide-2').fadeIn(400,function() { 
			$('#splash-arrow-2-next').delay(btnDelay).css('background-color','#ee4000');
		});
	});
});

// Go to Slide 3
$('#splash-arrow-0-prev,#splash-arrow-0-3,#splash-arrow-1-3,#splash-arrow-2-3,#splash-arrow-3-3,#splash-arrow-2-next').click(function() {
	$('#splash-slide-3').siblings().hide(0, function() { 
		$('#splash-slide-3').fadeIn(400,function() { 
			$('#splash-arrow-3-next').delay(btnDelay).css('background-color','#ee4000');
		});
	});
});

//Clear on close
$('.splash-close').click(function() {
	$('.splash-arrow').css('background-color','#cccccc');
	$('#splash-slide-0,#splash-slide-1,#splash-slide-2,#splash-slide-3').hide();
});

