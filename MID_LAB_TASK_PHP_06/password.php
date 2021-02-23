<?php
if(isset($_POST['Submit']))
{
  $currentPassword = $_POST['pass'];
  $newPassword = $_POST['newpass'];
  $retypeNewPassword = $_POST['nenewpass'];

  if($currentPassword !== $newPassword && $newPassword == $retypeNewPassword)
  {
    echo "Password Changed!";
  }
      else
      {
          echo "Either New and Old Password were same or a mismatch. Try Again";
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
    <body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>CHANGE PASSWORD</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="pass"/>
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="newpass"/> <br/></td>
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="nenewpass"/> <br/></td>
				</tr>
			</table>
			<hr>

			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
  </body>
</html>
