<?php
namespace Console\App;

class RacersResult {
    public $date;

    public function resultTime(array $startList, array $endList) :array {

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