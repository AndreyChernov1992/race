<?php
namespace Console\App;

class RacerStat {

    public function getStat(array $arr, array $racers, string $racer) :string {
        
        $result = "";

        foreach($racers as $key => $value) {
            $result .= str_contains($value, $racer) ? $value . " " . $arr[$key] : ""; 
        }

        return $result;
    }
}