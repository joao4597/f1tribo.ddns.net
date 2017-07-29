<asside id = driver_standings>
	<div>
		<table class="table table-hover">
			<?php foreach($drivers as $driver) { ?>
			<tr>
				<td><?=$driver['name']?></td><td><?=$driver['points']?></td><td><span class="flag-icon flag-icon-de"></span></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</asside>