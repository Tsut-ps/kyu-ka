<?php
    $day = date("Y/m/d");
    $addr = $_SERVER['REMOTE_ADDR'];
    $fp = fopen(__DIR__ . "/ctr.dat", "r+");
    flock($fp, LOCK_EX);
    $line = fgets($fp);
    list($mem_day, $total, $today, $yesterday, $mem_addr) = explode(",", $line);
    if ($day != $mem_day) {
        $yesterday = $today;
        $today = 0;
        $mem_addr = 0;
    }
    if ($addr != $mem_addr) {
        $total++;
        $today++;
        ftruncate($fp, 0);
        fseek($fp, 0);
        fputs($fp,"$day,$total,$today,$yesterday,$addr");
    }
    fclose($fp);
?>