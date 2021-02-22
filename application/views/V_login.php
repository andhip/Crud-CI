<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>

<style>
	body{
		background-color: #fff;
		font-family: "Poppins", sans-serif !important;
		display: table;
		width: 100%;
		background: url("./assets/img/illustration-andhi.png") fixed top center;
		background-size: cover;
	}
	.container{
		margin-top:15%;
		background-color: #fff;
		border-radius:20px;
		display: relative;
		width:98%;
		padding-top: 2rem;
		padding-bottom:2rem;
		box-shadow: 1px 9px 21px rgba(0, 0, 0, 0.155);
	}
	hr{
		border: 2px solid #eaf3ff;
		width:9%;
		margin-bottom:1.4rem;
	}

</style>
<body>

	<div class="container">
		<center><h2>Menu Login</h2>
		<hr>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
			<table>
				<tr>
					<td>Username </td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
		</center>
	</div>
</body>
</html>
