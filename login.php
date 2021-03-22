<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>

<body>
  
    <nav style="background-color:#6987e7;position: fixed;">
        <center>
            <div><span style="font-size:20px;">Login Form</span></div>
        </center>
    </nav>
    <br><br><br><br>
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row">
                    <form action="dbr.php" method="post" onsubmit="return registration_validate();" style="width:100%;">


                        <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input type="text" placeholder="Username" id="user_name" name="username" required>
                            <i class="material-icons prefix" style="visibility: hidden;color:green;" id="username_check">check</i>
                            <label id="username_label"><b>Username</b></label>
                        </div>

                       
                        <div class="input-field col s12">
                            <i class="material-icons prefix">password</i>
                            <input type="password" placeholder="create password" id="create_password"
                                name="create_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters"
                                required>
                            <label id="create_password_label"><b>Create Password</b></label>
                        </div>
                        
                        <br>
                        <div>
                            <center>
                                <p>Already a member ? <a href="#">Login</a></p>
                                <button class="waves-effect btn" disabled >Register</button></center>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

</div>
    <script>
        if(screen.width < 768)
        {
           document.getElementById("container").className = "container-fluid" ;
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="user-input.js"></script>
    <script type="text/javascript" src="pincode.js"></script>
    <script type="text/javascript" src="validation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    

</body>

</html>