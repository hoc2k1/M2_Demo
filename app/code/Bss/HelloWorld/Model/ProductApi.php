<?php
namespace Bss\HelloWorld\Model;

use Bss\HelloWorld\Api\ProductApiInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class ProductApi implements ProductApiInterface
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     */
    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    // Lay data product bang sku
    public function getProductBySku($sku)
    {
        try {
            $product = $this->productRepository->get($sku);
            return $product;
        } catch (NoSuchEntityException $e) {
            throw new NoSuchEntityException(__('Product with SKU %1 not found.', $sku));
        }
    }
}