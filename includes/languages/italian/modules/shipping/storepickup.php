<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Feb 14 23:03:50 2013 -0500 Modified in v1.5.2 LaVale $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Ritiro in Negozio');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Nessuna spedizione: ritira merce il Cliente in negozio');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Nessuna spedizione: ritira la merce il Cliente');

// La riga che segue � per definire pi� sedi/metodi in base all'idioma. Viene utilizzato solo se il cliente ha selezionato una lingua diversa da quella predefinita del negozio.
// Il contenuto della define MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS dovrebbe essere lo stesso delle varie localit� inserite nelle impostazioni del modulo di spedizione da admin, ma con i nomi modificati.
// Formati accettati sono:
// "Localit� Uno, 5.00; Localit� Due, 3.50; Localit� Tre, 0.00"
// "Localit� Uno, Localit� Due, Localit� Tre"
// oppure lasciare vuoto se si vuole utilizzare lo stesso testo definito in Admin, indipendentemente dall'idioma.
// SUGGERIMENTO: Questa define in realt� dovrebbe essere lasciato vuoto per la lingua predefinita, altrimenti il settaggio in Admin non verr� mai usato.

define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', "");
