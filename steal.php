<?php

$file = "log.txt";

$value = $_POST["cc"];

$value_to_write = "$value\n";

if ($value) {

if (!file_exists($file)){

    touch($file);
    chmod($file,0666);
}

$connection = fopen($file,"a+");

if (!fwrite($connection,$value_to_write)){
    echo "an error exist while write";
    exit;
}

echo "success log dosyasına kaydedildi>> log.txt";
}else {
    echo "cant found file";
}





?>