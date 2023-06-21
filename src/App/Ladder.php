<?php
namespace Console\App;

class Ladder {
    public function sortList($time, $racers, $sort) {
        $str = "<ul style = 'list-style-type: decimal;'>";
        $i = 0;
        $sort == "desc" ? arsort($time) : asort($time);
        foreach($time as $key => $value) {
            $str .="<li><span>" . $racers[$key] . " " . $value . "</span></li>";
            $i == 15 ? $str .= "<hr></hr>" : $str .= "<pre></pre>";
            $i++;
        }
        $str .= "</ul>";
        return $str;
    }
    public function sortCommand($time, $racers, $sort) {
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