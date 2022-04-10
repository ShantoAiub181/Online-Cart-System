<!DOCTYPE html>
<html>
<head>
    <title> Admin </title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<form method="POST" action="signupCheck.php">

    <div class="login-page">
		<div class="form">

            <form class="register-form">

                <input type="text" name="uname" placeholder="User name"/>

                <?php if(isset($name_error)){?>
                <p><?php echo $name_error ?></p>
                <?php } ?>

                <input type="password" name="password" placeholder="Password"/>

                <?php if(isset($password_error)){?>
                <p><?php echo $password_error ?></p>
                <?php } ?>

                <input type="text" name="email" placeholder="Email"/>
                <?php if(isset($email_error)){?>
                <p><?php echo $email_error ?></p>
                <?php } ?>

                <br><button type="submit" name="submit" value="Submit">Sign Up</button>

                 <p>Already signed up?</p>
                 <a href="login.php">Login</a>

		     </form>
	   </div>
    </div>

</form>

</body>
</html>
