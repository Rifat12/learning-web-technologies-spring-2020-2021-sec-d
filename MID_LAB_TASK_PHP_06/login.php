<?php
if(isset($_POST['Submit']))
{
  if(strlen($_POST["name"])<2)
  {
    echo "User Name can not contain at least 2 characters";
  }
  elseif(strlen($_POST['Password'])<8)
  {
    echo "Password can not not be less than 8 characters\n";
  }

  $check = false;
  for ($i=0; $i < strlen($_POST['Password']); $i++) {
    if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '%')
    {
      $check = true;
      break;

    }
  }

  if($check === false)
  {
    echo "Password must contain at least one of these characters => (@, #, $, %) \n";
  }

  else{
    echo "Validation successful";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="">
  		<fieldset>
  			<legend> <b>Login</b></legend>
  				<table>
  				<tr>
  					<td>UserName: </td>
  					<td> <input type="text" name="name"/>
  					<br/> </td>
  				</tr>

  				<tr>
  					<td> Password: </td>
  					<td> <input type="password" name="Password"/> <br/></td>
  				</tr>
  			</table>
  			<hr>
  			<input type="checkbox" name="checkbox"> Remember Me
  			<br> <br>
  			<input type="submit" name="Submit" value="Submit"> <a href=""> Forgot Password? </a>
  		</fieldset>
  	</form>
  </body>
</html>
