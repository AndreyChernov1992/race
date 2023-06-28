<?php
namespace Console\App;

use Console\App\RacersResult;
use Console\App\SortList;

class GetRacersListFacade {

    private $race;
    private $sortList;
    
    public function __construct() {
        $this->race = new RacersResult;
        $this->sortList = new SortList;
    }

    public function getList ($startTime, $endTime, $sort) {
        
        $resultTime = $this->race->resultTime($startTime, $endTime);
        $sortOrder = $sort === "desc" ? "desc" : "asc";
        $result = $this->sortList->sortArray($resultTime, $sortOrder);

        return $result;
    }

}