<?php
namespace Console\App;

class FileToArray {
    public function getArray(string $str) :array {
        $arr = [];
        $result = file($str, FILE_IGNORE_NEW_LINES);
        foreach ($result as $place) {
            $string = substr($place, 0, 3);
            $replace = str_replace($string, "", $place);
            $result = str_replace("_", " ", $replace);
            $arr[$string] = $result;
        }
        return $arr;
    }
}