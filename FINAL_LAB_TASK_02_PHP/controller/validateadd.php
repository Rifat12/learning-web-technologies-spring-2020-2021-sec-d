<?php
    include('../model/data.php');
    if(!empty($_POST['pname']) && !empty($_POST['bprice']) && !empty($_POST['sprice']))
    {
        $pname = $_POST['pname'];
        $bprice = $_POST['bprice'];
        $sprice = $_POST['sprice'];

        if(isset($_POST['display']))
        {
            $result = addData($pname, $bprice, $sprice, 'y');
        }
        else
        {
            $result = addData($pname, $bprice, $sprice, 'n');
        }
        if($result == 1)
        {
            echo "<h3>Added successfully!</h3>";
        }
        else
        {
            echo "<h3>Addition failed!</h3>";
        }
    }
    
    else
    {
        echo "Insertion failed";
    }
?>