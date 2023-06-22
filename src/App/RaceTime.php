<?php
namespace Console\App;

class RaceTime {
    public $date;
    public function getTime(array $startList, array $endList) :array {
        foreach ($startList as $index => $value) {
            $dateStart = strtotime($startList[$index]);
            $dateEnd = strtotime($endList[$index]);
            $diff = $dateEnd - $dateStart;
            $result = date("H:i:s.U", $diff);
            $date[$index] = $result;
        }
        return $date;
    }
}