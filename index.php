<!DOCTYPE html>
<html>
<head>
<title>Race</title>
<meta charset="utf-8" />
</head>
<body>
<form method="post">
    <input type="submit" name="Asc" value="Asc" />
    <input type="submit" name="Desc" value="Desc" />
</form>

<?php

require_once __DIR__ . "/vendor/autoload.php";

use Console\App\FileToArray;
use Console\App\Ladder;
use Console\App\RaceTime;

$race = new RaceTime;
$arr = new FileToArray;
$ladder = new Ladder;
$file1 = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/start.log";
$file2 = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/end.log";
$file3 = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/abbreviations.txt";
$start = $arr->getArray($file1);
$end = $arr->getArray($file2);
$racers = $arr->getArray($file3);
$result = $race->getTime($start, $end);

if(isset($_POST["Asc"])) {
    echo $ladder->sortList($result, $racers, "asc");
}
else if(isset($_POST["Desc"])) {
    echo $ladder->sortList($result, $racers, "desc");
}

?>

</form>
</body>
</html>