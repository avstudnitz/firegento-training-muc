<?php

namespace Firegento\ReplacementMethods\Plugin\Newsletter\Block;

use \Magento\Newsletter\Block\Subscribe as Source;
class SubscribePlugin
{
    public function afterGetFormActionUrl (
        Source $source,
        $return
    )
    {

        return $return . '?firegento=munich';
    }
}