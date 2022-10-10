<?php
$contfile = 0;
$contfolder = 0;
foreach (array_values(array_diff(scandir(__DIR__), array('..', '.', __FILE__))) as $folder) {
    foreach (glob("./{$folder}/*.pdf") as $file) {
        $start_file = $file;
        $file = explode("/", $file);
        $file = end($file);
        $file = explode(" ", $file);
        $file = end($file);
        rename($start_file, "./{$folder}/{$file}");
        $contfile++;
    }
    $contfolder++;
}
echo "\n operação finalizada, em $contfolder pastas e $contfile arquivos renomeados \n";
