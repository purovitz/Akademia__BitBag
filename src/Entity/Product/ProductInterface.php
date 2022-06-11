<?php

declare(strict_types=1);

namespace App\Entity\Product;

interface ProductInterface
{
    const PRODUCT_COLOR_RED = "Red";
    const PRODUCT_COLOR_BLUE = "Blue";
    const PRODUCT_COLOR_GREEN = "Green";

    public function getColor(): string;

    public function setColor($color): void;

}
