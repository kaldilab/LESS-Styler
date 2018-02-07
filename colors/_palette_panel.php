<form action="#" id="lsColorForm">
	<input id="spectrumPicker">
	<label for="lsColorText">Color 입력</label>
	<input id="lsColorText" name="lsColorText" type="text" placeholder="ex) #f00, pink, random" autocomplete="on" value="random" required tabindex="1">
	<label for="lsColorSubmit">Color 전송</label>
	<input id="lsColorSubmit" name="lsColorSubmit" type="submit" value="&#xf1fc;" tabindex="2">
</form>
<div id="lsColorInfo">
	<ul id="lsParentColor">
		<li id="previousColor" title="Previous Color"></li>
		<li id="rgbColor" class="current-color" title="Current Color"><span></span></li>
		<li id="hexColor" class="current-color scheme" title="Current Color"></li>
	</ul>
	<button type="button" id="lsChildColor" title="Child Color HEX 보이기/감추기" tabindex="2"><i class="fa fa-eye"></i> </button>
</div>