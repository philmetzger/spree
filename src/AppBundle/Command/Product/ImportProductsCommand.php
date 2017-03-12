<?php
namespace AppBundle\Command\Product;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Import
 */
class ImportProductsCommand extends ContainerAwareCommand {

    /**
     * @return void
     */
    protected function configure() {
        $this->setName('app:import-products')
            ->setDescription('Imports products from a file.')
            ->setHelp("This command allows you to import products from a specific file.")
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

        /* @var \AppBundle\Service\ProductService $productService */
        $productService = $this->getContainer()->get('app.product');

        foreach ($csvFile as $line) {
            $productArray = explode(';', $line);
            $mainCategoryName = utf8_encode($productArray[0]);
            $subCategoryName = utf8_encode($productArray[1]);

//            $mainCategory = $productService->getByName($mainCategoryName);
//            if (!$mainCategory) {
//                $output->writeln('Main Category[' . $mainCategoryName . '] not found.');
//                die;
//            }

//            $categoryService->addCategory($subCategoryName, Category::CATEGORY_TYPE_FASHION, $mainCategory->getId());
        }

        $output->writeln('Done.');
    }
}