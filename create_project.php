<!DOCTYPE html>
<html>
<head>
	<title>Create Project</title>
</head>
<body>
	<form method="GET" action="proses_project.php">
		<table>
			<tr>
				<td>Nama Project</td>
				<td> : </td>
				<td><input type="text" name="nama_project" placeholder="Nama Project..."></td>
			</tr>
			<tr>
				<td>Kategori Project</td>
				<td> : </td>
				<td><input type="text" name="kategori" placeholder="Kategori Project..."></td>
			</tr>
			<tr>
				<td>Visibilitas</td>
				<td> <input type="radio" name="visibilitas" value="Private"/>Private</td>
				<td><input type="radio" name="visibilitas" value="Public"
   checked="checked"/>Public</td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>