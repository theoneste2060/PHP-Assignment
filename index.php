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
    <title>Home | create account page</title>
</head>

<body class="mr-5 ml-5">
    <div class="row pt1 pb-1" style="background:red; color:#fff;font-weight:600"><center>Assignment</center> </div>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4" style="border:1px solid grey">
        <div class="card-body">
            
            <form action="insert.php" method="post">
                <div style="color:green; "><center><b> <?php if(isset($_SESSION['success'])) echo $_SESSION['success']; ?></b></center></div>
            <h6 class="card-title mb-3"><center><b>I can't wait to create an account</b></center></h6>
            <div class="d-flex flex-row"> 
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="First name" name="fn" required> </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Last name" name="ln" required> </div>
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail" name="em" required> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Choose password" name="pw" required> </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1"> </div> <button class="btn rounded-pill btn-primary btn-block confirm-button">Next</button><hr>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1"></div> <button class="btn rounded-pill btn-danger btn-block confirm-button">Continue with google</button>
        <div> <a href="login.php" class="terms mt-3" style="color:red;"><center><b>Already have an account? SIGN IN</b></center></a> </div>
        </form>  
        <?php
        session_destroy();
        ?> 
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