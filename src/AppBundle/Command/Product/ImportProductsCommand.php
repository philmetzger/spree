<?php
namespace AppBundle\Command\Product;

use AppBundle\Entity\Category;
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

        $found = 0;
        $notFound = 0;
        foreach ($csvFile as $line) {
            $productArray = explode(';', $line);

            $category = utf8_encode($productArray[1]);
            $productName = utf8_encode($productArray[2]);
            $productDescription = utf8_encode($productArray[3]);
            $productPrice = utf8_encode($productArray[4]);
            $productImage = utf8_encode($productArray[5]);
            $productUrl = utf8_encode($productArray[6]);
            $productSize = utf8_encode($productArray[9]);
            $productColor = utf8_encode($productArray[10]);
            $productGender = utf8_encode($productArray[12]);
            $productBrand = utf8_encode($productArray[11]);

            $categoriesArray = explode(" > ", $category);

            $mainCategory = $categoryService->getByName($categoriesArray[0]);
            if (is_null($mainCategory)) {
                $output->writeln('Main Category[' . $categoriesArray[0] . '] not found.');
                die;
            }

            $subCategory = $categoryService->getBySimilarName($categoriesArray[1]);
            if (!$subCategory) {
                if (isset($categoriesArray[2])) {
                    $subCategory = $categoryService->getBySimilarName($categoriesArray[2]);
                }
                if (!$subCategory) {
                    $output->writeln('Sub Category[' . $categoriesArray[1] . '] not found.');
                    continue;
                }
            }

            $productService->addProduct(
                $productName,
                $productDescription,
                $productUrl,
                $productImage,
                '',
                $productPrice,
                $mainCategory->getId(),
                $mainCategory->getName(),
                $subCategory->getId(),
                $subCategory->getName(),
                $productColor,
                $productSize,
                $productGender,
                $productBrand
            );
        }

        var_dump($found, $notFound);die;

        $output->writeln('Done.');
    }
}