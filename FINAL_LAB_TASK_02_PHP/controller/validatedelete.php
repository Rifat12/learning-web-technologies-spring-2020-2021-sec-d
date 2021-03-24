<?php
    include('../model/data.php');
    if(!empty($_GET['pid']))
    {
        echo "Deleted product!";
        $result = deleteDataById($_GET['pid']);
        if($result == 1)
        {
            echo "<h3>Deleted successfully!</h3>";
        }
        else
        {
            echo "<h3>Delete failed!</h3>";
        }
    }
    else
    {
        echo "<h3>Delete failed!</h3>";
    }
?>