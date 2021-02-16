<?php
    $countries = array('Australia', 'Bangladesh', 'Canada', 'Denmark', 'England');
    $searchItem = 'Denmark';

    foreach($countries as $country)
    {
        if($country === $searchItem)
        {
            echo $country." is valid in the array";break;
        }
    }
?>
