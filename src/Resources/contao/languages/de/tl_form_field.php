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

/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['rgxp'] = ['Textfeld mit Regex', 'Fügt ein Textfeld mit Regex hinzu.'];

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['rgxp_pattern']      = [
    'Regex-Muster',
    'Hier das Regex-Muster einfügen. Bitte ohne "Delimenter" wie "/" an Anfang und Ende und ohne Flags wie i (case-insensitive) einsetzen.'
];
$GLOBALS['TL_LANG']['tl_form_field']['rgxp_error']        =
    ['Fehlertext', 'Hier bitte den Text eingeben, der im Fall eines Fehlers ausgegeben werden soll.'];
$GLOBALS['TL_LANG']['tl_form_field']['rgxp_pattern_attr'] =
    ['HTML5-Pattern-Attribut aktivieren', 'Hiermit wird das Regex-Muster als HTML5-Pattern-Attribut eingefügt.'];
