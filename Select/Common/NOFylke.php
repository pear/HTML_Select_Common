<?php
// +-----------------------------------------------------------------------+ 
// | Copyright (c) 2003 Nils-Fredrik G. Kaland                             | 
// | All rights reserved.                                                  | 
// |                                                                       | 
// | Redistribution and use in source and binary forms, with or without    | 
// | modification, are permitted provided that the following conditions    | 
// | are met:                                                              | 
// |                                                                       | 
// | o Redistributions of source code must retain the above copyright      | 
// |   notice, this list of conditions and the following disclaimer.       | 
// | o Redistributions in binary form must reproduce the above copyright   | 
// |   notice, this list of conditions and the following disclaimer in the | 
// |   documentation and/or other materials provided with the distribution.| 
// | o The names of the authors may not be used to endorse or promote      | 
// |   products derived from this software without specific prior written  | 
// |   permission.                                                         | 
// |                                                                       | 
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   | 
// | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     | 
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR | 
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  | 
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, | 
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      | 
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, | 
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY | 
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   | 
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE | 
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  | 
// |                                                                       | 
// +-----------------------------------------------------------------------+ 
// | Author: Nils-Fredrik G. Kaland <nils-fredrik@argo.no>                 | 
// +-----------------------------------------------------------------------+ 
// 
// $Id$

/**
* Class to produce a HTML Select dropdown of Norwegian Fylker
*
* @author  Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
* @access  public
* @version 1.0
* @package HTML_Select
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
    * @param  string $name            The name="" attribute
    * @param  string $selectedOption  The option to be selected by default.
    *                                 Must match the fylke name exactly,
    *                                 (though it can be a different case).
    * @param  string $promoText       The text to appear as the first option
    * @param  string $extraAttributes Any extra attributes for the <select> tag
    * @return string                  The HTML for the <select>
    * @access public
    */
    function toHTML($name, $selectedOption = null, $promoText = 'Velg et fylke...', $extraAttributes = '')
    {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_fylker as $fylke) {
            $fylke_lc  = strtolower($fylke);
            $selected  = $selectedOption == $fylke_lc ? ' selected="selected"' : '';
            $options[] = '<option value="' . $fylke_lc . '"' . $selected . '>' . ucfirst($fylke) . '</option>';
        }
        
        return sprintf('<select name="%s" %s>%s</select>',
                       $name,
                       $extraAttributes,
                       implode("\r\n", $options));
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
