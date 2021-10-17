<?php
    function badPing($ipAddr) {
        $command = "ping -c 4 $ipAddr";
        system($command);
    }

    function goodPing($ipAddr) {
        $temp = explode(".", $ipAddr);
        if (count($temp) == 4 && 
           ((is_numeric($temp[0])) && (is_numeric($temp[1])) && (is_numeric($temp[2])) && (is_numeric($temp[3])))) 
        {
            $command = "ping -c 4 $ipAddr";
            system($command);
        }
        else {
            echo "Invalid IP Address format";
        }
    }

    $ipAddress = $_POST["ipaddr"];
    if ($_POST["mode"] == "false") {
        badPing($ipAddress);
    }
    else {
        goodPing($ipAddress);
    }
?>