<?php
namespace Console\App;

class SortList {

    public function sortArray(array $time, array $racers, string $sort) :string {

        $str = "<ul style = 'list-style-type: decimal;'>";
        $i = 1;
        $sort == "desc" ? arsort($time) : asort($time);

        foreach($time as $key => $value) {
            $str .="<li><span>" . $racers[$key] . " " . $value . "</span></li>";
            $i == 15 ? $str .= "<hr></hr>" : $str .= "<pre></pre>";
            $i++;
        }

        $str .= "</ul>";

        return $str;
    }
}