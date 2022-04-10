<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/stylelog.css">

</head>
<body>
    <form method="post" action="loginCheck.php">
    	<div class="login-page">
		<div class="form">
			<form class="register-from">

			<input type="name" name="uname" placeholder="User name"/>

      <?php if(isset($name_error)){?>
      <p><?php echo $name_error ?></p>
      <?php } ?>

			<input type="password" name="password"placeholder="Password"/>

      <?php if(isset($password_error)){?>
      <p><?php echo $password_error ?></p>
      <?php } ?>

			<br><button>Login</button>
			 <p>Not yet registered?</p>
			 <a href="index.php">Signup</a>
		</form>
	</div>
</div>

    </form>
</body>
</html>
