<?php

/**
 * This file is part of e-spin/form-regex-bundle.
 *
 * Copyright (c) 2020 e-spin
 *
 * @package   e-spin/form-regex-bundle
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @author    Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @copyright 2020 e-spin
 * @license   LGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Espin\FormRegexBundle\ContaoManager;

use Contao\ManagerBundle\ContaoManagerBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Espin\FormRegexBundle\EspinFormRegexBundle;

/**
 * @internal
 */
class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(EspinFormRegexBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class,
                        ContaoManagerBundle::class
                    ]
                ),
        ];
    }
}
