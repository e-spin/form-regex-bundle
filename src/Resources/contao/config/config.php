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

use Espin\FormRegexBundle\Forms\FormRegex;

/**
 * Form fields
 */
$GLOBALS['TL_FFL']['rgxp'] = FormRegex::class;
