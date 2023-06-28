<?php
namespace Console\App;

use Console\App\RacersResult;
use Console\App\SortList;
use Console\App\ArrayParse;

class GetRacersListFacade {

    private $race;
    private $sortList;
    public $arr;
    
    public function __construct() {
        $this->race = new RacersResult;
        $this->sortList = new SortList;
        $this->arr = new ArrayParse;
    }

    public function getList ($resoursesPath, $sort) {
        
        $startTime = $this->arr->getArray("$resoursesPath/start.log");
        $endTime = $this->arr->getArray("$resoursesPath/end.log");
        $resultTime = $this->race->resultTime($startTime, $endTime);
        $sortOrder = $sort === "desc" ? "desc" : "asc";
        $result = $this->sortList->sortArray($resultTime, $sortOrder);

        return $result;
    }

}