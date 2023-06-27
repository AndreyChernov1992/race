<?php
namespace Console\App;

use Console\App\ArrayParse;
use Console\App\RacersResult;
use Console\App\SortList;

class GetRacersListFacade {

    private $arr;
    private $race;
    private $sortList;
    
    public function __construct() {
        $this->arr = new ArrayParse;
        $this->race = new RacersResult;
        $this->sortList = new SortList;
    }

    public function getList ($startTime, $endTime, $racers, $sort) {
        
        $start = $this->arr->getArray($startTime);
        $end = $this->arr->getArray($endTime);
        $racers = $this->arr->getArray($racers);
        $resultTime = $this->race->resultTime($start, $end);
        $sortOrder = $sort === "desc" ? "desc" : "asc";
        $result = $this->sortList->sortArray($resultTime, $racers, $sortOrder);

        return $result;
    }

}