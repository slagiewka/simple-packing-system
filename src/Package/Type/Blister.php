<?php
declare(strict_types=1);
namespace Package\Type;

final class Blister implements PackageTypeInterface
{
    public function getWeight(): int
    {
        return 0;
    }

    public function getMaxLength(): int
    {
        return 0;
    }
}
