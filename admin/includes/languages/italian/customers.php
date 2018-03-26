<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z sandrocarniel Modificato in v 1.5.5 $
 */

define('HEADING_TITLE', 'Clienti');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Nome');
define('TABLE_HEADING_LASTNAME', 'Cognome');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Account Creato');
define('TABLE_HEADING_LOGIN', 'Ultimo Accesso');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_PRICING_GROUP', 'Gruppo Prezzo');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizzato');
define('TABLE_HEADING_GV_AMOUNT', 'Credito Buoni Sconto / Regalo');

define('TEXT_DATE_ACCOUNT_CREATED', 'Account Creato:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Ultima Modifica:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Ultimo Accesso:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Numero degli Accessi:');
define('TEXT_INFO_COUNTRY', 'Paese:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Numero Recensioni:');
define('TEXT_DELETE_INTRO', 'Davvero vuoi cancellare questo Cliente?');
define('TEXT_DELETE_REVIEWS', 'Cancella %s recensioni');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Cancella Cliente');
define('TYPE_BELOW', 'Type below');
define('PLEASE_SELECT', 'Seleziona');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Numero Ordini:');
define('TEXT_INFO_LAST_ORDER','Ultimo Ordine:');
define('TEXT_INFO_ORDERS_TOTAL', 'Totale:');
define('CUSTOMERS_REFERRAL', 'Segnalazione Cliente<br />1mo Buono Sconto');
define('TEXT_INFO_GV_AMOUNT', 'Credito B. Sconto / Regalo');

define('ENTRY_NONE', 'Nessuno');

define('TABLE_HEADING_COMPANY','Azienda');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Resetta Password Cliente');
define('TEXT_PWDRESET_INTRO', 'Per resettare la password di questo cliente, digita una nuova password e confermala. La nuova password deve rispettare le normali regole per le password dei clienti.');
define('TEXT_CUST_NEW_PASSWORD', 'Nuova Password:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Conferma Password:');
define('ERROR_PWD_TOO_SHORT', 'Errore: la password scelta è più corta di quanto stabilito per questo sito.');
define('SUCCESS_PASSWORD_UPDATED', 'Password aggiornata.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'La tua password è stata aggiornata dal gestore del negozio. La nuova password è: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Reset password account');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Hai resettato la passowrd di un cliente: ' . "\n" . '%s' . "\n\n" . 'ID Amministratore: %s');


define('CUSTOMERS_AUTHORIZATION', 'Stato Autorizzazione Clienti');
define('CUSTOMERS_AUTHORIZATION_0', 'Approvato');
define('CUSTOMERS_AUTHORIZATION_1', 'In attesa di ok - Deve essere autorizzato a navigare');
define('CUSTOMERS_AUTHORIZATION_2', 'In attesa di ok - Naviga ma senza i prezzi');
define('CUSTOMERS_AUTHORIZATION_3', 'In attesa di ok - Vede i prezzi ma non acquista');
define('CUSTOMERS_AUTHORIZATION_4', 'Bannato - Nessun permesso di accesso o acquisto');

define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Attenzione: shop settato per Autorizzazione senza navigazione. 
Il cliente &egrave; in attesa dell\'Autorizzazione alla navigazione del negozio.');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Attenzione: Attenzione: shop settato per Autorizzazione con navigazione ma senza prezzi a vista. Il cliente &egrave; in attesa dell\'Autorizzazione per poter vedre i prezzi.');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Il tuo stato cliente è stato aggiornato. Grazie per averci scelto..');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Stato Cliente Aggiornato');

define('ADDRESS_BOOK_TITLE', 'Voci Elenco indirizzi');
define('PRIMARY_ADDRESS', '(indirizzo primario)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> &egrave; permesso un massimo di %s indirizzi.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 di  ');
