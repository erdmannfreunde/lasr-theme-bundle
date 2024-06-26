<?php

declare(strict_types=1);

namespace ErdmannFreunde\LasrTheme\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ErdmannFreunde\LasrTheme\LasrTheme;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(LasrTheme::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class
                ])->setReplace(['lasr-theme-bundle']),
        ];
    }
}