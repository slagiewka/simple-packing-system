<?php
declare(strict_types=1);

namespace Package\Type;

interface PackageTypeInterface
{
    public function getWeight(): int;
    public function getMaxLength(): int;
}
