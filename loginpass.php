<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <title>Login </title>
</head>
<body class="mr-5 ml-5">
<div class="row pt1 pb-1" style="background:red; color:#fff;font-weight:600"><center>Assignment</center> </div>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4" style="border:3px solid grey">
        <div class="card-body">
            <form action="backlogin-p.php" method="post">
            <h3 class="card-title mb-3 pb-3"><center><b>Welcome back!</b></center></h3>
            <h6 class="card-title mb-3 pb-3"><center>Hi <?php if(isset($_SESSION['lastname'])) echo $_SESSION['lastname']?></center></h6>
            <div class=" d-flex flex-column text-center px-1 mt-3 mb-1"> </div> <a class="btn rounded-pill btn-block" style="border:1px solid"><b><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></b></a>
           <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="password" name="em" required> </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-2 mt-3 mb-1"> </div> <button class="btn btn-primary rounded-pill btn-block confirm-button">Sign In</button>
        <div> <a href="#" class="terms mt-3" style="color:red;"><b>Forgot password?</b></a> </div>
        </form>    
    </div>
    </div>
</div>
<div class="row pt1 pb-1" style="background:skyblue; color:#fff;font-weight:600">
<div class="col-md-1">About us</div>
<div class="col-md-1">Advertisement</div>
<div class="col-md-6"><center>Kigali, Rwanda</center></div>
<div class="col-md-2">How search work</div>
<div class="col-md-1">Privacy</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>