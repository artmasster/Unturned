<?php

/**
 * @var string $dirInput
 * @var string $dirOutput
 *
 * Config Input and Output image files directory
 */

$dirInput = 'Icons';
$dirOutput = 'IconsNew';

/*
 * Starter Point (function call main)
 */

echo main($dirInput);

/**
 * @param $dirInput
 * @return string -- return result
 *
 * Main function for
 *   Change file name to ID,
 *   Copy file to new output directory
 */

function main($dirInput){
    $fileInput = scandir($dirInput);
    for($i=2;$i<count($fileInput);$i++){
        $fileOutput = covertNameToID($fileInput[$i]);
        convertCopyFile($fileInput[$i], $fileOutput);
    }
    return 'Finished!!';
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
    echo 'Convert '.$dirInputRes.' ==> '.$dirOutputRes.'<br />';
    return 0;
}