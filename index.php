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

use Console\App\ArrayParse;
use Console\App\GetRacersListFacade;
use Console\App\RacersView;

$finalTime = new GetRacersListFacade;
$racersList = new RacersView;
$arr = new ArrayParse;
$resourcesPath = $_SERVER["DOCUMENT_ROOT"] . "/bin/data";
$racers = $arr->getArray($_SERVER["DOCUMENT_ROOT"] . "/bin/data/abbreviations.txt");


if(isset($_POST["Asc"])) 
{
    $result = $finalTime->getList($resourcesPath, "asc");
    
    echo $racersList->showList($result, $racers);
}
else if(isset($_POST["Desc"])) 
{
    $result = $finalTime->getList($resourcesPath, "desc");

    echo $racersList->showList($result, $racers);
}

?>

</form>
</body>
</html>