<?php
    function connect()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'product_db');
        return $connect;
    }

    function getData()
    {
        $connect = connect();
        $selectQuery = "SELECT * FROM products;";
        $result = mysqli_query($connect, $selectQuery);
        return $result;
    }

    function getDataById($pid)
    {
        $connect = connect();
        $selectQuery = "SELECT * FROM products WHERE PID = $pid;";
        $result = mysqli_query($connect, $selectQuery);
        return $result;
    }

    function addData($pname, $bprice, $sprice, $display)
    {
        $connect = connect();
        $insertQuery = "INSERT INTO products(pname, bprice, sprice, display) VALUES('".$pname."',".$bprice.",".$sprice.",'".$display."');";
        $result = mysqli_query($connect, $insertQuery);
        return $result;
    }

    function updateById($pid, $pname, $bprice, $sprice, $display)
    {
        $connect = connect();
        $updateQuery = "UPDATE products SET pname = '".$pname."', bprice = ".$bprice.", sprice = ".$sprice.", display = '".$display."' WHERE pid = ".$pid.";";
        $result = mysqli_query($connect, $updateQuery);
        return $result;
    }

    function deleteDataById($pid)
    {
        $connect = connect();
        $selectQuery = "DELETE FROM products WHERE PID = $pid;";
        $result = mysqli_query($connect, $selectQuery);
        //print_r($result);
        return $result;
    }
