<?php

namespace Firegento\ReplacementMethods\Plugin\Catalog\Category;

use Magento\Catalog\Model\Category\Attribute\Source\Mode as Source;

class DisplayModePlugin
{
    const DISPLAY_MODE_INSPIRATION = 'inspiration';

    public function aroundGetAllOptions(
        Source $source,
        callable $proceed
    ) {
        $options = $proceed();
        $options[] = [
            'value' => self::DISPLAY_MODE_INSPIRATION,
            'label' => __('Inspiration')
        ];
        return $options;
    }
}