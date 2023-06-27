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

use Console\App\GetRacersListFacade;

$startTime = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/start.log";
$endTime = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/end.log";
$racers = $_SERVER["DOCUMENT_ROOT"] . "/bin/data/abbreviations.txt";
$racersList = new GetRacersListFacade;

if(isset($_POST["Asc"])) {
    echo $result = $racersList->getList($startTime, $endTime, $racers, "asc");
}
else if(isset($_POST["Desc"])) {
    echo $result = $racersList->getList($startTime, $endTime, $racers, "desc");
}

?>

</form>
</body>
</html>