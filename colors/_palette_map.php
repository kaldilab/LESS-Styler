<div class="ls-panel">
	<h2>Color Map <span class="version">ver 1.0</span></h2>
	<?php include_once('_palette_panel.php'); ?>
</div>
<div class="ls-familytree">
	<h3>Color Familytree</h3>
	<div class="chip-group">
		<?php for ($i = 12; $i > 0; $i--) { echo "<div class='chip scheme s-ld", sprintf($i), "'><b>ld", sprintf($i), "</b></div>"; } ?>
		<div class="chip title"><em>명도<br><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> | <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></em></div>
		<?php for ($i = 1; $i <= 12; $i++) { echo "<div class='chip scheme s-lu", sprintf($i), "'><b>lu", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group">
		<?php for ($i = 12; $i > 0; $i--) { echo "<div class='chip scheme s-sd", sprintf($i), "'><b>sd", sprintf($i), "</b></div>"; } ?>
		<div class="chip title"><em>채도<br><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> | <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></em></div>
		<?php for ($i = 1; $i <= 12; $i++) { echo "<div class='chip scheme s-su", sprintf($i), "'><b>su", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group">
		<?php for ($i = 12; $i > 0; $i--) { echo "<div class='chip scheme s-gd", sprintf($i), "'><b>gd", sprintf($i), "</b></div>"; } ?>
		<div class="chip title"><em>흑백<br><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> | <i class="fa fa-arrow-circle-up" aria-hidden="true"></i></em></div>
		<?php for ($i = 1; $i <= 12; $i++) { echo "<div class='chip scheme s-gu", sprintf($i), "'><b>gu", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group last">
		<?php for ($i = 88; $i <= 99; $i++) { echo "<div class='chip scheme s-h", sprintf($i), "'><b>h", sprintf($i), "</b></div>"; } ?>
		<div class="chip title"><em>색상<br><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></em></div>
		<?php for ($i = 1; $i <= 87; $i++) { echo "<div class='chip scheme s-h", sprintf($i), "'><b>h", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group">
		<div class="chip title"><em>반전<br>명도</em></div>
		<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='chip scheme s-il", sprintf($i), "'><b>il", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group">
		<div class="chip title"><em>반전<br>채도</em></div>
		<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='chip scheme s-is", sprintf($i), "'><b>is", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group">
		<div class="chip title"><em>반전<br>흑백</em></div>
		<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='chip scheme s-ig", sprintf($i), "'><b>ig", sprintf($i), "</b></div>"; } ?>
	</div>
	<div class="chip-group last">
		<?php for ($i = 88; $i <= 99; $i++) { echo "<div class='chip scheme s-ih", sprintf($i), "'><b>ih", sprintf($i), "</b></div>"; } ?>
		<div class="chip title"><em>반전 색상<br><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></em></div>
		<?php for ($i = 1; $i <= 87; $i++) { echo "<div class='chip scheme s-ih", sprintf($i), "'><b>ih", sprintf($i), "</b></div>"; } ?>
	</div>
</div>
<div class="ls-wheel">
	<h3>Color Wheel [Invert]</h3>
	<ul class="wheel-group">
		<li>
			<button type="button">반전<br>명도</button>
			<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='wheel w-il", sprintf($i), "'><b>il", sprintf($i), "</b></div>"; } ?>
			<div class="wheel title"><b>s-</b></div>
		</li>
		<li>
			<button type="button">반전<br>채도</button>
			<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='wheel w-is", sprintf($i), "'><b>is", sprintf($i), "</b></div>"; } ?>
			<div class="wheel title"><b>s-</b></div>
		</li>
		<li>
			<button type="button">반전<br>흑백</button>
			<?php for ($i = 1; $i <= 24; $i++) { echo "<div class='wheel w-ig", sprintf($i), "'><b>ig", sprintf($i), "</b></div>"; } ?>
			<div class="wheel title"><b>s-</b></div>
		</li>
		<li class="hue">
			<button type="button">반전<br>색상</button>
			<?php for ($i = 1; $i <= 99; $i++) { echo "<div class='wheel w-ih", sprintf($i), "'><b>ih", sprintf($i), "</b></div>"; } ?>
			<div class="wheel title"><b>s-</b></div>
		</li>
	</ul>
</div>
<div class="ls-scheme">
	<h3>Color Scheme</h3>
	<div class="composition">
		<h4>Complementary</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h50</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Analogous</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h8</b></div>
			<div class="chip scheme chip-code"><b>h92</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Split-Complementary</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h42</b></div>
			<div class="chip scheme chip-code"><b>h58</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Triadic</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h33</b></div>
			<div class="chip scheme chip-code"><b>h66</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Rectangle</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h16</b></div>
			<div class="chip scheme chip-code"><b>h50</b></div>
			<div class="chip scheme chip-code"><b>h66</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Square</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h25</b></div>
			<div class="chip scheme chip-code"><b>h50</b></div>
			<div class="chip scheme chip-code"><b>h75</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 2</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>il20</b></div>
			<div class="chip scheme chip-code"><b>su12</b></div>
			<div class="chip scheme chip-code"><b>ig2</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 3</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>is20</b></div>
			<div class="chip scheme chip-code"><b>ig18</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 4</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>lu6</b></div>
			<div class="chip scheme chip-code"><b>il20</b></div>
			<div class="chip scheme chip-code"><b>is10</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 5</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>lu8</b></div>
			<div class="chip scheme chip-code"><b>h50</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 6</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>ig22</b></div>
			<div class="chip scheme chip-code"><b>h75</b></div>
			<div class="chip scheme chip-code"><b>ig10</b></div>
			<div class="chip scheme chip-code"><b>gu10</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 7</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h94</b></div>
			<div class="chip scheme chip-code"><b>h6</b></div>
			<div class="chip scheme chip-code"><b>il16</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 8</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>lu3</b></div>
			<div class="chip scheme chip-code"><b>il16</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 9</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>lu2</b></div>
			<div class="chip scheme chip-code"><b>ig22</b></div>
			<div class="chip scheme chip-code"><b>lu1</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 10</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>ih3</b></div>
			<div class="chip scheme chip-code"><b>ih6</b></div>
			<div class="chip scheme chip-code"><b>ih9</b></div>
			<div class="chip scheme chip-code"><b>su12</b></div>
			<div class="chip scheme chip-code"><b>ih20</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 11</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h5</b></div>
			<div class="chip scheme chip-code"><b>sd5</b></div>
			<div class="chip scheme chip-code"><b>su5</b></div>
			<div class="chip scheme chip-code"><b>ih5</b></div>
			<div class="chip scheme chip-code"><b>gu5</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 12</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>h50</b></div>
			<div class="chip scheme chip-code"><b>h60</b></div>
			<div class="chip scheme chip-code"><b>ih50</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 13</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>lu11</b></div>
			<div class="chip scheme chip-code"><b>h33</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 14</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>il15</b></div>
			<div class="chip scheme chip-code"><b>il5</b></div>
			<div class="chip scheme chip-code"><b>il10</b></div>
			<div class="chip scheme chip-code"><b>lu9</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 15</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>ih70</b></div>
			<div class="chip scheme chip-code"><b>ih75</b></div>
			<div class="chip scheme chip-code"><b>is15</b></div>
			<div class="chip scheme chip-code"><b>h70</b></div>
		</div>
	</div>
	<div class="composition">
		<h4>Canvas 16</h4>
		<div class="chip-group">
			<div class="chip title"><em>s-</em></div>
			<div class="chip scheme chip-code"><b>ih25</b></div>
			<div class="chip scheme chip-code"><b>ih30</b></div>
			<div class="chip scheme chip-code"><b>su12</b></div>
			<div class="chip scheme chip-code"><b>gu8</b></div>
		</div>
	</div>
</div>