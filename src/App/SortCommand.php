<?php
namespace Console\App;

class SortCommand {
    
    public function sortArray(array $time, array $racers, string $sort) :string {

        $str = "";
        $i = 0;
        $sort == "desc" ? arsort($time) : asort($time);

        foreach($time as $key => $value) {
            $str .= $racers[$key] . " " . $value . PHP_EOL;
            $i == 15 ? $str .= "---------------------------------" . PHP_EOL : $str .= "";
            $i++;
        }

        return $str;
    }
}