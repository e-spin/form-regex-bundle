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

/**
 * Add palettes to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['rgxp'] =
    '{type_legend},type,name,label;{fconfig_legend},mandatory,placeholder,rgxp_pattern,rgxp_pattern_attr,rgxp_error;{expert_legend:hide},class,value,minlength,maxlength,accesskey,tabindex;{invisible_legend:hide},invisible';

/**
 * Add fields to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp_pattern'] =
    [
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['rgxp_pattern'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
        'sql'       => "varchar(255) NOT NULL default ''"
    ];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp_error'] =
    [
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['rgxp_error'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength' => 255, 'tl_class' => 'w50'],
        'sql'       => "varchar(255) NOT NULL default ''"
    ];

$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp_pattern_attr'] =
    [
        'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['rgxp_pattern_attr'],
        'exclude'   => true,
        'inputType' => 'checkbox',
        'eval'      => ['tl_class' => 'w50 m12'],
        'sql'       => "char(1) NOT NULL default ''"
    ];
