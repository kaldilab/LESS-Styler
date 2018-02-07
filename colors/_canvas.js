$(function() {

	// Random Button

	$('body').append('<form action="#" id="lsColorForm" style="position: fixed; top: 0; right: 0;"><input id="lsColorText" type="text" value="random" style="display: none"><input id="lsColorSubmit" type="submit" value="Random!"></form>');

	$('#lsColorForm').on('submit', function(e) {
		e.preventDefault();
		var random = '#' + Math.floor(Math.random() * 16777215).toString(16);
		if ($('#lsColorText').val() == 'random') {
			less.modifyVars({
				'@scheme': random
			});
		}
	});

});