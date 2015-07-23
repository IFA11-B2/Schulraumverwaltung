<?php include 'raumauflistung.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Schulräumeverwaltung</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" /(>
		<link rel="stylesheet" href="style.css" />

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-lg-12">
				<h1>Schulräumeverwaltung</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<table border="2">
					<?php while($room = mysql_fetch_assoc($query)): ?>
					<tr>
						<th>Raumnummer</th>
						<th>Raumtyp</th>
						<th>Inventarliste</th>
					</tr>
					<tr>
						<td><?php echo $room['raumnummer'] ?></td>
						<td><?php echo $room['raumtyp'] ?></td>
						<td>
							<form method="POST" action="zimmerinhalt.php">
								<input type="hidden" name="raumnummer" value="<?php echo $room['raumnummer'] ?>"/>
								<button class="btn btn-default" type="submit">zur Inventarliste</button>
							</form>
						</td>
					</tr>
					<?php endwhile; ?>
				</table>
			</div>
		</div>
	</body>
</html>
