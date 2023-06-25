<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>E-mail</label>
     	<input type="email" name="email" placeholder="E-mail"><br>

     	<label>Password</label>
     	<input type="password" id="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
 </form>
 </br>
		 <h3>New User</h3>

<button type="button" onclick="window.location.href='sign-up.php'">sign up</button>
		</br>
		<button type="button" onclick="window.location.href='admin/admin.php'">admin dashboard</button>
    
</body>
</html>