<?php
/**
 * Produce a HTML Select dropdown of US States
 *
 * PHP Version 4
 *
 * @category  HTML
 * @package   HTML_Select_Common
 * @author    Richard Heyes <richard@php.net>
 * @copyright 2002 Richard Heyes <richard@php.net>
 * @license   BSD (see http://www.opensource.org/licenses/bsd-license.php)
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/HTML_Select_Common
 */

/**
 * Class to produce a HTML Select dropdown of US States
 *
 * @category HTML
 * @package  HTML_Select
 * @author   Richard Heyes <richard@php.net>
 * @access   public
 * @license  BSD (see http://www.opensource.org/licenses/bsd-license.php);
 * @link     http://pear.php.net/package/HTML_Select_Common
 */

class HTML_Select_Common_USState
{
    /**
    * Constructor
    *
    * @access public
    */
    function HTML_Select_Common_USState()
    {
        $this->_states['al'] = 'Alabama';
        $this->_states['ak'] = 'Alaska';
        $this->_states['az'] = 'Arizona';
        $this->_states['ar'] = 'Arkansas';
        $this->_states['ca'] = 'California';
        $this->_states['co'] = 'Colorado';
        $this->_states['ct'] = 'Connecticut';
        $this->_states['de'] = 'Delaware';
        $this->_states['dc'] = 'District of Columbia';
        $this->_states['fl'] = 'Florida';
        $this->_states['ga'] = 'Georgia';
        $this->_states['hi'] = 'Hawaii';
        $this->_states['id'] = 'Idaho';
        $this->_states['il'] = 'Illinois';
        $this->_states['in'] = 'Indiana';
        $this->_states['ia'] = 'Iowa';
        $this->_states['ks'] = 'Kansas';
        $this->_states['ky'] = 'Kentucky';
        $this->_states['la'] = 'Louisiana';
        $this->_states['me'] = 'Maine';
        $this->_states['md'] = 'Maryland';
        $this->_states['ma'] = 'Massachusetts';
        $this->_states['mi'] = 'Michigan';
        $this->_states['mn'] = 'Minnesota';
        $this->_states['ms'] = 'Mississippi';
        $this->_states['mo'] = 'Missouri';
        $this->_states['mt'] = 'Montana';
        $this->_states['ne'] = 'Nebraska';
        $this->_states['nv'] = 'Nevada';
        $this->_states['nh'] = 'New Hampshire';
        $this->_states['nj'] = 'New Jersey';
        $this->_states['nm'] = 'New Mexico';
        $this->_states['ny'] = 'New York';
        $this->_states['nc'] = 'North Carolina';
        $this->_states['nd'] = 'North Dakota';
        $this->_states['oh'] = 'Ohio';
        $this->_states['ok'] = 'Oklahoma';
        $this->_states['or'] = 'Oregon';
        $this->_states['pa'] = 'Pennsylvania';
        $this->_states['ri'] = 'Rhode Island';
        $this->_states['sc'] = 'South Carolina';
        $this->_states['sd'] = 'South Dakota';
        $this->_states['tn'] = 'Tennessee';
        $this->_states['tx'] = 'Texas';
        $this->_states['ut'] = 'Utah';
        $this->_states['vt'] = 'Vermont';
        $this->_states['va'] = 'Virginia';
        $this->_states['wa'] = 'Washington';
        $this->_states['wv'] = 'West Virginia';
        $this->_states['wi'] = 'Wisconsin';
        $this->_states['wy'] = 'Wyoming';
    }

    /**
    * Produces the HTML for the dropdown
    *
    * @param string $name            The name="" attribute
    * @param string $selectedOption  The option to be selected by default.
    *                                Must match the state name exactly,
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
        $promoText = 'Select a state...',
        $extraAttributes = ''
    ) {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_states as $state) {
            $state_lc  = strtolower($state);
            $selected  = $selectedOption == $state_lc ? ' selected="selected"' : '';
            $options[] = '<option value="' . $state_lc . '"' . $selected . '>' .
                         ucfirst($state) . '</option>';
        }

        return sprintf(
            '<select name="%s" %s>%s</select>',
            $name,
            $extraAttributes,
            implode("\r\n", $options)
        );
    }

    /**
    * Returns an array with all states, indexed by shortcut
    *
    * @return array                   The array containing all state data
    * @access public
    */
    function getList()
    {
        return $this->_states;
    }
}

?>
