<?php

namespace Console\App\Commands;

use Console\App\ArrayParse;
use Console\App\GetRacersListFacade;
use Console\App\RacersCommandView;
use Console\App\RacerStat;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RaceCommand extends Command {

    protected function configure() {
        $this->setName("race")
            ->setDescription("Race!")
            ->setHelp("Custom command test")
            ->addArgument("driver", InputArgument::OPTIONAL)
            ->addOption("file", null, InputOption::VALUE_REQUIRED)
            ->addOption("desc", null, InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface  $input, OutputInterface $output) {
        $finalTime = new GetRacersListFacade;
        $racersList = new RacersCommandView;
        $arr = new ArrayParse;
        $stat = new RacerStat;
        $sort = $input->getOption("desc");
        $sortOption = $sort === "desc" ? "desc" : "asc";
        $inputPath = $input->getOption("file");
        $racers = $arr->getArray(ROOT . "/data/abbreviations.txt");
        $driver = $input->getArgument("driver");
        $result = $finalTime->getList($inputPath, $sortOption);
        $driver ? 
        $output->writeln($stat->getStat($result, $racers, $driver)) : 
        $output->writeln($racersList->getList($result, $racers));
        return 0;
    }
}