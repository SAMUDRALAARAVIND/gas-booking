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
            <div><span style="font-size:20px;">Registration Form</span></div>
        </center>
    </nav>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="row">
                    <form action="dbr.php" method="post" onsubmit="return registration_validate();">


                        <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input type="text" placeholder="Username" id="user_name" name="username" required>
                            <label><b>Username</b></label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input type="email" placeholder="yourmailid@emailprovider.domain" id="emailid"
                                name="emailid" required>
                            <label><b>Email Id</b></label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <input type="text" placeholder="**********" id="phn_number" name="phn_number" required>
                            <label id="phone_no_label"><b>Phone Number</b></label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">home</i>
                            <textarea type="text" class="materialize-textarea" placeholder="Address"
                                id="address" name="address" required></textarea>
                            <label id="address_label"><b>Address</b></label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">location_on</i>
                            <input type="text" placeholder="Pincode" id="pincode" name="pincode"
                                required>
                            <label id="pincode_label"><b>Pincode</b></label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">password</i>
                            <input type="password" placeholder="create password" id="create_password"
                                name="create_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters"
                                required>
                            <label id="create_password_label"><b>Create Password</b></label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">password</i>
                            <input type="password" placeholder="confirm password" id="confirm_password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters"
                                name="confirm_password" required>
                            <label id="confirm_password_label"><b>Confirm Password</b></label>
                        </div>
                        <br>
                        <div>
                            <center>
                                <p>Already a member ? <a href="#">Login</a></p>
                                <button class="waves-effect btn">Register</button></center>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="validation.js"></script>
    <script type="text/javascript" src="pincode.js"></script>

</body>

</html>