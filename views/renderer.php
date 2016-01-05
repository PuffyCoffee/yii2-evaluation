<style>
table, th, td {
	text-align: center;
}
textarea {
	width: 100%;
	height: 100%;
	resize: none;
}
</style>
<div id='<?=$id?>'>
	<input type='hidden' name='radiomatrix' value='RadioButtonMatrix'>
	<table class="table table-bordered table-striped" style="text-align: center;">
		<thead>
			<tr>
				<?php
				echo "<th></th>";
				foreach ($sections as $section) {
					echo "<th colspan='".($scale['max'] - $scale['min'] + 1)."'>".$section."</th>";
				}
				?>
			</tr>
			<tr>
				<?php
				echo "<th></th>";
				foreach ($sections as $section) {
					for ($i = $scale['min']; $i <= $scale['max']; $i++) {
						echo "<th>".$i."</th>";
					}
				}
				if ($enableComment) {
					echo "<th>Comment</th>";
				}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			$scaleLength = $scale['max'] - $scale['min'] + 1;
			foreach ($questions as $key => $value) {
				echo "<tr>";
				echo "<td>".$value."</td>";
				for ($x = $scale['min']; $x < count($sections)*$scaleLength; $x++) {
					if ($x <= $scale['max'])
						echo "<td><input type='radio' name='q".$key."-s0' value='".$x."'></td>";
					else
						echo "<td><input type='radio' name='q".$key."-s1' value='".($x-$scaleLength)."'></td>";
				}
				if ($enableComment) {
					echo "<td><textarea name='q".$key."-comment'></textarea></td>";
				}				
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>