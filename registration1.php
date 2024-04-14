<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registeration</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css" />
</head>

    <body class="h-100">
        <div class="container-fluid full-bg h-100">
           <div class="container h-100">
               <div class="row no-margin h-100">
                   <div class="bg-layer d-flex col-md-4">
                        <div class="login-box row">
                            <h3>User Registeration</h3>
							<form method="post" action="registration.php">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" name="full-name" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
							<div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="tel" class="form-control" name="phone-number" placeholder="Contact Number" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                              </div>
                              <input type="email" class="form-control" name="user" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                             <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                              </div>
                              <input type="text" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-success">	
							</form>

                            
                            <p class="no-c">Already have Account? <a href="login1.php">Sign In</a></p>
                        </div>
                    </div>    
               </div>
           </div>
            
        </div>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>


</html>