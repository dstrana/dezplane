<!DOCTYPE html>
<html>
<head>
	<title> EDIT </title>
</head>
<body>
	<center>
		<h1>CRUD</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
			</tr>
			<tr>
				<td>fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $u->fullname ?>"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="text" name="level" value="<?php echo $u->level ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>