<?php
namespace AppBundle\Command\Product;

use AppBundle\Entity\Category;
use NumberFormatter;
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

        ini_set('memory_limit', '1G');

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
            $output->writeln('Processing: ' . $line);

            $productArray = explode(';', $line);

            try {
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
            } catch (\Exception $e) {
                $notFound++;
                continue;
            }

            $parentId = 0;

            $categoriesArray = explode(" > ", $category);
            foreach ($categoriesArray as $arrayCategory) {
                $category = $categoryService->getByName($arrayCategory);
                if (is_null($category)) {
                    $category = $this->createCategory($arrayCategory, $parentId);
                    $output->writeln('Created Category[' . $category->getName() . '].');
                }

                if (is_null($category)) {
                    var_dump($arrayCategory);die;
                }

                $parentId = $category->getId();
            }

            $productPrice = floatval(str_replace(',', '.', str_replace('.', '', $productPrice)));

            $product = $productService->addProduct(
                $productName,
                $productDescription,
                $productUrl,
                $this->addhttp($productImage),
                '',
                $productPrice,
                $category->getId(),
                $category->getName(),
                $productColor,
                $productSize,
                $productGender,
                $productBrand
            );

            $output->writeln('Copying image for Product[' . $product->getId() .']: ' . $product->getImageUrlPrimary());
            try {
                copy($product->getImageUrlPrimary(), 'web/bundles/app/image/product/' . $product->getId() . '.jpeg');
            } catch (\Exception $e) {
                $productService->deleteByProductId($product->getId());
            }

            $found++;
            gc_collect_cycles();
        }

        $output->writeln('Done. Found = ' . $found . '. Not found = ' . $notFound . '.');
    }

    /**
     * @param string $url
     * @return string
     */
    private function addhttp($url) {
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }
        return $url;
    }

    /**
     * @param string $arrayCategory
     * @param int $parentId
     *
     * @return Category
     */
    private function createCategory($arrayCategory, $parentId = 0) {
        /* @var \AppBundle\Service\CategoryService $categoryService */
        $categoryService = $this->getContainer()->get('app.category');

        $categoryService->addCategory(trim($arrayCategory), null, $parentId);

        return $categoryService->getByName(trim($arrayCategory));
    }
}