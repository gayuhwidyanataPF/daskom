<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
            header("Location: login.php");
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }

    } else {
        echo "<script>alert('Password Not Matched.')</script>";
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

	<title>Form Register NATAGW</title>
</head>
<body  style="background-color:#1e1e1e;">
    <div class="box" style="color:white; padding:50px; height:100%; width:100%;">
        <div class="container" style="background: #262632; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; border-radius:20px; padding: 30px 50px;">
            <form action="" method="POST" class="login-email">
                <p class="login-text text-center" style="font-size: 2rem; font-weight: 800; color: white;">Form Register</p>
                <div class="input-group">
                    <input type="text" class="form-control mt-4" placeholder="Full Name" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="input-group">
                    <input type="email" class="form-control mt-3" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input-group">
                    <input type="password" class="form-control mt-3" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input-group">
                    <input type="password" class="form-control mt-3" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>
                    <center>
                        <button name="submit" class="btn btn-outline-light mt-3">Register</button>
                        <a href="index.php" class="btn btn-outline-light mt-3">Back</a>
                        <p class="login-register-text mt-2">Already have an account? <a href="login.php" style="text-decoration: none; color: gray;">Login Here.</a></p>
                    </center>
            </form>
        </div>
    </div>
</body>
</html>
