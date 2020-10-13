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

namespace Espin\FormRegexBundle\Forms;

class FormRegex extends \FormTextField
{
    /**
     * Add the attribute pattern
     * @param array
     */
    public function __construct($arrAttributes=null)
    {
        parent::__construct($arrAttributes);

        if ($this->rgxp_pattern_attr) {
            $this->addAttribute('pattern', $this->rgxp_pattern);
        }
    }

    /**
     * Validate the regular expression
     */
    public function validate()
    {
        parent::validate();

        if ($this->hasErrors()) {
            return;
        }

        // Do not validate if the field is not mandatory and there is no value
        if (!$this->mandatory && $this->varValue === '') {
            return;
        }

        if (preg_match('/' . $this->rgxp_pattern . '/', $this->varValue)) {
            return;
        }

        $strMessage = $GLOBALS['TL_LANG']['ERR']['general'];

        // Use custom error message
        if ($this->rgxp_error != '') {
            $strMessage = $this->rgxp_error;
        }

        $this->addError($strMessage);
    }
}
