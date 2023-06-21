<?php
namespace Console\App;

class RacerStat {
    public function getStat($file, $racers, $racer) {
        $result = "";
        foreach($racers as $key => $value) {
            $result .= str_contains($value, $racer) ? $value . " " . $file[$key] : ""; 
        }
        return $result;
    }
}