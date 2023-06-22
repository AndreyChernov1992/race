<?php
namespace Console\App;

class RacerStat {
    public function getStat(array $file, array $racers, string $racer) :string {
        $result = "";
        foreach($racers as $key => $value) {
            $result .= str_contains($value, $racer) ? $value . " " . $file[$key] : ""; 
        }
        return $result;
    }
}