<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
<body>
    <div class="hal-login">
    <div class="container">
        <img class="img" src="./assets/image-removebg-preview.png" alt="login image">
    <form class="form-login" method="post" action="index.php">
        <div class="judul">
            <h2>Welcome Back!!</h2>
        </div>
        
        <div class="input">
            <div class="username">
                <label for="username">Username</label>
                <i class="fa-regular fa-user" style="position: absolute; left: 495px; top: 152px;"></i>
                <input name="username" id="username" placeholder="Enter username" type="text" style="border-sizing : border-box"/>
            </div>
            
            <div class="password">
                <label for="password">Password</label>
                <input name="password" id="password" placeholder="Enter password" type="password"/>
                <a class="forgot" href="#">Forgot Password?</a>
            </div>
        </div>
        
        <input class="btn-login" name="btn-login" type="submit" value="Login"/>
        <p class="signup">Don't have an account? <a class="link" href="signup.php">Sign Up</a></p>
    </form>
    </div>
    </div>
<?php
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'admin' && $password === '12345678'){
            echo "<script>
            window.location.href = 'dashboard.php';
            </script>";
        } else if($username === '' && $password === ''){
            echo "<script>alert('Username dan Password tidak boleh kosong!');
            </script>";
        }else {
            echo "<script>alert('Password atau Username salah!');
            </script>";
        } 
    }
?>
</body>
</html>