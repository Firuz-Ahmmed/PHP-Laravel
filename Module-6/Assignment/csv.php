<!DOCTYPE html>
<html>

<head>
	<title>Users CSV Data</title>
	<style>
		tr:nth-child(even) {
			background-color: #D6EEEE;
		}

		th:nth-child(even),
		td:nth-child(even) {
			background-color: rgba(150, 212, 212, 0.4);
		}
	</style>
</head>

<body>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>File Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$f_pointer = fopen("uploads/users.csv", "r"); // file pointer

			while (!feof($f_pointer)) {
				$ar = fgetcsv($f_pointer);
				if ($ar) {
					echo "<tr>";
					echo "<td>" . $ar[0] . "</td>";
					echo "<td>" . $ar[1] . "</td>";
					echo "<td>" . $ar[2] . "</td>";
					echo "</tr>";
				}
			}
			fclose($f_pointer);
			?>
		</tbody>
	</table>
</body>

</html>