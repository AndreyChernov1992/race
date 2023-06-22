<?php

namespace Console\App\Commands;

use Console\App\FileToArray;
use Console\App\Ladder;
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
        $arr = new FileToArray;
        $sortList = new Ladder;
        $stat = new RacerStat;
        $sort = $input->getOption("desc");
        $sortOption = $sort == "desc" ? "desc" : "asc";
        $racers = $arr->getArray(ROOT . "/data/abbreviations.txt");
        $inputFile = $input->getOption("file");
        $fileArray = $arr->getArray(ROOT . $inputFile);
        $driver = $input->getArgument("driver");
        $driver ? $output->writeln($stat->getStat($fileArray, $racers, $driver)) : "";
        $sort ? $output->writeln($sortList->sortCommand($fileArray, $racers, $sortOption)) : "";
        return 0;
    }
}