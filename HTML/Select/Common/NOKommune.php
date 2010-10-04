<?php
/**
 * Produce a HTML Select dropdown of Norwegian Kommuner
 *
 * PHP Version 4
 *
 * @category  HTML
 * @package   HTML_Select_Common
 * @author    Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
 * @copyright 2003 Richard Heyes <richard@php.net>
 * @license   BSD (see http://www.opensource.org/licenses/bsd-license.php)
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/HTML_Select_Common
 */

/**
 * Class to produce a HTML Select dropdown of Norwegian Kommuner
 *
 * @category HTML
 * @package  HTML_Select
 * @author   Nils-Fredrik G. Kaland <nils-fredrik@argo.no>
 * @access   public
 * @license  BSD (see http://www.opensource.org/licenses/bsd-license.php);
 * @link     http://pear.php.net/package/HTML_Select_Common
 */

class HTML_Select_Common_NOKommune
{
    /**
    * Constructor
    *
    * @access public
    */
    function HTML_Select_Common_NOKommune()
    {
        // They are by default sorted after their kommunenr.
        // But can easily be sorted alfabethically.
        // @see     sort
        $this->_kommuner[] = 'Agdenes';
        $this->_kommuner[] = 'Alstahaug';
        $this->_kommuner[] = 'Alta';
        $this->_kommuner[] = 'Alvdal';
        $this->_kommuner[] = 'Andebu';
        $this->_kommuner[] = 'Andøy';
        $this->_kommuner[] = 'Aremark';
        $this->_kommuner[] = 'Arendal';
        $this->_kommuner[] = 'Asker';
        $this->_kommuner[] = 'Askim';
        $this->_kommuner[] = 'Askvoll';
        $this->_kommuner[] = 'Askøy';
        $this->_kommuner[] = 'Audnedal';
        $this->_kommuner[] = 'Aukra';
        $this->_kommuner[] = 'Aure';
        $this->_kommuner[] = 'Aurland';
        $this->_kommuner[] = 'Aurskog-Høland';
        $this->_kommuner[] = 'Austevoll';
        $this->_kommuner[] = 'Austrheim';
        $this->_kommuner[] = 'Averøy';
        $this->_kommuner[] = 'Balestrand';
        $this->_kommuner[] = 'Ballangen';
        $this->_kommuner[] = 'Balsfjord';
        $this->_kommuner[] = 'Bamble';
        $this->_kommuner[] = 'Bardu';
        $this->_kommuner[] = 'Beiarn';
        $this->_kommuner[] = 'Berg';
        $this->_kommuner[] = 'Bergen';
        $this->_kommuner[] = 'Berlevåg';
        $this->_kommuner[] = 'Bindal';
        $this->_kommuner[] = 'Birkenes';
        $this->_kommuner[] = 'Bjarkøy';
        $this->_kommuner[] = 'Bjerkreim';
        $this->_kommuner[] = 'Bjugn';
        $this->_kommuner[] = 'Bodø';
        $this->_kommuner[] = 'Bokn';
        $this->_kommuner[] = 'Bremanger';
        $this->_kommuner[] = 'Brønnøy';
        $this->_kommuner[] = 'Bygland';
        $this->_kommuner[] = 'Bykle';
        $this->_kommuner[] = 'Båtsfjord';
        $this->_kommuner[] = 'Bærum';
        $this->_kommuner[] = 'Bø';
        $this->_kommuner[] = 'Bø';
        $this->_kommuner[] = 'Bømlo';
        $this->_kommuner[] = 'Deatnu - Tana';
        $this->_kommuner[] = 'Dovre';
        $this->_kommuner[] = 'Drammen';
        $this->_kommuner[] = 'Drangedal';
        $this->_kommuner[] = 'Dyrøy';
        $this->_kommuner[] = 'Dønna';
        $this->_kommuner[] = 'Eid';
        $this->_kommuner[] = 'Eide';
        $this->_kommuner[] = 'Eidfjord';
        $this->_kommuner[] = 'Eidsberg';
        $this->_kommuner[] = 'Eidskog';
        $this->_kommuner[] = 'Eidsvoll';
        $this->_kommuner[] = 'Eigersund';
        $this->_kommuner[] = 'Elverum';
        $this->_kommuner[] = 'Enebakk';
        $this->_kommuner[] = 'Engerdal';
        $this->_kommuner[] = 'Etne';
        $this->_kommuner[] = 'Etnedal';
        $this->_kommuner[] = 'Evenes';
        $this->_kommuner[] = 'Evje og Hornnes';
        $this->_kommuner[] = 'Farsund';
        $this->_kommuner[] = 'Fauske';
        $this->_kommuner[] = 'Fedje';
        $this->_kommuner[] = 'Fet';
        $this->_kommuner[] = 'Finnøy';
        $this->_kommuner[] = 'Fitjar';
        $this->_kommuner[] = 'Fjaler';
        $this->_kommuner[] = 'Fjell';
        $this->_kommuner[] = 'Flakstad';
        $this->_kommuner[] = 'Flatanger';
        $this->_kommuner[] = 'Flekkefjord';
        $this->_kommuner[] = 'Flesberg';
        $this->_kommuner[] = 'Flora';
        $this->_kommuner[] = 'Flå';
        $this->_kommuner[] = 'Folldal';
        $this->_kommuner[] = 'Forsand';
        $this->_kommuner[] = 'Fosnes';
        $this->_kommuner[] = 'Fredrikstad';
        $this->_kommuner[] = 'Frei';
        $this->_kommuner[] = 'Frogn';
        $this->_kommuner[] = 'Froland';
        $this->_kommuner[] = 'Frosta';
        $this->_kommuner[] = 'Fræna';
        $this->_kommuner[] = 'Frøya';
        $this->_kommuner[] = 'Fusa';
        $this->_kommuner[] = 'Fyresdal';
        $this->_kommuner[] = 'Førde';
        $this->_kommuner[] = 'Gaivuotna - Kåfjord';
        $this->_kommuner[] = 'Gamvik';
        $this->_kommuner[] = 'Gaular';
        $this->_kommuner[] = 'Gausdal';
        $this->_kommuner[] = 'Gildeskål';
        $this->_kommuner[] = 'Giske';
        $this->_kommuner[] = 'Gjemnes';
        $this->_kommuner[] = 'Gjerdrum';
        $this->_kommuner[] = 'Gjerstad';
        $this->_kommuner[] = 'Gjesdal';
        $this->_kommuner[] = 'Gjøvik';
        $this->_kommuner[] = 'Gloppen';
        $this->_kommuner[] = 'Gol';
        $this->_kommuner[] = 'Gran';
        $this->_kommuner[] = 'Grane';
        $this->_kommuner[] = 'Granvin';
        $this->_kommuner[] = 'Gratangen';
        $this->_kommuner[] = 'Grimstad';
        $this->_kommuner[] = 'Grong';
        $this->_kommuner[] = 'Grue';
        $this->_kommuner[] = 'Gulen';
        $this->_kommuner[] = 'Guovdageaidnu-Kautokeino';
        $this->_kommuner[] = 'Hadsel';
        $this->_kommuner[] = 'Halden';
        $this->_kommuner[] = 'Halsa';
        $this->_kommuner[] = 'Hamar';
        $this->_kommuner[] = 'Hamarøy';
        $this->_kommuner[] = 'Hammerfest';
        $this->_kommuner[] = 'Haram';
        $this->_kommuner[] = 'Hareid';
        $this->_kommuner[] = 'Harstad';
        $this->_kommuner[] = 'Hasvik';
        $this->_kommuner[] = 'Hattfjelldal';
        $this->_kommuner[] = 'Haugesund';
        $this->_kommuner[] = 'Hemne';
        $this->_kommuner[] = 'Hemnes';
        $this->_kommuner[] = 'Hemsedal';
        $this->_kommuner[] = 'Herøy';
        $this->_kommuner[] = 'Herøy';
        $this->_kommuner[] = 'Hitra';
        $this->_kommuner[] = 'Hjartdal';
        $this->_kommuner[] = 'Hjelmeland';
        $this->_kommuner[] = 'Hobøl';
        $this->_kommuner[] = 'Hof';
        $this->_kommuner[] = 'Hol';
        $this->_kommuner[] = 'Hole';
        $this->_kommuner[] = 'Holmestrand';
        $this->_kommuner[] = 'Holtålen';
        $this->_kommuner[] = 'Hornindal';
        $this->_kommuner[] = 'Horten';
        $this->_kommuner[] = 'Hurdal';
        $this->_kommuner[] = 'Hurum';
        $this->_kommuner[] = 'Hvaler';
        $this->_kommuner[] = 'Hyllestad';
        $this->_kommuner[] = 'Hå';
        $this->_kommuner[] = 'Hægebostad';
        $this->_kommuner[] = 'Høyanger';
        $this->_kommuner[] = 'Høylandet';
        $this->_kommuner[] = 'Ibestad';
        $this->_kommuner[] = 'Inderøy';
        $this->_kommuner[] = 'Iveland';
        $this->_kommuner[] = 'Jevnaker';
        $this->_kommuner[] = 'Jondal';
        $this->_kommuner[] = 'Jølster';
        $this->_kommuner[] = 'Karasjohka-Karasjok';
        $this->_kommuner[] = 'Karlsøy';
        $this->_kommuner[] = 'Karmøy';
        $this->_kommuner[] = 'Klepp';
        $this->_kommuner[] = 'Klæbu';
        $this->_kommuner[] = 'Kongsberg';
        $this->_kommuner[] = 'Kongsvinger';
        $this->_kommuner[] = 'Kragerø';
        $this->_kommuner[] = 'Kristiansand';
        $this->_kommuner[] = 'Kristiansund';
        $this->_kommuner[] = 'Krødsherad';
        $this->_kommuner[] = 'Kvalsund';
        $this->_kommuner[] = 'Kvam';
        $this->_kommuner[] = 'Kvinesdal';
        $this->_kommuner[] = 'Kvinnherad';
        $this->_kommuner[] = 'Kviteseid';
        $this->_kommuner[] = 'Kvitsøy';
        $this->_kommuner[] = 'Kvæfjord';
        $this->_kommuner[] = 'Kvænangen';
        $this->_kommuner[] = 'Lardal';
        $this->_kommuner[] = 'Larvik';
        $this->_kommuner[] = 'Lavangen';
        $this->_kommuner[] = 'Lebesby';
        $this->_kommuner[] = 'Leikanger';
        $this->_kommuner[] = 'Leirfjord';
        $this->_kommuner[] = 'Leka';
        $this->_kommuner[] = 'Leksvik';
        $this->_kommuner[] = 'Lenvik';
        $this->_kommuner[] = 'Lesja';
        $this->_kommuner[] = 'Levanger';
        $this->_kommuner[] = 'Lier';
        $this->_kommuner[] = 'Lierne';
        $this->_kommuner[] = 'Lillehammer';
        $this->_kommuner[] = 'Lillesand';
        $this->_kommuner[] = 'Lindesnes';
        $this->_kommuner[] = 'Lindås';
        $this->_kommuner[] = 'Lom';
        $this->_kommuner[] = 'Loppa';
        $this->_kommuner[] = 'Lund';
        $this->_kommuner[] = 'Lunner';
        $this->_kommuner[] = 'Lurøy';
        $this->_kommuner[] = 'Luster';
        $this->_kommuner[] = 'Lyngdal';
        $this->_kommuner[] = 'Lyngen';
        $this->_kommuner[] = 'Lærdal';
        $this->_kommuner[] = 'Lødingen';
        $this->_kommuner[] = 'Lørenskog';
        $this->_kommuner[] = 'Løten';
        $this->_kommuner[] = 'Malvik';
        $this->_kommuner[] = 'Mandal';
        $this->_kommuner[] = 'Marker';
        $this->_kommuner[] = 'Marnardal';
        $this->_kommuner[] = 'Masfjorden';
        $this->_kommuner[] = 'Meland';
        $this->_kommuner[] = 'Meldal';
        $this->_kommuner[] = 'Melhus';
        $this->_kommuner[] = 'Meløy';
        $this->_kommuner[] = 'Meråker';
        $this->_kommuner[] = 'Midsund';
        $this->_kommuner[] = 'Midtre Gauldal';
        $this->_kommuner[] = 'Modalen';
        $this->_kommuner[] = 'Modum';
        $this->_kommuner[] = 'Molde';
        $this->_kommuner[] = 'Moskenes';
        $this->_kommuner[] = 'Moss';
        $this->_kommuner[] = 'Mosvik';
        $this->_kommuner[] = 'Målselv';
        $this->_kommuner[] = 'Måsøy';
        $this->_kommuner[] = 'Namdalseid';
        $this->_kommuner[] = 'Namsos';
        $this->_kommuner[] = 'Namsskogan';
        $this->_kommuner[] = 'Nannestad';
        $this->_kommuner[] = 'Narvik';
        $this->_kommuner[] = 'Naustdal';
        $this->_kommuner[] = 'Nedre Eiker';
        $this->_kommuner[] = 'Nes';
        $this->_kommuner[] = 'Nes';
        $this->_kommuner[] = 'Nesna';
        $this->_kommuner[] = 'Nesodden';
        $this->_kommuner[] = 'Nesset';
        $this->_kommuner[] = 'Nissedal';
        $this->_kommuner[] = 'Nittedal';
        $this->_kommuner[] = 'Nome';
        $this->_kommuner[] = 'Nord-Aurdal';
        $this->_kommuner[] = 'Nord-Fron';
        $this->_kommuner[] = 'Nord-Odal';
        $this->_kommuner[] = 'Norddal';
        $this->_kommuner[] = 'Nordkapp';
        $this->_kommuner[] = 'Nordre Land';
        $this->_kommuner[] = 'Nordreisa';
        $this->_kommuner[] = 'Nore og Uvdal';
        $this->_kommuner[] = 'Notodden';
        $this->_kommuner[] = 'Nærøy';
        $this->_kommuner[] = 'Nøtterøy';
        $this->_kommuner[] = 'Odda';
        $this->_kommuner[] = 'Oppdal';
        $this->_kommuner[] = 'Oppegård';
        $this->_kommuner[] = 'Orkdal';
        $this->_kommuner[] = 'Os';
        $this->_kommuner[] = 'Os';
        $this->_kommuner[] = 'Osen';
        $this->_kommuner[] = 'Oslo';
        $this->_kommuner[] = 'Osterøy';
        $this->_kommuner[] = 'Overhalla';
        $this->_kommuner[] = 'Porsanger';
        $this->_kommuner[] = 'Porsgrunn';
        $this->_kommuner[] = 'Radøy';
        $this->_kommuner[] = 'Rakkestad';
        $this->_kommuner[] = 'Rana';
        $this->_kommuner[] = 'Randaberg';
        $this->_kommuner[] = 'Rauma';
        $this->_kommuner[] = 'Re';
        $this->_kommuner[] = 'Rendalen';
        $this->_kommuner[] = 'Rennebu';
        $this->_kommuner[] = 'Rennesøy';
        $this->_kommuner[] = 'Rindal';
        $this->_kommuner[] = 'Ringebu';
        $this->_kommuner[] = 'Ringerike';
        $this->_kommuner[] = 'Ringsaker';
        $this->_kommuner[] = 'Rissa';
        $this->_kommuner[] = 'Risør';
        $this->_kommuner[] = 'Roan';
        $this->_kommuner[] = 'Rollag';
        $this->_kommuner[] = 'Rygge';
        $this->_kommuner[] = 'Råde';
        $this->_kommuner[] = 'Rælingen';
        $this->_kommuner[] = 'Rødøy';
        $this->_kommuner[] = 'Rømskog';
        $this->_kommuner[] = 'Røros';
        $this->_kommuner[] = 'Røst';
        $this->_kommuner[] = 'Røyken';
        $this->_kommuner[] = 'Røyrvik';
        $this->_kommuner[] = 'Salangen';
        $this->_kommuner[] = 'Saltdal';
        $this->_kommuner[] = 'Samnanger';
        $this->_kommuner[] = 'Sande';
        $this->_kommuner[] = 'Sande';
        $this->_kommuner[] = 'Sandefjord';
        $this->_kommuner[] = 'Sandnes';
        $this->_kommuner[] = 'Sandøy';
        $this->_kommuner[] = 'Sarpsborg';
        $this->_kommuner[] = 'Sauda';
        $this->_kommuner[] = 'Sauherad';
        $this->_kommuner[] = 'Sel';
        $this->_kommuner[] = 'Selbu';
        $this->_kommuner[] = 'Selje';
        $this->_kommuner[] = 'Seljord';
        $this->_kommuner[] = 'Sigdal';
        $this->_kommuner[] = 'Siljan';
        $this->_kommuner[] = 'Sirdal';
        $this->_kommuner[] = 'Skaun';
        $this->_kommuner[] = 'Skedsmo';
        $this->_kommuner[] = 'Ski';
        $this->_kommuner[] = 'Skien';
        $this->_kommuner[] = 'Skiptvet';
        $this->_kommuner[] = 'Skjerstad';
        $this->_kommuner[] = 'Skjervøy';
        $this->_kommuner[] = 'Skjåk';
        $this->_kommuner[] = 'Skodje';
        $this->_kommuner[] = 'Skånland';
        $this->_kommuner[] = 'Smøla';
        $this->_kommuner[] = 'Snillfjord';
        $this->_kommuner[] = 'Snåsa';
        $this->_kommuner[] = 'Sogndal';
        $this->_kommuner[] = 'Sokndal';
        $this->_kommuner[] = 'Sola';
        $this->_kommuner[] = 'Solund';
        $this->_kommuner[] = 'Songdalen';
        $this->_kommuner[] = 'Sortland';
        $this->_kommuner[] = 'Spydeberg';
        $this->_kommuner[] = 'Stange';
        $this->_kommuner[] = 'Stavanger';
        $this->_kommuner[] = 'Steigen';
        $this->_kommuner[] = 'Steinkjer';
        $this->_kommuner[] = 'Stjørdal';
        $this->_kommuner[] = 'Stokke';
        $this->_kommuner[] = 'Stor-Elvdal';
        $this->_kommuner[] = 'Stord';
        $this->_kommuner[] = 'Stordal';
        $this->_kommuner[] = 'Storfjord';
        $this->_kommuner[] = 'Strand';
        $this->_kommuner[] = 'Stranda';
        $this->_kommuner[] = 'Stryn';
        $this->_kommuner[] = 'Sula';
        $this->_kommuner[] = 'Suldal';
        $this->_kommuner[] = 'Sund';
        $this->_kommuner[] = 'Sunndal';
        $this->_kommuner[] = 'Surnadal';
        $this->_kommuner[] = 'Sveio';
        $this->_kommuner[] = 'Svelvik';
        $this->_kommuner[] = 'Sykkylven';
        $this->_kommuner[] = 'Søgne';
        $this->_kommuner[] = 'Sømna';
        $this->_kommuner[] = 'Søndre Land';
        $this->_kommuner[] = 'Sør-Aurdal';
        $this->_kommuner[] = 'Sør-Fron';
        $this->_kommuner[] = 'Sør-Odal';
        $this->_kommuner[] = 'Sør-Varanger';
        $this->_kommuner[] = 'Sørfold';
        $this->_kommuner[] = 'Sørreisa';
        $this->_kommuner[] = 'Sørum';
        $this->_kommuner[] = 'Time';
        $this->_kommuner[] = 'Tingvoll';
        $this->_kommuner[] = 'Tinn';
        $this->_kommuner[] = 'Tjeldsund';
        $this->_kommuner[] = 'Tjøme';
        $this->_kommuner[] = 'Tokke';
        $this->_kommuner[] = 'Tolga';
        $this->_kommuner[] = 'Torsken';
        $this->_kommuner[] = 'Tranøy';
        $this->_kommuner[] = 'Tromsø';
        $this->_kommuner[] = 'Trondheim';
        $this->_kommuner[] = 'Trysil';
        $this->_kommuner[] = 'Træna';
        $this->_kommuner[] = 'Trøgstad';
        $this->_kommuner[] = 'Tustna';
        $this->_kommuner[] = 'Tvedestrand';
        $this->_kommuner[] = 'Tydal';
        $this->_kommuner[] = 'Tynset';
        $this->_kommuner[] = 'Tysfjord';
        $this->_kommuner[] = 'Tysnes';
        $this->_kommuner[] = 'Tysvær';
        $this->_kommuner[] = 'Tønsberg';
        $this->_kommuner[] = 'Ullensaker';
        $this->_kommuner[] = 'Ullensvang';
        $this->_kommuner[] = 'Ulstein';
        $this->_kommuner[] = 'Ulvik';
        $this->_kommuner[] = 'Unjarga-Nesseby';
        $this->_kommuner[] = 'Utsira';
        $this->_kommuner[] = 'Vadsø';
        $this->_kommuner[] = 'Vaksdal';
        $this->_kommuner[] = 'Valle';
        $this->_kommuner[] = 'Vang';
        $this->_kommuner[] = 'Vanylven';
        $this->_kommuner[] = 'Vardø';
        $this->_kommuner[] = 'Vefsn';
        $this->_kommuner[] = 'Vega';
        $this->_kommuner[] = 'Vegårshei';
        $this->_kommuner[] = 'Vennesla';
        $this->_kommuner[] = 'Verdal';
        $this->_kommuner[] = 'Verran';
        $this->_kommuner[] = 'Vestby';
        $this->_kommuner[] = 'Vestnes';
        $this->_kommuner[] = 'Vestre Slidre';
        $this->_kommuner[] = 'Vestre Toten';
        $this->_kommuner[] = 'Vestvågøy';
        $this->_kommuner[] = 'Vevelstad';
        $this->_kommuner[] = 'Vik';
        $this->_kommuner[] = 'Vikna';
        $this->_kommuner[] = 'Vindafjord';
        $this->_kommuner[] = 'Vinje';
        $this->_kommuner[] = 'Volda';
        $this->_kommuner[] = 'Voss';
        $this->_kommuner[] = 'Vågan';
        $this->_kommuner[] = 'Vågsøy';
        $this->_kommuner[] = 'Vågå';
        $this->_kommuner[] = 'Våler';
        $this->_kommuner[] = 'Våler';
        $this->_kommuner[] = 'Værøy';
        $this->_kommuner[] = 'Åfjord';
        $this->_kommuner[] = 'Ål';
        $this->_kommuner[] = 'Ålesund';
        $this->_kommuner[] = 'Åmli';
        $this->_kommuner[] = 'Åmot';
        $this->_kommuner[] = 'Årdal';
        $this->_kommuner[] = 'Ås';
        $this->_kommuner[] = 'Åseral';
        $this->_kommuner[] = 'Åsnes';
        $this->_kommuner[] = 'Øksnes';
        $this->_kommuner[] = 'Ølen';
        $this->_kommuner[] = 'Ørland';
        $this->_kommuner[] = 'Ørskog';
        $this->_kommuner[] = 'Ørsta';
        $this->_kommuner[] = 'Østre Toten';
        $this->_kommuner[] = 'Øvre Eiker';
        $this->_kommuner[] = 'Øyer';
        $this->_kommuner[] = 'Øygarden';
        $this->_kommuner[] = 'Øystre Slidre';
    }

    /**
    * Produces the HTML for the dropdown
    *
    * @param string $name            The name="" attribute
    * @param string $selectedOption  The option to be selected by default.
    *                                Must match the kommune name exactly,
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
        $promoText = 'Velg en kommune',
        $extraAttributes = ''
    ) {
        $options[]      = sprintf('<option value="">%s</option>', $promoText);
        $selectedOption = strtolower($selectedOption);

        foreach ($this->_kommuner as $kommune) {
            $kommune_lc  = strtolower($kommune);
            $selected  = $selectedOption == $kommune_lc ?
                ' selected="selected"' : '';
            $options[] = '<option value="' . $kommune_lc . '"' . $selected .
                         '>' . ucfirst($kommune) . '</option>';
        }

        return sprintf(
            '<select name="%s" %s>%s</select>',
            $name,
            $extraAttributes,
            implode("\r\n", $options)
        );
    }

    /**
    * Returns an array with all kommuner
    *
    * @return array                   The array containing all kommune data
    * @access public
    */
    function getList()
    {
        return $this->_kommuner;
    }
}

?>
