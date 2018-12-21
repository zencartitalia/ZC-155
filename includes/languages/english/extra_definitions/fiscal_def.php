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

define('CATEGORY_FISCAL', 'Fiscal data');

define('ENTRY_VAT', 'VAT Code:');
define('ENTRY_VAT_ERROR', 'The field \'VAT Code\' requires at least ' . ENTRY_VAT_MIN_LENGTH . ' characters.');

define('ENTRY_VAT_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

define('ENTRY_CF', 'TAX Code:');
define('ENTRY_CF_ERROR', 'The field \'TAX Code\' requires at least ' . ENTRY_CF_MIN_LENGTH . ' characters..');

define('ENTRY_CF_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

define('CATEGORY_FATTURAZIONE_ELETTRONICA', 'Informazioni per fattura elettronica');

define('ENTRY_CODICE_UNIVOCO', 'Codice univoco:'); /* (inserire 0000000 se non in possesso)  */
define('ENTRY_CODICE_UNIVOCO_ERROR', 'Il codice univoco è composto da ' . ENTRY_CODICE_UNIVOCOMIN_LENGTH . ' caratteri.');
define('ENTRY_CODICE_UNIVOCO_TEXT', 'ATTENZIONE! Inserire 0000000 se non in possesso');

define('ENTRY_PEC', 'PEC:');
define('ENTRY_CF_ERROR', 'L\'indirizzo PEC deve contenere almeno ' . ENTRY_PEC_MIN_LENGTH . ' caratteri.');
define('ENTRY_PEC_TEXT', ''); // NON obbligatorio - inserire * per visualizzarlo come campo obbligatorio

