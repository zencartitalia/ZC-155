<?php
/**
 * fiscal language extras - used for additional fiscal fields
 *
 * @package languageDefines
 * Mod by Paolo De Dionigi aka spike00 www.atfriends.net for additional VAT & Fiscal code fields
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: fiscal_def.php 2007-02-07 22:49:50Z spike00 $
 */

define('CATEGORY_FISCAL', 'Informazioni fiscali');

define('ENTRY_VAT', 'Partita IVA:');
define('ENTRY_VAT_ERROR', 'La partita IVA deve contenere almeno ' . ENTRY_VAT_MIN_LENGTH . ' caratteri.');

define('ENTRY_VAT_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

define('ENTRY_CF', 'Codice fiscale:');
define('ENTRY_CF_ERROR', 'Il codice fiscale deve contenere almeno ' . ENTRY_CF_MIN_LENGTH . ' caratteri.');

define('ENTRY_CF_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

define('CATEGORY_FATTURAZIONE_ELETTRONICA', 'Informazioni per fattura elettronica');

define('ENTRY_CODICE_UNIVOCO', 'Codice univoco (inserire 0000000 se non in possesso):');
define('ENTRY_CODICE_UNIVOCO_ERROR', 'Il codice univoco è composto da ' . ENTRY_CODICE_UNIVOCOMIN_LENGTH . ' caratteri.');

define('ENTRY_CODICE_UNIVOCO_TEXT', '*'); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

define('ENTRY_PEC', 'PEC:');
define('ENTRY_CF_ERROR', 'L\'indirizzo PEC deve contenere almeno ' . ENTRY_PEC_MIN_LENGTH . ' caratteri.');

define('ENTRY_PEC_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

