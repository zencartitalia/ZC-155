<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 2016-06-03 10:51 Author: Sandro Modified in v1.5.5a
 */

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Password dimenticata');

define('HEADING_TITLE', 'Hai dimenticato la Password ?');

define('TEXT_MAIN', 'Poco male! Inserisci l\'indirizzo e-mail utilizzato in fase di registrazione e provvederemo ad inviare a quell\'indirizzo un messaggio con una nuova password che potrai poi cambiare nel pannello del tuo Account.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nuova Password');
define('EMAIL_PASSWORD_REMINDER_BODY', 'E\' stata chiesta una nuova Password da ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'La tua nuova Password per \'' . STORE_NAME . '\' è:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Attenzione, istruzioni per la nuova password viene inviata all\'indirizzo e-mail solo se presente nel nostro archivio clienti.');


