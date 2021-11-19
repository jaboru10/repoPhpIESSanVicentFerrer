<?php


function file_extension($cadena)
{
    $extension = explode(".", $cadena);
    return $extMayusculas = strtoupper($extension[1]);
}


function file_type($extension)
{
    $tipo = "";
    $array = [
        "PDF" => "Adobe File",
        "TXT" => "Text File",
        "HTML" => "HTML File",
        "HTM" => "HTML File",
        "PPT" => "Microsoft Powerpoint File",
        "DOC" => "Microsoft Word File",
        "GIF" => "GIF Image",
        "JPG" => "JPG Image",
        "ZIP" => "ZIP File"
    ];

    foreach ($array as $key => $value) {
        if ($key == $extension) {
            $tipo = $value;
            break;
        }
    }
    if ($tipo == "") {
        $tipo = "File";
    }
    return $tipo;
}
