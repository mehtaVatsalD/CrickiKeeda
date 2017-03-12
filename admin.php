<?php
	if (!isset($_COOKIE['adminbro'])) {
		header('Location:adminl.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<div class="mainBack"></div>
<div class="mainBlack"></div>
<h1 class="title">CrickiKeeda Score Table</h1>
<div id="scoreEdit">
	<div class="myrow">
		<div class="col-5 col-m-12">
			<table id="scoreAdminTable">
				<tr>
					<td><b>Runs&nbsp: </b></td>
					<td><b>0</b></td>
				</tr>
				<tr>
					<td><b>Overs&nbsp: </b></td>
					<td><b>0.0&nbsp/&nbsp12.0</b></td>
				</tr>
				<tr>
					<td><b>Wickets&nbsp: </b></td>
					<td><b>0&nbsp/&nbsp10</b></td>
				</tr>
			</table>
		</div>
		<div class="col-7 col-m-12">
			<form action="admin.php" method="post">
				<table id="scoreEditTable">
					<tr>
						<td><label>Runs&nbsp: </label></td>
						<td>
							<input type="radio" name="runs" value="0">&nbsp+0
							<input type="radio" name="runs" value="1">&nbsp+1
							<input type="radio" name="runs" value="2">&nbsp+2
							<input type="radio" name="runs" value="3">&nbsp+3<br>
							<input type="radio" name="runs" value="4">&nbsp+4
							<input type="radio" name="runs" value="5">&nbsp+5
							<input type="radio" name="runs" value="6">&nbsp+6
							<input type="radio" name="runs" value="7">&nbsp+7
						</td>
					</tr>
					<tr>
						<td><label>Delivery&nbsp: </label></td>
						<td>
							<input type="radio" name="del" value="fair">&nbspFair&nbsp<br>
							<input type="radio" name="del" value="wide">&nbspWide&nbsp
							<input type="radio" name="del" value="noball">&nbspNo&nbspBall&nbsp<br>
							<input type="radio" name="del" value="wicket">&nbspWicket&nbsp
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="update" value="Update" class="submitb"></td>
					</tr>
					<tr>
						<td colspan="2"><div id="correctDiv">Need Correction</div></td>
					</tr>
					<tr>
						<td colspan="2"><div id="correctDiv">New Match</div></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

</body>
</html>