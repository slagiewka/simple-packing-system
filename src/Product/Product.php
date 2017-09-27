<?php
declare(strict_types=1);

namespace Product;

use Package\Decoration\DecorationInterface;
use Package\Type\PackageTypeInterface;

final class Product
{
    /** @var PackageTypeInterface */
    private $packaging;

    /** @var DecorationInterface[] */
    private $decorations;

    /**
     * @param PackageTypeInterface  $packaging
     * @param DecorationInterface[] $decorations
     */
    public function __construct(PackageTypeInterface $packaging, array $decorations)
    {
        $this->packaging = $packaging;
        $this->decorations = $decorations;
    }
}
