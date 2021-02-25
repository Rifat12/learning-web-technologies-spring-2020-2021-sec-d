<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
            <td>
                    <img src='logo.png' alt="Image unavailable" height='50px'/>
                </td>
                <td align='right'>
                    <nav>
                        <a href='./publichome.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>
            <b>Forgot Password</b>
        </legend>
        <form action='#' method='POST'>
            <table>
                <tr>
                    <td>
                        Enter Email:
                    </td>
                    <td>
                        <input type="text" name='email'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
