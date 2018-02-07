$(function() {

	// --------------------------------
	// Scheme
	var $chip = $('.scheme'),
		$lsText = $('#lsColorText');
	// --------------------------------
	$chip.append('<br><span></span>');
	$lsText.attr('pattern', '(^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$|random|lighter|darker|upper|lower|random_r|random_y|random_g|random_c|random_b|random_m|aliceblue|darkolivegreen|indigo|mediumpurple|purple|antiquewhite|darkorange|ivory|mediumseagreen|red|aqua|darkorchid|khaki|mediumslateblue|rosybrown|aquamarine|darkred|lavender|mediumspringgreen|royalblue|azure|darksalmon|lavenderblush|mediumturquoise|saddlebrown|beige|darkseagreen|lawngreen|mediumvioletred|salmon|bisque|darkslateblue|lemonchiffon|midnightblue|sandybrown|black|darkslategray|lightblue|mintcream|seagreen|blanchedalmond|darkturquoise|lightcoral|mistyrose|seashell|blue|darkviolet|lightcyan|moccasin|sienna|blueviolet|deeppink|lightgoldenrodyellow|navajowhite|silver|brown|deepskyblue|lightgray|navy|skyblue|burlywood|dimgray|lightgreen|oldlace|slateblue|cadetblue|dodgerblue|lightpink|olive|slategray|chartreuse|firebrick|lightsalmon|olivedrab|snow|chocolate|floralwhite|lightseagreen|orange|springgreen|coral|forestgreen|lightskyblue|orangered|steelblue|cornflowerblue|fuchsia|lightslategray|orchid|tan|cornsilk|gainsboro|lightsteelblue|palegoldenrod|teal|crimson|ghostwhite|lightyellow|palegreen|thistle|cyan|gold|lime|paleturquoise|tomato|darkblue|goldenrod|limegreen|palevioletred|turquoise|darkcyan|gray|linen|papayawhip|violet|darkgoldenrod|green|magenta|peachpuff|wheat|darkgray|greenyellow|maroon|peru|white|darkgreen|honeydew|mediumaquamarine|pink|whitesmoke|darkkhaki|hotpink|mediumblue|plum|yellow|darkmagenta|indianred|mediumorchid|powderblue|yellowgreen)');
	less.pageLoadFinished.then(function() {
		chipHex();
		chipRgb();
	});
	$('#lsColorForm').on('submit', function(e) {
		e.preventDefault();
		var schemeVal = $lsText.val();
		var random = '#' + Math.floor(Math.random() * 16777215).toString(16);
		var random_r = 'hsl(' + 0 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			random_y = 'hsl(' + 60 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			random_g = 'hsl(' + 120 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			random_c = 'hsl(' + 180 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			random_b = 'hsl(' + 240 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			random_m = 'hsl(' + 300 + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)';
		var random_value = 51,
			lighter = 'hsl(' + (Math.floor(360 * Math.random())) + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor((100 - (random_value - 1)) * Math.random() + random_value)) + '%)',
			darker = 'hsl(' + (Math.floor(360 * Math.random())) + ',' + (Math.floor(100 * Math.random())) + '%,' + (Math.floor((100 - random_value) * Math.random())) + '%)',
			upper = 'hsl(' + (Math.floor(360 * Math.random())) + ',' + (Math.floor((100 - (random_value - 1)) * Math.random() + random_value)) + '%,' + (Math.floor(100 * Math.random())) + '%)',
			lower = 'hsl(' + (Math.floor(360 * Math.random())) + ',' + (Math.floor((100 - random_value) * Math.random())) + '%,' + (Math.floor(100 * Math.random())) + '%)';
		if (schemeVal == 'random') {
			less.modifyVars({
				'@scheme': random
			});
		} else if (schemeVal == 'lighter') {
			less.modifyVars({
				'@scheme': lighter
			});
		} else if (schemeVal == 'darker') {
			less.modifyVars({
				'@scheme': darker
			});
		} else if (schemeVal == 'upper') {
			less.modifyVars({
				'@scheme': upper
			});
		} else if (schemeVal == 'lower') {
			less.modifyVars({
				'@scheme': lower
			});
		} else if (schemeVal == 'random_r') {
			less.modifyVars({
				'@scheme': random_r
			});
		} else if (schemeVal == 'random_y') {
			less.modifyVars({
				'@scheme': random_y
			});
		} else if (schemeVal == 'random_g') {
			less.modifyVars({
				'@scheme': random_g
			});
		} else if (schemeVal == 'random_c') {
			less.modifyVars({
				'@scheme': random_c
			});
		} else if (schemeVal == 'random_b') {
			less.modifyVars({
				'@scheme': random_b
			});
		} else if (schemeVal == 'random_m') {
			less.modifyVars({
				'@scheme': random_m
			});
		} else {
			less.modifyVars({
				'@scheme': schemeVal
			});
		}
		pastColor();
		chipHex();
		chipRgb();
		preview();
	});
	$('#lsChildColor').on('touchend click', function() {
		event.preventDefault();
		$(this).find('i').toggleClass('fa-eye fa-eye-slash');
		$('.chip.scheme').find('span').toggleClass('show');
	});
	$('.chip-code').each(function() {
		$(this).addClass('s-' + $(this).find('b').text());
	});
	$('.wheel-group').find('li').each(function() {
		$(this).find('button').on('touchend click', function() {
			$(this).parent().toggleClass('spin');
		});
	});
	$("#spectrumPicker").spectrum({
		color: '#000000',
		move: function(color) {
			$lsText.val(color.toHexString());
		}
	});

	// --------------------------------
	function pastColor() {
		var $now = $('#hexColor');
		var $nowHex = $now.find('span').text();
		$('#previousColor').html($now.html()).css({
			'display': 'inline-block',
			'border-color': $nowHex,
			'color': $nowHex
		});
	}

	function chipHex() {
		$chip.each(function() {
			var $this = $(this);
			var color = $this.css('background-color');
			$this.find('span').text(rgbToHex(color));
		});
	}

	function chipRgb() {
		var $rgb = $('#rgbColor');
		var color = $rgb.css('background-color');
		$rgb.find('span').text(color);
	}

	function preview() {
		var spColor = $('.sp-replacer').css('border-color');
		$('.sp-preview-inner').css('background-color', spColor);
	}

	function rgbToHex(rgb) {
		var RGB = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
		return (RGB && RGB.length === 4) ? "#" +
			("0" + parseInt(RGB[1], 10).toString(16)).slice(-2) +
			("0" + parseInt(RGB[2], 10).toString(16)).slice(-2) +
			("0" + parseInt(RGB[3], 10).toString(16)).slice(-2) : '';
	}

});