<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index2.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index2.php");
    } else {
        echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="img/G.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<title>Form Login NATAGW</title>
</head>
<body style="background-color:#1e1e1e;">
	<div class="box" style="color:white; padding:50px; height:100%; width:100%;">
        <div class="container" style="background: #262632; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; border-radius:20px; padding: 30px 50px;">
			<form action="" method="POST" class="login-email">
				<p class="text-center" style="font-size: 2rem; font-weight: 800;">Form Login</p>
				<div class="input-group">
					<input type="email" class="form-control mt-3" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" class="form-control mt-3" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<center>
                    <button name="submit" class="btn btn-outline-light mt-3">Login</button>
					<a href="index.php" class="btn btn-outline-light mt-3">Back</a>
                    <p class="mt-2">Don't have an account? <a href="register.php" style="text-decoration: none; color: gray;">Register Here.</a></p>
                </center>
			</form>
        </div>
    </div>

</body>
</html>
