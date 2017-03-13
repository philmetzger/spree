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

        /* @var \AppBundle\Service\CategoryService $categoryService */
        $categoryService = $this->getContainer()->get('app.category');

        foreach ($csvFile as $line) {
            $productArray = explode(';', $line);

            $productName = utf8_encode($productArray[0]);
            $productUrl = utf8_encode($productArray[1]);
            $productImage0 = utf8_encode($productArray[2]);
            $productImage1 = utf8_encode($productArray[3]);
            $productPrice = utf8_encode($productArray[4]);
            $productMainCategory = utf8_encode($productArray[5]);
            $productSubCategory = utf8_encode($productArray[6]);
            $productColor = utf8_encode($productArray[7]);
            $productSize = utf8_encode($productArray[8]);
            $productGender = utf8_encode($productArray[9]);
            $productBrand = utf8_encode($productArray[10]);
            $productStore = utf8_encode($productArray[11]);

            $mainCategory = $categoryService->getByName($productMainCategory);
            if (!$mainCategory) {
                $output->writeln('Main Category[' . $productMainCategory . '] not found.');
                die;
            }

            $subCategory = $categoryService->getByName($productSubCategory);
            if (!$subCategory) {
                $output->writeln('Main Category[' . $productSubCategory . '] not found.');
                die;
            }

            $productService->addProduct(
                $productName,
                $productUrl,
                [$productImage0, $productImage1],
                $productPrice,
                $productMainCategory,
                $productSubCategory,
                $productColor,
                $productSize,
                $productGender,
                $productBrand,
                $productStore
            );
        }

        $output->writeln('Done.');
    }
}