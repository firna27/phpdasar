<?php 
session_start();
require 'function.php';

// cek cookie
 if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username 
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
       
 } 

if( isset($_SESSION["login"]) ) {
    header("Location: latihan11.php");
    exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
             
            //  cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location: latihan11.php");
			exit;
        }
    }
    
    $error = true;
}
?>
<html>
    <head>
        <title>halaman login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button type="submit" class="btn btn-info btn-md" name="login">Login</button>
                                <a class="btn btn-info btn-md" href="registrasi.php">registrasi</a>
                                <?php if( isset($error) ) : ?>
                                <p style="color: red; font-style: italic;">username / password salah</p>
                                <?php endif; ?>
                                <br>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    </body>
</html>