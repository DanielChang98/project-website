<!-- CPT211 Group 8 index.php (login) -->

<?php
#Start the session
session_start();

#validate whether user has already logged in
if(!isset($_SESSION['user']))
    $_SESSION['user']='';
elseif(isset($_SESSION['user']) && $_SESSION['user'] != '') {
    //session is set
    header('Location: home.php');
}

#declare and initialise variables
$errArray = array();

#function to.........
function check_input($data)
{   $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

#if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #if user chooses to login
    if (isset($_POST['btnLogin'])) {
        #user input validation
        $input = check_input($_POST['input']);
        $pwd = check_input($_POST['pwd']);

        if ($input === 'admin@usm.my'){
            if ($pwd=== 'Admin111') {
                $_SESSION['user'] = 'admin';
                //redirect to webpage home
                header('location: home.php');
            } else
                array_push($errArray, "Incorrect password.");
        } elseif ($input === 'student@usm.my') {
            if($pwd=== 'Student1')  {
                $_SESSION['user'] = 'student';
                //redirect to webpage home
                header('location: home.php');
            } else
                array_push($errArray, "Incorrect password.");
        } else
            array_push($errArray, "Invalid email address or password.");
    }
}
?>

<!DOCTYPE html>
<html lang = "ENG">
<head>
    <title>Login</title>
    <style>
        body,html{
            height: 100%;
            margin: 0;
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #1B365E;
            color: white;
        }
        /* Organise layout into grid */
        .container{
            height: 100%;
            display: grid;
            grid-template-rows: 95% 5%;
            grid-template-columns: 100%;
            grid-template-areas:
                    "main"
                    "footer";
        }
        .grid{ z-index: 1; text-align: center;}
        .main { grid-area: main; }
        .footer { grid-area: footer; background: black; padding: 10px; font-size: 12px; color: white;}
        /* centering all contents */
        #content, #login {place-self: center;}
        /* styling log in window */
        #login{ display: none; z-index: 2; width: 350px; background-color: #f0f9ff; border-radius: 5px; font-size: 15px; color:#1B365E; text-align: left; padding: 10px 60px 30px 40px;}
        form{   line-height: 0.5;}
        input[type=text], input[type=password] {
            width: 100%;
            display: inline;
            font-size: 14px;
            border: 1px solid #ccc;
            box-sizing: content-box;
            line-height: 2px;
            padding: 6px;
        }
        /* main button on login page */
        .btnMain {
            width: 200px;
            height: 60px;
            background: none;
            border: 2px solid white;
            font-size: 20px;
            color: white;
            cursor: pointer;
            -webkit-transition: .5s;
            transition: .5s;
        }
        /* main button on login page (hovering effect) */
        .btnMain:hover {
            background: linear-gradient(161deg, rgba(194,229,255,1) 0%, rgba(255,236,218,1) 100%);
            border: none;
            border-radius: 50px;
            font-size: 21px;
            color: navy;
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
            /* Safari and Chrome */
            -webkit-transform: scale(1.05);
            -webkit-transition: all 0.3s ease-in-out;
        }
        /* button on login form */
        .btnForm{
            width: 100px;
            height: 30px;
            background: none;
            border: 1px solid #1B365E;
            font-size: 16px;
            color: #1B365E;
            cursor: pointer;
            -webkit-transition: .5s;
            transition: .5s;
        }
        /* button on login form (hovering effect) */
        .btnForm:hover {
            background-color: #1B365E;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            color: white;
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
            /* Safari and Chrome */
            -webkit-transform: scale(1.05);
            -webkit-transition: all 0.3s ease-in-out;
        }
        /* styling hint text (Required and caps lock) */
        .hintForm{ color: red; font-size: 14px;}
        /* hiding caps lock text as initial */
        #caps{ display:none;}
        /* styling error box */
        #error{
            display: none;
            z-index: 3;
            text-align: left;
            width: 35%;
            height: 15%;
            overflow-y: auto;
            padding: 10px 30px;
            margin: 20px auto;
            border: 1px solid rgba(255, 117, 117, 1);
            border-radius: 5px;
            background-color: rgba(255, 204, 204, 0.93);
            font-size: 15px;
            color: rgba(184, 0, 0, 1);
            animation:errorFade 1s 1;
            animation-delay:3s;
            animation-fill-mode: forwards;
            /* Safari and Chrome*/
            -webkit-animation:errorFade 1s 1;
            -webkit-animation-delay:3s;
            -webkit-animation-fill-mode: forwards;
        }
        /* styling opacity of error box */
        @keyframes errorFade { from {opacity :1; display: grid;} to {opacity: 0; display: none;} }
        @-webkit-keyframes errorFade { from {opacity :1; display: grid;} to {opacity: 0; display: none;} }
    </style>
</head>
<body>

<div class="container">
    <div class="grid main" id="content">
        <img src="./res/logintitle.png" height=10% alt="pagetitle" />
        <h2>Sorting algorithms - Binary Trees - Graphs</h2>
        <button class="btnMain" id="btnLogin" type="button" onclick="showLogin()">Login</button>
        <br><img src="./res/bird.png" width=35% alt="bird image" />
    </div>
    <div class="grid main" id="login">
        <h2>Login</h2>
        <form method="post" action="">
            Email address*<br><br>
            <label><input type="text"  name='input' placeholder="Enter your email address / matric number" required></label><br><br><br>
            Password*<br><br>
            <input type="password" id='pwd' placeholder="Enter your password" name='pwd' onCopy="return false" onPaste="return false" required><br><br><br>
            <label><input type="checkbox" onclick="showPwdLogin()">Show Password</label>
            <p class="hintForm">*Required</p>
            <p class="hintForm" id="caps">Note: Caps lock is on.</p>
            <br>
            <button type="submit" class="btnForm" name='btnLogin'>Login</button>
            <button type="reset" class="btnForm" onclick="hideLogin()">Cancel</button>
        </form>
    </div>
    <div class="grid main" id="error">
        <?php if (count($errArray) > 0):
            echo '<script type="text/JavaScript">document.getElementById("error").style.display="grid";
            document.getElementById("login").style.display="block";</script>';?>
            <h>Error(s):</h>
            <?php
            array_push($errArray, "Please try again.");
            while (count($errArray) > 0) {
                echo $errArray[0] . '<br>';
                array_shift($errArray);
            }
            ?>
        <?php endif ?>
    </div>
    <div class="grid footer">
        © CPT211 Assignment 2 Group 8
    </div>
</div>
<script>
    //to display/hide form for login or create account
    function showLogin() { document.getElementById("login").style.display="block";}
    function hideLogin(){ document.getElementById("login").style.display="none";}

    //to show password using checkbox
    function showPwdLogin() {
        const pwd = document.getElementById('pwd');
        if (pwd.type === "password") { pwd.type = "text";} else { pwd.type = "password";}
    }

    //to show caps lock text if caps lock is on for password
    document.getElementById("pwd").addEventListener("keyup", function(event) {
        // If "caps lock" is on, display the warning text
        if (event.getModifierState("CapsLock")) {
            document.getElementById("caps").style.display = "block";
        } else {
            document.getElementById("caps").style.display = "none"
        }
    });

</script>
</body>
</html>