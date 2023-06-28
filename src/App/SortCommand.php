<?php
namespace Console\App;

class SortCommand {
    
    public function sortArray(array $time, string $sort) :array {

        $sort == "desc" ? arsort($time) : asort($time);

        return $time;
    }
}