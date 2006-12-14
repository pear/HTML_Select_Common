<?php
/**
* +-----------------------------------------------------------------------+
* | Copyright (c) 2002 Marcelo Santos Araujo                              |
* | All rights reserved.                                                  |
* |                                                                       |
* | Redistribution and use in source and binary forms, with or without    |
* | modification, are permitted provided that the following conditions    |
* | are met:                                                              |
* |                                                                       |
* | o Redistributions of source code must retain the above copyright      |
* |   notice, this list of conditions and the following disclaimer.       |
* | o Redistributions in binary form must reproduce the above copyright   |
* |   notice, this list of conditions and the following disclaimer in the |
* |   documentation and/or other materials provided with the distribution.|
* | o The names of the authors may not be used to endorse or promote      |
* |   products derived from this software without specific prior written  |
* |   permission.                                                         |
* |                                                                       |
* | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   |
* | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     |
* | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR |
* | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  |
* | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, |
* | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      |
* | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, |
* | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY |
* | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   |
* | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE |
* | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  |
* |                                                                       |
* +-----------------------------------------------------------------------+
* | Author: Marcelo Santos Araujo <marcelo@orionlab.net>                  |
* +-----------------------------------------------------------------------+
*
* $Id$
*
* Class to produce a HTML Select dropdown of brazilian states
*
* @author  Marcelo Santos Araujo <marcelo@orionlab.net>
* @access  public
* @version 1.0
* @package HTML_Select
*/

class HTML_Select_Common_BRState
{
    /**
    * Array containing the ptBR States
    * @var  array
    * @access   private
    */

    var $_states = array();

    /**
    * Constructor
    *
    * @access public
    */
    function HTML_Select_Common_ptBRState()
    {
        $this->_states['ac'] = 'Acre';
        $this->_states['al'] = 'Alagoas';
        $this->_states['ap'] = 'Amapá';
        $this->_states['am'] = 'Amazonas';
        $this->_states['ba'] = 'Bahia';
        $this->_states['ce'] = 'Ceará';
        $this->_states['df'] = 'Distrito Federal';
        $this->_states['es'] = 'Espírito Santo';
        $this->_states['go'] = 'Goiás';
        $this->_states['ma'] = 'Maranhão';
        $this->_states['mt'] = 'Mato Grosso';
        $this->_states['ms'] = 'Mato Grosso do Sul';
        $this->_states['mg'] = 'Minas Gerais';
        $this->_states['pa'] = 'Pará';
        $this->_states['pb'] = 'Paraíba';
        $this->_states['pr'] = 'Paraná';
        $this->_states['pe'] = 'Pernambuco';
        $this->_states['pi'] = 'Piauí';
        $this->_states['rj'] = 'Rio de Janeiro';
        $this->_states['rn'] = 'Rio Grande do Norte';
        $this->_states['rs'] = 'Rio Grande do Sul';
        $this->_states['ro'] = 'Rondônia';
        $this->_states['rr'] = 'Roraima';
        $this->_states['sc'] = 'Santa Catarina';
        $this->_states['sp'] = 'São Paulo';
        $this->_states['se'] = 'Sergipe';
        $this->_states['to'] = 'Tocantins';
    }

    /**
    * Produces the HTML for the dropdown
    *
    * @param  string $name            The name="" attribute
    * @param  string $selectedOption  The option to be selected by default.
    *                                 Must match the state name exactly,
    *                                 (though it can be a different case).
    * @param  string $promoText       The text to appear as the first option
    * @param  string $extraAttributes Any extra attributes for the <select> tag
    * @return string                  The HTML for the <select>
    * @access public
    */
    function toHTML($name, $selectedOption = null, $promoText = 'Selecione um estado...', $extraAttributes = '')
    {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_states as $state) {
            $state_lc  = strtolower($state);
            $selected  = $selectedOption == $state_lc ? ' selected="selected"' : '';
            $options[] = '<option value="' . $state_lc . '"' . $selected . '>' . ucfirst($state) . '</option>';
        }

        return sprintf('<select name="%s" %s>%s</select>',
                       $name,
                       $extraAttributes,
                       implode("\r\n", $options));
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