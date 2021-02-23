<?php
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileEXT = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileEXT));

    $allowed = array('jpeg','jpg','png');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 4096)
            {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/';
                move_uploaded_file($fileDestination, $fileNameNew);
            }
            else
            {
                echo "Files bigger than 4 Megabytes not allowed";
            }
        }
        else
        {
            echo "Unknown Error";
        }
    }
    else
    {
        echo "Only JPEG, JPG and PNG files allowed";
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
    <fieldset>
    <legend style="font-family: calibri;">PROFILE PICTURE</legend>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

    <input type="file" name="file">
    <hr>
    <input type="submit" name="submit" value="Upload">
    </form>

    </fieldset>

  </body>
</html>
