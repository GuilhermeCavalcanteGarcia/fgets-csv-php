<?php

$filename = "users.csv";

if(file_exists($filename)){

    $file = fopen($filename, "r");

    $headers = explode(",",fgets($file));

    $data = array();

    while($row = fgets($file)){
        
        $rowData = (explode(",", $row));

        foreach(){
            
        }
    }
    fclose($file);
}

?>