<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
    href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
            $(function () {

                var login_window = $("#login-dialog").dialog({autoOpen: false,
                    height: 280,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-login").button().on("click", function () {
                    login_window.dialog("open");
                });

                var register_window = $("#register-dialog").dialog({autoOpen: false,
                    height: 530,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-register").button().on("click", function () {
                    register_window.dialog("open");
                });
            });

        </script>
        <script src="login-registration.js"></script>
        
</head>


<body>
    <div class="demo-container">
        <h2>MEDICINET LOGIN/REGISTRATION</h2> <br><br>
        <div class="login-registration-menu">
            <div id="login-div">
                Already a member?<br><br>
                <input type="button" value="Login" id="btn-login"> <br><br>
            </div>
            
            <div id="register-div">
                New here?<br><br>
                <input type="button" value="Register" id="btn-register">
            </div>
            
        </div>
        <div class="thank-you-registration">
        </div>
        <?php 
            require_once "login-form.php";
            require_once "registration-form.php";
        ?>
    </div>
</body>
</html>