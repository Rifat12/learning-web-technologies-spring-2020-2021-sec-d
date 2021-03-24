<?php
    include('../model/data.php');
    if(!empty($_POST['pname']) && !empty($_POST['bprice']) && !empty($_POST['sprice']))
    {
        //echo "Product added";
        $pid = $_GET['pid'];
        $pname = $_POST['pname'];
        $bprice = $_POST['bprice'];
        $sprice = $_POST['sprice'];

        if(isset($_POST['display']))
        {
            $result = updateById($pid, $pname, $bprice, $sprice, 'y');
        }
        else
        {
            $result = updateById($pid, $pname, $bprice, $sprice, 'n');
        }
        if($result == 1)
        {
            echo "<h3>Updated successfully!</h3>";
        }
        else
        {
            echo "<h3>Update failed!</h3>";
        }
    }
    
    else
    {
        echo "Insertion failed";
    }
?>