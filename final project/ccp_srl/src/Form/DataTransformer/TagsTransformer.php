<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface
{
    public function transform($tags): string
    {
        // Converti un array in una stringa separata da virgole
        return is_array($tags) ? implode(', ', $tags) : '';
    }

    public function reverseTransform($string): array
    {
        // Converti una stringa in un array
        return $string ? array_map('trim', explode(',', $string)) : [];
    }
}
