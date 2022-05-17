<?php
	include("tableSelect.php");
?>
<!Doctype html>
<html>
<h3> Players </h3>
<table class="table table-bordered">
	<thead>
		<th>Player</th>
		<th>Team</th>
		<th>Role</th>	
	</thead>
	<tbody>
		<?php
			if(is_array($fetchData)){
				$sn=1;
				foreach($fetchData as $data){
				?>
				<tr>
					<td><?php echo $sn;?></td>
					<td><?php echo $data['player_name']??'';?> </td>
					<td><?php echo $data['player_team']??'';?> </td>
					<td><?php echo $data['player_position']??'';?> </td>
				</tr>
				<?php 
					$sn++;}}else{ ?>
					<tr>
						<td colspan="4">
					<?php echo $fetchData; ?>
					</td>
				<tr>
					<?php
					}?>
				</tr>
	</tbody>

</html>