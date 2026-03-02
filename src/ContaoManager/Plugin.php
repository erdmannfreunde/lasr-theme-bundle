<?php

declare(strict_types=1);

namespace ErdmannFreunde\LasrThemeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ErdmannFreunde\LasrThemeBundle\LasrThemeBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(LasrThemeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
