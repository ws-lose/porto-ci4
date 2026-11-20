<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page SignUp</title>
    <link rel="stylesheet" href="style.css">   
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body>
    <div class="hal-signup">
    <div class="container">
        <img class="img-signup" src="./assets/image-signup.png" alt="login image">
    <form class="form-signup" method="post" action="signup.php">
        <div class="judul">
            <h2>Create new account</h2>
        </div>
        
        <div class="input">
            <div class="username">
                <label for="username">Username</label>
                <i class="fa-regular fa-user" style="position: absolute; left: 495px; top: 128px;"></i>
                <input name="username" id="username" placeholder="Enter username" type="text"/>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <i class="fa-solid fa-at" style="position: absolute; left: 495px; top: 215px;"></i>
                <input name="email" id="email" placeholder="Enter email" type="email"/>
            </div>
            
            <div class="password">
                <label for="password">Password</label>
                <i class="fa-solid fa-lock" style="position: absolute; left: 495px; top: 300px;"></i>
                <input name="password" id="password" placeholder="Enter password" type="password"/>
                <a class="forgot" href="#">Forgot Password?</a>
            </div>
        </div>
        
        <input class="btn-signup" name="btn-signup" type="submit" value="Sign Up"/>
        <p class="signup">Already have an account? <a class="link" href="index.php">Login</a></p>
    </form>
    </div>
    </div>
</body>
</html>