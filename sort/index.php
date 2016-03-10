<?php
/**
 * Created by Caleb Milligan on 3/9/2016.
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Scouter Data Viewer</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/scouting.css">
		<script src="../js/jquery-1.11.3.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/sort.js"></script>
	</head>
	<body>
		<header>
			<h1>Olympia Robotics Federation</h1>
			<h2>2016 FIRST Stronghold Scouter</h2>
		</header>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table id="data_table" class="table">
							<thead>
								<tr>
									<td>Team #</td>
									<td>Match #</td>
									<td>Scouter Name<br/><input type="checkbox" name="sort" title="Scouter Name" onchange="toggleSort('scouter_name')"></td>
									<td>No-Show<br/><input type="checkbox" name="sort" title="No-Show" onchange="toggleSort('no_show')"></td>
									<td>D.O.F<br/><input type="checkbox" name="sort" title="Died on Field" onchange="toggleSort('died_on_field')"></td>
									<td>Defended<br/><input type="checkbox" name="sort" title="Pickup Speed" onchange="toggleSort('defended')"></td>
									<td>Pickup Speed<br/><input type="checkbox" name="sort" title="Pickup Speed" onchange="toggleSort('pickup_speed')"></td>
									<td>Portcullis Crosses<br/><input type="checkbox" name="sort" title="Portcullis Crosses" onchange="toggleSort('portcullis_crosses')"></td>
									<td>Portcullis Speed<br/><input type="checkbox" name="sort" title="Portcullis Speed" onchange="toggleSort('portcullis_speed')"></td>
									<td>Chival de Frise Crosses<br/><input type="checkbox" name="sort" title="Chival de Frise Crosses" onchange="toggleSort('chival_crosses')"></td>
									<td>Chival de Frise Speed<br/><input type="checkbox" name="sort" title="Chival de Frise Speed" onchange="toggleSort('chival_speed')"></td>
									<td>Moat Crosses<br/><input type="checkbox" name="sort" title="Moat Crosses" onchange="toggleSort('moat_crosses')"></td>
									<td>Moat Speed<br/><input type="checkbox" name="sort" title="Moat Speed" onchange="toggleSort('moat_speed')"></td>
									<td>Ramparts Crosses<br/><input type="checkbox" name="sort" title="Ramparts Crosses" onchange="toggleSort('ramparts_crosses')"></td>
									<td>Ramparts Speed<br/><input type="checkbox" name="sort" title="Ramparts Speed" onchange="toggleSort('ramparts_speed')"></td>
									<td>Drawbridge Crosses<br/><input type="checkbox" name="sort" title="Drawbridge Crosses" onchange="toggleSort('drawbridge_crosses')"></td>
									<td>Drawbridge Speed<br/><input type="checkbox" name="sort" title="Drawbridge Speed" onchange="toggleSort('drawbridge_speed')"></td>
									<td>Sally Port Crosses<br/><input type="checkbox" name="sort" title="Sally Port Crosses" onchange="toggleSort('sally_crosses')"></td>
									<td>Sally Port Speed<br/><input type="checkbox" name="sort" title="Sally Port Speed" onchange="toggleSort('sally_speed')"></td>
									<td>Rock Wall Crosses<br/><input type="checkbox" name="sort" title="Rock Wall Crosses" onchange="toggleSort('rock_crosses')"></td>
									<td>Rock Wall Speed<br/><input type="checkbox" name="sort" title="Rock Wall Speed" onchange="toggleSort('rock_speed')"></td>
									<td>Rough Terrain Crosses<br/><input type="checkbox" name="sort" title="Rough Terrain Crosses" onchange="toggleSort('rough_crosses')"></td>
									<td>Rough Terrain Speed<br/><input type="checkbox" name="sort" title="Rough Terrain Speed" onchange="toggleSort('rough_speed')"></td>
									<td>Low Bar Crosses<br/><input type="checkbox" name="sort" title="Low Bar Crosses" onchange="toggleSort('low_crosses')"></td>
									<td>Low Bar Speed<br/><input type="checkbox" name="sort" title="Low Bar Speed" onchange="toggleSort('low_speed')"></td>
									<td>Low Goals<br/><input type="checkbox" name="sort" title="Low Goals" onchange="toggleSort('low_goals')"></td>
									<td>High Goals<br/><input type="checkbox" name="sort" title="High Goals" onchange="toggleSort('high_goals')"></td>
									<td>Endgame<br/><input type="checkbox" name="sort" title="Endgame" onchange="toggleSort('endgame')"></td>
									<td>Notes</td>
								</tr>
							</thead>
							<tbody id="match_data">

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<footer class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p>Copyright © Olympia Robotics Federation. All rights reserved.</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>