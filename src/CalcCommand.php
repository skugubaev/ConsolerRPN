<?php

namespace Skugubaev;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Skugubaev\RPN;

class CalcCommand extends Command {

    public function configure()
    {
        $this->setName("calculate")
             ->setDescription("This command calculate simple math expretions")
             ->addArgument('expretion', InputArgument::REQUIRED, 'math expretion');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $expretion = $input->getArgument('expretion');
        $calc = new RPN();
        $output->writeln($calc->calculateRPN($expretion));
    }
}