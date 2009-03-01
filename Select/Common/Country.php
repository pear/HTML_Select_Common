<?php
/**
 * Provide Select list for countries
 *
 * PHP Version 4
 *
 * @category  HTML
 * @package   HTML_Select_Common
 * @author    Richard Heyes <richard@php.net>
 * @copyright 2002 Marcelo Santos Araujo
 * @license   BSD (see http://www.opensource.org/licenses/bsd-license.php)
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/HTML_Select_Common
 */

require_once 'I18N/Country.php';

/**
 * Class to produce a HTML Select dropdown of countries
 *
 * @category HTML
 * @package  HTML_Select_Common
 * @author   Richard Heyes <richard@php.net>
 * @license  BSD (see http://www.opensource.org/licenses/bsd-license.php)
 * @link     http://pear.php.net/package/HTML_Select_Common
 */

class HTML_Select_Common_Country extends I18N_Country
{
    /**
    * Produces the HTML for the dropdown.
    *
    * @param string $name            The name="" attribute
    * @param string $selectedOption  The option to be selected by default.
    *                                Must match the country code.
    * @param string $promoText       The text to appear as the first option
    * @param string $extraAttributes Any extra attributes for the <select> tag
    *
    * @return string                  The HTML for the <select>
    * @access public
    */
    function toHTML(
        $name,
        $selectedOption = null,
        $promoText = 'Select a country...',
        $extraAttributes = ''
    ) {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_codes as $code => $country) {
            $code      = strtolower($code);
            $selected  = $selectedOption == $code ? ' selected="selected"' : '';
            $options[] = '<option value="' .
                         $code .
                         '"' .
                         $selected .
                         '>' .
                         ucfirst(strtolower($country)) . '</option>';
        }

        return sprintf(
            '<select name="%s" %s>%s</select>',
            $name,
            $extraAttributes,
            implode("\r\n", $options)
        );
    }
}

?>
