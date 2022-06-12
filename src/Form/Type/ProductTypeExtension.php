<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Product\ProductInterface;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;


final class ProductTypeExtension extends AbstractTypeExtension implements FormTypeInterface
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('color', ChoiceType::class, [
            'choices' => [
                'Red' => ProductInterface::PRODUCT_COLOR_RED,
                'Blue' => ProductInterface::PRODUCT_COLOR_BLUE,
                'Green' => ProductInterface::PRODUCT_COLOR_GREEN,
            ],
                'required' => false,
            ]);
    }

    public function getBlockPrefix()
    {
        return 'color';
    }

    public function getParent()
    {
        return ProductType::class;
    }



    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
