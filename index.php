<?php

/**
 * Config Directory I/O
 */

$dirInput = 'Icons';
$dirOutput = 'IconsNew';

$fileInput = scandir($dirInput);

/**
 * Main function for
 *   Change file name to ID,
 *   Copy file to new output directory
 */

for($i=2;$i<count($fileInput);$i++){
    $fileOutput = covertNameToID($fileInput[$i]);
    convertCopyFile($fileInput[$i], $fileOutput);
}

/**
 * @param $fileInput -- File name input
 * @return array|mixed -- File name output
 *
 * Change file name to ID
 *   ex : demo_12_153.png => 153.png
 */

function covertNameToID($fileInput){
    $fileOutput = $fileInput;
    $fileOutput = explode('_', $fileOutput);
    $fileOutput = end($fileOutput);
    return $fileOutput;
}

/**
 * @param $fileInput -- File name input
 * @param $fileOutput -- File name output
 * @return int -- only return 0
 *
 * Copy file to new output directory
 */

function convertCopyFile($fileInput, $fileOutput){
    global $dirInput, $dirOutput;
    $dirInputRes = $dirInput.'/'.$fileInput;
    $dirOutputRes = $dirOutput.'/'.$fileOutput;
    copy($dirInputRes, $dirOutputRes);
    echo 'Convert '.$dirInputRes.' to '.$dirOutputRes.'<br />';
    return 0;
}

?>