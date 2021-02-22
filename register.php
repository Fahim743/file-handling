<?php
if(isset($_POST['submit'])){
    $FirstName = "First Name: ".$_POST['FirstName']."\n";
    $LastName = "Last Name: ".$_POST['LastName']."\n";
    $gender = "Gender: ".$_POST['gender']."\n";
    $email = "Email Address: ".$_POST['email']."\n";


    $username = "Username: ".$_POST['username']."\n";
    $password = "Password: ".$_POST['password']."\n";
    $recovery_email = "Recovery Email Address: ".$_POST['recovery_email']."\n"."\n";

    $file = fopen("saved.txt", "a");

    fwrite($file, '***** New User *****'."\n"."\n");
    fwrite($file, '---- Basic Information ----'."\n");
    fwrite($file, $FirstName);
    fwrite($file, $LastName);
    fwrite($file, $gender);
    fwrite($file, $email);

    fwrite($file, '---- User Account Information ----'."\n");
    fwrite($file, $username);
    fwrite($file, $password);
    fwrite($file, $recovery_email);

    fclose($file);
    echo "Info Saved In saved.text File";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Registration Page</title>
  </head>
  <body>
  		<h2 class="page-name">Registration Page</h2>
    	<div class="container">
    	  <div class="row">
    	  	<div class="col-md-6 offset-md-3">
    	  		<form method="post">
                    <h3>Basic Information</h3>
        	  		<div class="form-group">
        	  		    <label for="FirstName">First Name</label>
        	  		    <input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="e.g. Ahmadul">
        	  		</div>
                    <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="LastName" class="form-control" id="LastName" placeholder="e.g. Haque Fahim">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                          <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                          <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="e.g. 18*****@aiub.edu">
                    </div>
                    <hr>
                    <h3>User Account Information</h3>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="e.g. fahim">
                    </div>
        	  		<div class="form-group">
        	  		    <label for="password">Password</label>
        	  		    <input type="password" name="password" class="form-control" id="password" placeholder="e.g. harDPassw0rd352">
        	  		</div>
                    <div class="form-group">
                        <label for="email">Recovery Email address</label>
                        <input type="email" class="form-control" id="recovery_email" name="recovery_email" placeholder="e.g. fahim@gmail.com">
                    </div>
        	  		<button type="submit" name="submit" value="save" class="button">Submit</button>
    	  		</form>
    	  	</div>
    	  </div>
    	</div>
  </body>
</html>