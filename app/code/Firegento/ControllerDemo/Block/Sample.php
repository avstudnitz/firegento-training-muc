<?php

namespace Firegento\ControllerDemo\Block;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Model\ProductRepository;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\View\Element\Template;

class Sample extends Template
{
    /**
     * @var ProductFactory
     */
    //private $productFactory;
    /**
     * @var ProductFactory|ProductRepository
     */
    private $productRepository;
    /**
     * @var ProductCollectionFactory
     */
    private $productCollectionFactory;
    /**
     * @var Product
     */
    //private $product;

    public function __construct(
        Template\Context $context,
        //Product $product,
        //ProductFactory $productFactory,
        ProductRepository $productRepository,
        ProductCollectionFactory $productCollectionFactory,
        array $data
    )
    {
        parent::__construct($context, $data);
        //$this->product = $product;
        //$this->productFactory = $productFactory;
        $this->productRepository = $productRepository;
        $this->productCollectionFactory = $productCollectionFactory;
    }

    /**
     * @return ProductCollection
     */
    public function getProductCollection()
    {
        /** @var ProductCollection $productCollection */
        //$productCollection = $this->productRepository->getList();
        $productCollection = $this->productCollectionFactory->create();

        $productCollection->addAttributeToFilter('price', array('gt' => 20));

        $productCollection->addAttributeToSelect('name');

        $productCollection->setPageSize(3);

        $productCollection->setOrder('price', 'desc');

        return $productCollection;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        //$product = $this->product->load(55);
        //$product = $this->productFactory->create()->load(55);
        $product = $this->productRepository->getById(55);
        return $product;
    }
}