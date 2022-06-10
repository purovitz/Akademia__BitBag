<?php

declare(strict_types=1);

namespace App\Entity\Product;

interface ProductInterface
{


    public function getColor(): string;

    public function setColor($color): void;

}
