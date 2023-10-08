<?php
namespace Console\App;

class RacersCommandView 
{
    
    public function getList(array $time, array $racers) :string 
    {
        $str = "";
        $i = 1;

        foreach($time as $key => $value) 
        {
            $str .= $i . $racers[$key] . " " . $value . PHP_EOL;
            $i == 15 ? $str .= "---------------------------------" . PHP_EOL : $str .= "";
            $i++;
        }

        return  $str;
    }
}