<?php
/**
 * Produce a HTML Select dropdown of Norwegian Fylker
 *
 * PHP Version 4
 *
 * @category  HTML
 * @package   HTML_Select
 * @author    Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
 * @copyright 2003 Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
 * @license   BSD (see http://www.opensource.org/licenses/bsd-license.php)
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/HTML_Select_Common
 */

/**
 * Class to produce a HTML Select dropdown of Norwegian Fylker
 *
 * @category HTML
 * @package  HTML_Select
 * @author   Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
 * @access   public
 * @license  BSD (see http://www.opensource.org/licenses/bsd-license.php);
 * @link     http://pear.php.net/package/HTML_Select_Common
 */

class HTML_Select_Common_NOFylke
{
    /**
    * Constructor
    *
    * @access public
    */
    function HTML_Select_Common_NOFylke()
    {
        $this->_fylker[] = 'Akershus';
        $this->_fylker[] = 'Aust-Agder';
        $this->_fylker[] = 'Buskerud';
        $this->_fylker[] = 'Finnmark';
        $this->_fylker[] = 'Hedmark';
        $this->_fylker[] = 'Hordaland';
        $this->_fylker[] = 'Møre og Romsdal';
        $this->_fylker[] = 'Nord-Trøndelag';
        $this->_fylker[] = 'Nordland';
        $this->_fylker[] = 'Oppland';
        $this->_fylker[] = 'Oslo';
        $this->_fylker[] = 'Rogaland';
        $this->_fylker[] = 'Sogn og Fjordane';
        $this->_fylker[] = 'Svalbard';
        $this->_fylker[] = 'Sør-Trøndelag';
        $this->_fylker[] = 'Telemark';
        $this->_fylker[] = 'Troms';
        $this->_fylker[] = 'Vest-Agder';
        $this->_fylker[] = 'Vestfold';
        $this->_fylker[] = 'Østfold';
    }

    /**
    * Produces the HTML for the dropdown
    *
    * @param string $name            The name="" attribute
    * @param string $selectedOption  The option to be selected by default.
    *                                Must match the fylke name exactly,
    *                                (though it can be a different case).
    * @param string $promoText       The text to appear as the first option
    * @param string $extraAttributes Any extra attributes for the <select> tag
    *
    * @return string                  The HTML for the <select>
    * @access public
    */
    function toHTML(
        $name,
        $selectedOption = null,
        $promoText = 'Velg et fylke...',
        $extraAttributes = ''
    ) {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_fylker as $fylke) {
            $fylke_lc  = strtolower($fylke);
            $selected  = $selectedOption == $fylke_lc ? ' selected="selected"' : '';
            $options[] = '<option value="' . $fylke_lc . '"' . $selected .
                         '>' . ucfirst($fylke) . '</option>';
        }

        return sprintf(
            '<select name="%s" %s>%s</select>',
            $name,
            $extraAttributes,
            implode("\r\n", $options)
        );
    }

    /**
    * Returns an array with all fylker
    *
    * @return array                   The array containing all fylke data
    * @access public
    */
    function getList()
    {
        return $this->_fylker;
    }
}

?>
