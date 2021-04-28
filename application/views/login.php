<?php
 if(isset($this->session->userdata['logged_in'])){
 	header("location: feed");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/jquery-3.6.0.min.js"></script>
    <script src="assets/api.js"></script>
    <title>Login</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
        <a href="index" class="navbar-brand mt-auto"><span class="text-warning big">M</span><span class="lit">social</span></a>
        <div class="container-fluid ">
            <div class="nav-item ml-auto">
            <a href="signup" class="ml-auto nav-item"><button class="btn btn-sm btn-outline-success">Create new account</button></a>
        </div>
    </nav>
        
<center>
    <div class="col-lg-4 card mt-3">
    <div class="card-header">
        <h1 class="text-primary text-left">Login</h1>
    </div>
        <form class="card-body" method="POST" action="User/login" id="loginform">
        <center><input type="text" class="form-control mb-2" placeholder="Username/Email" required name="email" id="email"></center>
        <center><input type="password" class="form-control mb-2" placeholder="Password" required name="password" id="password"></center>
        <div id="error"></div>
        <center><a href="feed"><button class="btn btn-outline-primary btn-lg space" type="submit">Login</button></a></center>
        <center><p class="mt-2"><a href="#">Forgotten Password?</a></p></center>
        </form>
    </div>
</center>
</body>
</html>