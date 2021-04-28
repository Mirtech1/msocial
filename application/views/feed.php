<?php 
if (isset($this->session->userdata['logged_in'])) {
    $email = ($this->session->userdata['logged_in']['email']);
    $fname = ($this->session->userdata['logged_in']['fname']);
    $lname = ($this->session->userdata['logged_in']['lname']);
    // $uname = ($this->session->userdata['logged_in']['uname']);
    $day = ($this->session->userdata['logged_in']['day']);
	$month = ($this->session->userdata['logged_in']['month']);
    $year = ($this->session->userdata['logged_in']['year']);
    $gender = ($this->session->userdata['logged_in']['gender']);

    } else {
    header("location: login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Msocial- Your feed</title>
    <link rel="stylesheet" href="assets/bootstrap 5/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="">
    <div class="row">
    <div class="col-lg-3 showHide">
        <div>
            <p class="ml-5"><span class="text-warning big2">M</span><span class="lit2">social</span></p>
        </div>
        <div class="pl-4">
            <ul>
                <a href="feed" class="silist"><li class="text-warning"><span class="sicon mr-3"><i class="fas fa-home text-warning"></i></span><span class="stext">Home</span></li></a>
                <a href="meet" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="fas fa-user-friends"></i></span><span class="stext">Meet</span></li></a>
                <a href="messages" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="far fa-envelope"></i></span><span class="stext">Messages</span></li></a>
                <a href="notifications" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="far fa-bell"></i></span><span class="stext">Notifications</span></li></a>
                <a href="videos" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="fas fa-video"></i></span><span class="stext">Videos</span></li></a>
                <a href="groups" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="fas fa-users"></i></span><span class="stext">Groups</span></li></a>
                <a href="discover" class="silist"><li class="mt-3"><span class="sicon mr-3"><i class="fas fa-ellipsis-h"></i></span><span class="stext">Discover</span></li></a>
                <a href="post"><button class="btn btn-warning btn-sm blarge mt-3 ml-4">Create a Post</button></a>
            </ul>
        </div>
    </div>
    <div class="col-lg-5 col-sm-12">
    <div class="bside long">
    <div class="bbot">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
                    <h4>Home</h4>
            <div class="nav-item ml-auto bg-light rad">
                    <a href="#"><i class="fas fa-search ico text-dark"></i></a>
            </div>
            <div class="nav-item ml-2 bg-light rad">
                <a href="#"><i class="fas fa-user ico text-dark ml-3"></i></a>
            </div>
            <div class="nav-item ml-2 bg-light rad">
                <a href="#"><i class="fas fa-bars ico text-dark ml-3"></i></a>
            </div>
    </nav>
    </div>
    <div class="bbotbig p-2">
        <nav class="navbar navbar-expand-lg navbar-light container-fluid">
            <div class="nav-item mt-2">
                <a href="#"><img src="assets/race.jpg" alt="" class="profilePic"></a>
            </div>
            <div class="nav-item ml-1 mr-2 spread">
                <form action="User/getpost" method="post">
               <input name="post" type="text" id='post'  placeholder="What's Happening?" width="100%" ></b>
               
            </div>
            <div class="nav-item ml-auto">
                <input type="submit" class="btn btn-warning" value="post">
            </div>
            </form>
        </nav>
    </div>
        <div class="card-body main-frame">
            <div>
                <h5 class="text-dark text-center">Welcome to Msocial <span><?php echo($fname); ?></span></h5>
                <p class="text-center text-dark">This is the best place to meet people and have fun.<br>Dive in now!!!</p>
                <a href="#"><button class="btn btn-warning ">Let's go</button></a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/bootstrap 5/js/bootstrap.js"></script>
    <script src="assets/fontawesome/js/all.js"></script>
    <script src="assets/acc.js"></script>
</body>
</html>