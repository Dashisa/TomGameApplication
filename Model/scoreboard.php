<!DOCTYPE html>
<html>

<head>
	<title>Scoreboard</title>
	<link rel="stylesheet" href="../View/Styles/scoreboard.css">

	<style>
		body {
			background-image: url("../View/Images/9.jpg");
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 100vh;
			margin: 0;
			/* color: white; */
		}
	</style>
</head>

<body>
	<div class="container" style="background-color: #fac1b287;">
		<h1 align="center" style="color: white;">Scoreboard</h1>

		<table>
			<thead>
				<tr>
					<th>Player</th>
					<th>High Score</th>
				</tr>
			</thead>
			<tbody>

				<?php

				session_start();
				// establish database connection
				$conn = new mysqli("localhost", "root", "", "tomgame");

				// check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}


				// get the score and username from the database by identifying the username
				$sql = "SELECT username, score FROM users ORDER BY score DESC";
				$result = mysqli_query($conn, $sql);

				// Check if any rows were returned
				if (mysqli_num_rows($result) > 0) {
					// Loop through the rows and display them in the table
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["username"] . "</td>";
						echo "<td>" . $row["score"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='2'>No results found.</td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	</br></br>
	<div class="button" onclick="window.location.href='display.php'">
		<a href="#">BACK</a>
	</div>
</body>

</html>