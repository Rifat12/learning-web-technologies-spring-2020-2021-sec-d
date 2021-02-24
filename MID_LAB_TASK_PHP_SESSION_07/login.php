<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>XCompany - Login</title>
</head>
<body>

    <table cellspacing="0" border="1" width="820px" align=center>

        <tr>

            <td>

                 <a href="publichome.php"><img src="logo.png" alt="Logo"></a>

            </td>

            <td align="right">

            <pre>    <a href="publichome.php">Home</a>|<a href="login.php">Login</a>|<a href="registration.php">Registration</a>   </pre>

            </td>

        </tr>

        <tr>

            <td colspan="2" height="310px" align="center">

                <form action="login.php" method="post">

                    <fieldset align="left">

                        <legend><b>LOGIN</b></legend>

                        User Name&nbsp;:&nbsp;<input type="text" name="uname"><br><br>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forgotpassword.php">Forgot Password</a>

                    </fieldset>

                </form>

            </td>

        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; Rifat</p>
            </td>

        </tr>

    </table>

</body>
</html>


<?php

if(isset($_REQUEST['submit']))
{

    if($_REQUEST['uname']==$_COOKIE['username'] and $_REQUEST['password']==$_COOKIE['password']){

        if(isset($_REQUEST['remember_me'])){
            setcookie('runame', $_REQUEST['uname'], time()+86400);
            setcookie('rpassword', $_REQUEST['password'], time()+86400);
        }

        session_start();
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['password'] = $_REQUEST['password'];
        header('location: dashboard.php');

    }

    else
    {
        echo "Invalid credentials!";
    }

}

?>
