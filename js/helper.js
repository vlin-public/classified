function focusId(id) {
	document.getElementById(id).focus();
}

document.getElementById('login').focus();


setInterval(function() {
	focus = document.activeElement;
	console.log(focus);
}, 1000);