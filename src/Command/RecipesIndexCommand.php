<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RecipesIndexCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('recipes:index');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // TODO Build the needed index files to serve responses fast and have a data basis
        // for example: packages.json versions.json aliases.json (for the responses)
    }
}
