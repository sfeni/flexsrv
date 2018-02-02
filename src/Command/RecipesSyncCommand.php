<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RecipesSyncCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('recipes:sync');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // TODO Download or git clone the official, contrib and private recipes
    }
}
