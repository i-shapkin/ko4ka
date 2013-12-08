$(function() {
	var viewportWidth = $(window).width(),
		plusVpw = viewportWidth + 'px',
		minusVpw = '-' + viewportWidth + 'px';
		
	$('#registerForm').css('left', plusVpw);
	$('#restoreForm').css('left', minusVpw);

	switch(window.location.hash) {
		case '#register':
		case '#registration':
			moveAction('#loginForm', '#registerForm', minusVpw, 0);
			break;

		case '#restore':
			moveAction('#loginForm', '#restoreForm', plusVpw, 0);
			break;
		
		default:
			$('#loginForm').css('display', 'block');
			break;
	}

	$('#registerButton').click(function() {
		return moveAction('#loginForm', '#registerForm', minusVpw);
	});

	$('#restoreButton').click(function() {
		return moveAction('#loginForm', '#restoreForm', plusVpw);
	});

	$('#loginButton1').click(function() {
		return moveAction('#restoreForm', '#loginForm', minusVpw);
	});

	$('#loginButton2').click(function() {
		return moveAction('#registerForm', '#loginForm', plusVpw);
	});

	function moveAction(objectOldName, objectNewName, leftVal, animateSpeed) {
		var objectOld = $(objectOldName),
			objectNew = $(objectNewName);
			
		if(typeof animateSpeed == 'undefined') {
			animateSpeed = 1;
		}
	
		$('body').css('overflow-x', 'hidden');
		objectOld.animate({
			opacity: 0.5,
			left: leftVal
		}, 250 * animateSpeed, 'easeInCubic', function() {
			objectNew.css('display', 'block');
			objectNew.animate({
				opacity: 1,
				left: '0px'
			}, 400 * animateSpeed, 'easeOutCubic', function() {
				objectOld.css('display', 'none');
				$('body').css('overflow-x', 'auto');
			});
		});

		return false;			
	}
	
	// Antispam methods
	$('#registerFormEntity').submit(function () {
		$(this).attr('action', '/users/registration/');
		return true;
	});
	
	$('#loginFormEntity').submit(function () {
		$(this).attr('action', '/users/login/');
		return true;
	});	
	
	$('#restoreFormEntity').submit(function () {
		$(this).attr('action', '/users/restore/');
		return true;
	});	
});
