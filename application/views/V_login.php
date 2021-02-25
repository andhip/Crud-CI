<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>

<style>
	body{
		background-color: #eaf3ff;
		font-family: "Poppins", sans-serif !important;
		color: #fff;
	}
		
	#hero {
		display: table;
		width: 100%;
		height: 97.5vh;
		background: url("assets/img/bg.png") fixed top center;
		background-size: cover;

	}
	#hero .hero-container {
		background: rgba(16, 202, 146, 0.281);
		display: table-cell;
		margin: 0;
		padding: 0;
		text-align: center;
		vertical-align: middle;
	}
	.container{
		display:inline-block;
        border-radius: 12%; 
        padding: 45px 26px 72px;
        background-color: #081629;
        box-shadow:  3px 50px 60px #30373e96;
		
	}

	
	hr{
		border: 2px solid #eaf3ff;
		width:18%;
		margin-bottom:2.5rem;
	}
	.submit {
        align-items:center !important;
        margin-top: 1.1rem;
        color: black;
        padding: 6px 53px;
        text-align: center;
        text-decoration: none;
        border-radius: 6px;
        border: none !important;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        color:white;
        letter-spacing: 0.5px;
        transition-duration: 0.2s;
        background-color: #2eafec;
        cursor: pointer;

    }
    .submit:hover{
        background-color: #1483dd;

    }

</style>
<body>

<section id="hero">
    <div class="hero-container">
	<div class="container">
		<div  class="bg-l">
			<center><h2>Login Administrator</h2>
			<hr>
			<form action="<?php echo base_url('login/aksi_login'); ?>" method="post" style="margin-top : 20px; margin-right: 50px; margin-left: 40px">		
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
						<td><input type="submit" value="Login" class="submit"></td>
					</tr>
				</table>
			</form>
			</center>
		</div>
	</div>
    </div>
  </section><!-- End Hero -->
  <script>
  console.log("Author : Andhi Puspianto / 1803015240")
  </script>
	
</body>
</html>
