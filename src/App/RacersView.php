<?php
namespace Console\App;

class RacersView {

    public function showList(array $time, array $racers) :string {

        $str = "<ul style = 'list-style-type: decimal;'>";
        $i = 1;

        foreach($time as $key => $value) {
            $str .="<li><span>" . $racers[$key] . " " . $value . "</span></li>";
            $i == 15 ? $str .= "<hr></hr>" : $str .= "<pre></pre>";
            $i++;
        }

        $str .= "</ul>";

        return $str;
    }
}