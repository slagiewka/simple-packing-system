<?php
declare(strict_types=1);
namespace Package;

use Product\Product;
use function spl_object_hash;

final class ShipmentPackage
{
    /** @var Product[] */
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[spl_object_hash($product)] = $product;
    }

    public function removeProduct(Product $product)
    {
        if (isset($this->products[spl_object_hash($product)])) {
            unset($this->products[spl_object_hash($product)]);
        }
    }
}
