<?php
namespace AppBundle\Command\Product;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Import
 */
class ImportProductsCommand extends Command {

    /**
     * @return void
     */
    protected function configure() {
        $this->setName('app:import-products')
            ->setDescription('Imports products from an CSV.')
            ->setHelp("This command allows you to import products from a specific CSV file.")
            ->addArgument('file', InputArgument::REQUIRED, 'The path to the file.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('Starting.');

        try {
            $csvFile = file($input->getArgument('file'));
            $output->writeln('Processing file[' . $input->getArgument('file') . ']...');
        } catch (\Exception $e){
            $output->writeln('File[' . $input->getArgument('file') . '] not found.');
            return;
        }

        foreach ($csvFile as $line) {
            $productArray = explode(';', $line);
            var_dump($productArray);die;
        }

        $output->writeln('Done.');
    }
}