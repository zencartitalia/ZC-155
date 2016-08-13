<?php
/**
* Main English language file for installer
* @package Installer
* @copyright Copyright 2003-2016 Zen Cart Development Team
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: Author: DrByte Tue Feb 16 15:03:47 2016 -0500 New in v1.5.5 $
*/
/**
* definizione di lingua della pagina - Sandro Carniel: 12.05.2016
*/
define('META_TAG_TITLE', 'Zen Cart® Installer');
define('HTML_PARAMS','dir="ltr" lang="it"');
define('ZC_VERSION_STRING', '%s v%s');
define('TEXT_PAGE_HEADING_INDEX', 'Ispezione Sistema');
define('TEXT_INDEX_FATAL_ERRORS', 'Alcuni problemi devono essere risolti prima di continuare');
define('TEXT_INDEX_WARN_ERRORS', 'Alcuni altri problemi');
define('TEXT_HEADER_MAIN', 'SUGGERIMENTO: I titoli dei campi sono link di aiuto cliccabili e spiegano il significato ogni campo.');
define('TEXT_INDEX_HEADER_MAIN', 'SUGGERIMENTO: Per alcuni errori e avvisi sottostanti, ulteriori informazioni sono disponibili cliccando il titolo errore / avviso.');
define('TEXT_INSTALLER_CHOOSE_LANGUAGE', 'Scegli lingua');
define('TEXT_HELP_CONTENT_CHOOSE_LANG', 'Zen Cart® è multilingue, supporta tante lingue quanti sono i pacchetti di lingua disponibili È sufficiente installare il pacchetto di lingua necessaria e l\'intero negozio potrà operare in più lingue, iniziando dal programma di installazione');

define('TEXT_PAGE_HEADING_SYSTEM_SETUP', 'Setup Sistema');
define('TEXT_SYSTEM_SETUP_ADMIN_SETTINGS', 'Settaggi Amministrazione');
define('TEXT_SYSTEM_SETUP_CATALOG_SETTINGS', 'Settaggi Catalogo (parte pubblica)');
define('TEXT_SYSTEM_SETUP_ADMIN_SERVER_DOMAIN', 'Dominio Server Amministrazione');
define('TEXT_SYSTEM_SETUP_ADMIN_SERVER_URL', 'Domino Server Amministrazione');
define('TEXT_SYSTEM_SETUP_ADMIN_PHYSICAL_PATH', 'Percorso fisico Amministrazione');
define('TEXT_SYSTEM_SETUP_CATALOG_ENABLE_SSL', 'Attiva SSL per la parte pubblica?');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTP_SERVER_DOMAIN', 'Domino HTTP della parte pubblica');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTP_URL', 'URL HTTPS della parte pubblica');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTPS_SERVER_DOMAIN', 'Domino HTTPS della parte pubblica');
define('TEXT_SYSTEM_SETUP_CATALOG_HTTPS_URL', 'URL HTTPS della parte pubblica');
define('TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH', 'Percorso fisico parte pubblica');
define('TEXT_SYSTEM_SETUP_AGREE_LICENSE', 'Accetto i termini della licenza: ');
define('TEXT_SYSTEM_SETUP_CLICK_TO_AGREE_LICENSE', '(Spunta il box per accettare i termini della licenza GPL 2. Clicca il titolo nella colonna di sinistra per leggere la licenza.)');
define('TEXT_SYSTEM_SETUP_ERROR_DIALOG_TITLE', 'Vi sono dei problemi');
define('TEXT_SYSTEM_SETUP_ERROR_DIALOG_CONTINUE', 'Continua comunque');
define('TEXT_SYSTEM_SETUP_ERROR_CATALOG_PHYSICAL_PATH', 'Pare vi sia un problema con il ' . TEXT_SYSTEM_SETUP_CATALOG_PHYSICAL_PATH);


define('TEXT_PAGE_HEADING_DATABASE', 'Database Setup');
define('TEXT_DATABASE_HEADER_MAIN', 'NOTE: NOTA: È necessario creare il database ed il corrispondente utente database MySQL e concedere le autorizzazioni per l\'utente, prima di procedere in questa pagina. Clicca il titolo nella colonna di sinistra per una spiegazione di ogni singola voce supporto.');
define('TEXT_DATABASE_SETUP_SETTINGS', 'Basic Settaggi');
define('TEXT_DATABASE_SETUP_DB_HOST', 'Database Host: ');
define('TEXT_DATABASE_SETUP_DB_USER', 'Database Utente: ');
define('TEXT_DATABASE_SETUP_DB_PASSWORD', 'Database Password: ');
define('TEXT_DATABASE_SETUP_DB_NAME', 'Database Nome: ');
define('TEXT_DATABASE_SETUP_DEMO_SETTINGS', 'Dati di Demo');
define('TEXT_DATABASE_SETUP_LOAD_DEMO', 'Carica i dati di Demo');
define('TEXT_DATABASE_SETUP_LOAD_DEMO_DESCRIPTION', 'Vuoi caricare i dati di Demo nel database?');
define('TEXT_DATABASE_SETUP_ADVANCED_SETTINGS', 'Settaggi avanzati');
define('TEXT_DATABASE_SETUP_DB_CHARSET', 'Set Caratteri / Collation database: ');
define('TEXT_DATABASE_SETUP_DB_PREFIX', 'Prefisso tabelle database: ');
define('TEXT_DATABASE_SETUP_SQL_CACHE_METHOD', 'Tipo di cache SQL: ');
define('TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS1', '<p>Si sono verificati degli errori nell\'esecuzione del file SQL di installazione');
define('TEXT_DATABASE_SETUP_JSCRIPT_SQL_ERRORS2', '<br>Si prega di consultare i log di errore per i dettagli<p>');
define('TEXT_DATABASE_SETUP_CHARSET_OPTION_UTF8', 'UTF8 (settaggio di default)');
define('TEXT_DATABASE_SETUP_CHARSET_OPTION_LATIN1', 'Latin1');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_NONE', 'No SQL Caching');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_DATABASE', 'Database');
define('TEXT_DATABASE_SETUP_CACHE_TYPE_OPTION_FILE', 'File');
define('TEXT_EXAMPLE_DB_HOST', "generalmente 'localhost'");
define('TEXT_EXAMPLE_DB_USER', 'scrivi il nome utente MySQL');
define('TEXT_EXAMPLE_DB_PWD', 'scrivi la password utente MySQL');
define('TEXT_EXAMPLE_DB_PREFIX', "generalmente meglio lasciare vuoto, o usa zen_");
define('TEXT_EXAMPLE_DB_NAME', 'scrivi il nome database MySQL');
define('TEXT_EXAMPLE_CACHEDIR', 'generalmente si indirizza alla cartella /your/user/home/public_html/zencart/cache');

define('TEXT_DATABASE_SETUP_CONNECTION_ERROR_DIALOG_TITLE', 'Vi sono dei problemi');
define('TEXT_CREATING_DATABASE', 'Creazione Database');
define('TEXT_LOADING_CHARSET_SPECIFIC', 'Caricare uno specifico Set di caratteri');
define('TEXT_LOADING_DEMO_DATA', 'Caricare i dati di demo');
define('TEXT_LOADING_PLUGIN_DATA', 'Caricare SQL per i Plugins presto installati');

define('TEXT_COULD_NOT_UPDATE_BECAUSE_ANOTHER_VERSION_REQUIRED', 'Impossibile aggiornare alla versione %s. Rilevata la presenza della v%s, questo implica di effettuare un aggiornamento alla versione %s prima di tutto.');

define('TEXT_PAGE_HEADING_ADMIN_SETUP', ' Setup Amministrazione');
define('TEXT_ADMIN_SETUP_USER_SETTINGS', 'Settaggio Utente Amministratore');
define('TEXT_ADMIN_SETUP_USER_NAME', 'Nome Utente Amministratore: ');
define('TEXT_EXAMPLE_USERNAME', 'es: mario');
define('TEXT_ADMIN_SETUP_USER_EMAIL', 'Email Utente Amministratore: ');
define('TEXT_EXAMPLE_EMAIL', 'es: tua_email@tuodominio.com');
define('TEXT_ADMIN_SETUP_USER_EMAIL_REPEAT', '        Ridigita email: ');
define('TEXT_ADMIN_SETUP_USER_PASSWORD', 'Password Amministratore: ');
define('TEXT_ADMIN_SETUP_USER_PASSWORD_HELP', '<strong>STAI ATTENTO!!!</strong>: Questa sotto è la password temporanea per l\'Admin - Superuser. Assicurati di prenderne nota.');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY', 'Indirizzo Amministrazione: ');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_DEFAULT', 'Non è possibile modificare l\'indirizzo del pannello di amministrazione in automatico. Ti sarà necessario modificarlo prima di poter accedere nel pannello di amministrazione.');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_NOT_ADMIN_CHANGED', 'Non abbiamo cambiato l\'indirizzo del pannello di amministrazione automaticamente ma sembra già sia stato modificato il valore predefinito.');
define('TEXT_ADMIN_SETUP_ADMIN_DIRECTORY_HELP_CHANGED', 'L\'indirizzo del pannello di amministrazione dovrebbe essere stato automaticamente rinominato. Assicurati di prendere nota dell\'indirizzo sottostante.');
define('TEXT_ADMIN_SETUP_NEWSLETTER_SETTINGS', 'Newsletter');
define('TEXT_ADMIN_SETUP_NEWSLETTER_EMAIL', 'Email Newsletter: ');
define('TEXT_ADMIN_SETUP_NEWSLETTER_OPTIN', 'Opt In: ');
//define('TEXT_MAIN_ADMIN_SETUP', '');


define('TEXT_PAGE_HEADING_COMPLETION', 'Set-up Terminato');
define('TEXT_COMPLETION_HEADER_MAIN', '');
define('TEXT_COMPLETION_INSTALL_COMPLETE', 'L\'installazione è completata.');
define('TEXT_COMPLETION_INSTALL_LINKS_BELOW', 'È possibile accedere al tuo store e all\'area di amministrazione usando i link qui sotto.');
define('TEXT_COMPLETION_UPGRADE_COMPLETE', 'Congratulazioni, l\'aggiornamento è ora completo.');
define('TEXT_COMPLETION_ADMIN_DIRECTORY_WARNING', 'Non è possibile modificare l\'indirizzo del pannello di amministrazione in automatico. Ti sarà necessario modificarlo prima di poter accedere nel pannello di amministrazione.');
define('TEXT_COMPLETION_INSTALLATION_DIRECTORY_WARNING', "È necessario rimuovere subito la cartella /zc_install/ in modo che nessuno possa re-installare nuovamente e danneggiare il database!<br />Inoltre verrà visualizzato un messaggio e non sarai in grado di accedere all'amministrazione sino a quando la cartella non sia stata rimossa!");

define('TEXT_COMPLETION_CATALOG_LINK_TEXT', 'Il tuo store');
define('TEXT_COMPLETION_ADMIN_LINK_TEXT', 'La tua amministrazione');

define('TEXT_PAGE_HEADING_DATABASE_UPGRADE', 'Aggiornamento Database');
define('TEXT_DATABASE_UPGRADE_HEADER_MAIN', '');
define('TEXT_DATABASE_UPGRADE_STEPS_DETECTED', 'Il seguente elenco mostra i vari passaggi di aggiornamento rilevati e necessari per il database.');
define('TEXT_DATABASE_UPGRADE_LEGEND_UPGRADE_STEPS', 'Si prega di confermare la procedura di aggiornamento desiderata');
define('TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS', 'Credenziali di amministratore (SuperUser)');
define('TEXT_VALIDATION_ADMIN_CREDENTIALS', 'Per autorizzare l\'aggiornamento del database, è necessario immettere username e password di un amministratore che abbia le autorizzazioni di SuperUser.');
define('TEXT_HELP_TITLE_UPGRADEADMINNAME', TEXT_DATABASE_UPGRADE_ADMIN_CREDENTIALS);
define('TEXT_HELP_CONTENT_UPGRADEADMINNAME', 'Per autorizzare l\'aggiornamento del database, è necessario immettere username e password di un amministratore che sia SuperUser (vale a dire: senza restrizioni) del tuo store. <br>Questo deve essere username e password utilizzato per il login all\'area di amministrazione. <br>(Non è la password FTP e non è la tua password del pannello del server del hosting. Nessuno conosce questa password tranne tu o il tuo webmaster e non si può non richiedere al vostra fornitore di hosting.) <br>Se foste rimasti bloccati fuori dal pannello di amministrazione, senza alcuna password di amministratore valida e senza riuscire ad accedere, allora si può effettuare una brutale reimpostazione della password seguendo le istruzioni riportate in questo articolo: <a href="http://www.zen-cart.com/content.php?44-how-do-i-change-or-reset-my-admin-password" target="_blank">http://www.zen-cart.com/content.php?44-how-do-i-change-or-reset-my-admin-password</a>.');
define('TEXT_DATABASE_UPGRADE_ADMIN_USER', 'Nome Utente');
define('TEXT_DATABASE_UPGRADE_ADMIN_PASSWORD', 'Password');
define('TEXT_HELP_TITLE_UPGRADEADMINPWD', 'Password amministratore per aggiornare');
define('TEXT_HELP_CONTENT_UPGRADEADMINPWD', TEXT_HELP_CONTENT_UPGRADEADMINNAME);
define('TEXT_VALIDATION_ADMIN_PASSWORD', 'Una password verificata è richiesta');
define('TEXT_ERROR_ADMIN_CREDENTIALS', 'Impossibile verificare le credenziali di Amministratore fornite.<br><br>' . TEXT_HELP_CONTENT_UPGRADEADMINNAME);
define('TEXT_UPGRADE_IN_PROGRESS', 'Aggiornamento in esecuzione. Lo stato di avanzamento ad ogni passo è indicato di seguito...');
define('TEXT_UPGRADE_TO_VER_X_COMPLETED', 'Aggiornamento alla versione %s completato.');
define('TEXT_NO_REMAINING_UPGRADE_STEPS', 'Tutto ok! Pare proprio non siano necessari ulteriori passaggi di aggiornamento.');

define ('TEXT_CONTINUE', 'Continua');
define ('TEXT_CANCEL', 'Abbandona');
define ('TEXT_CONTINUE_FIX', 'Ritorna e Risolvi');
define ('TEXT_REFRESH', 'Aggiorna');
define ('TEXT_UPGRADE', 'Aggiorna...');
define ('TEXT_CLEAN_INSTALL', 'Installazione pulita');
define ('TEXT_UPDATE_CONFIGURE', 'Aggiorna file di configurazione');

define('TEXT_NAVBAR_SYSTEM_INSPECTION', 'Ispezione Sistema');
define('TEXT_NAVBAR_SYSTEM_SETUP', 'Set-up Sistema');
define('TEXT_NAVBAR_DATABASE_UPGRADE', 'Aggiornamento Database');
define('TEXT_NAVBAR_DATABASE_SETUP', 'Set-up Database');
define('TEXT_NAVBAR_ADMIN_SETUP', 'Set-up Amministrazione');
define('TEXT_NAVBAR_COMPLETION', 'Completato');
define('TEXT_NAVBAR_PAYMENT_PROVIDERS', 'Sistemi di pagamento');

define('TEXT_ERROR_PROBLEMS_WRITING_CONFIGUREPHP_FILES', 'Ci sono stati problemi nel predisporre e memorizzare i file configure.php. L\'INSTALLAZIONE NON È STATA CORRETTAMENTE COMPLETATA.<br>Ulteriori dettagli tecnici possono essere trovati nella cartella /logs/.');
define('TEXT_ERROR_COULD_NOT_READ_CFGFILE_TEMPLATE', 'Non si riesce a leggere il layout del file master di configurazione: %s. Si prega verificare che il file esista e sia leggibile.');
define('TEXT_ERROR_COULD_NOT_WRITE_CONFIGFILE', 'Non si riesce a scrivere il file di configurazione: %s. Si prega verificare che il file esista e sia scrivibile.');

define('TEXT_ERROR_STORE_CONFIGURE', "Il file principale  /includes/configure.php non esiste (non è leggibile) o non ha i permessi di scrittura");
define('TEXT_ERROR_ADMIN_CONFIGURE', "Il file di amministrazione /admin/includes/configure.php non esiste (non è leggibile) o non ha i permessi di scrittura");
define('TEXT_ERROR_PHP_VERSION', str_replace(array("\n", "\r"), '', 'Versione PHP non corretta.
<p>La versione PHP utilizzata (' . PHP_VERSION . ') è obsoleta, e questa versione di Zen Cart® non può essere installata nel server con questa configurazione.</p>
<p>Questa versione di Zen Cart® è compatibile con versioni PHP dalla 5.2.9 alla 7.0.<br>
Verifica nel sito <a href="www.zen-cart.it">www.zen-cart.it</a> per l\'ultima versione di Zen Cart®.</p>
'));
define('TEXT_ERROR_PHP_VERSION_RECOMMENDED', 'Per la compatibilità e la massima sicurezza si deve usare PHP %s o superiore. Si può procedere all\'installazione, ma è importante sapere che il sito non sarà PCI Compliant per l\'utilizzo di  un software datato.');
define('TEXT_ERROR_PHP_VERSION_MIN', 'La versione PHP dovrebbe essere maggiore a %s');
define('TEXT_ERROR_PHP_VERSION_MAX', 'La versione PHP dovrebbe essere inferiore a %s');
define('TEXT_ERROR_MYSQL_SUPPORT', 'Problemi con MySQL (mysqli). Sembra che il tuo server non abbia l\'estensione di mysqli per PHP. Senza di essa non ci possiamo collegare al db. Per le versioni precedenti a PHP 5.5, talvolta doveva essere aggiunta manualmente dall\'amministratore del server. Contatta il tuo fornitore di hosting per avere assistenza.');
define('TEXT_ERROR_LOG_FOLDER', DIR_FS_LOGS . ' cartella senza permessi di scrittura');
define('TEXT_ERROR_CACHE_FOLDER', DIR_FS_SQL_CACHE . ' cartella senza permessi di scrittura');
define('TEXT_ERROR_IMAGES_FOLDER', '/images/ cartella senza permessi di scrittura');
define('TEXT_ERROR_DEFINEPAGES_FOLDER', '/includes/languages/english/html_includes/ cartella senza permessi di scrittura');
define('TEXT_ERROR_MEDIA_FOLDER', '/media/ cartella senza permessi di scrittura');
define('TEXT_ERROR_PUB_FOLDER', DIR_FS_DOWNLOAD_PUBLIC . ' cartella senza permessi di scrittura');

define('TEXT_ERROR_CONFIGURE_REQUIRES_UPDATE', 'Il file configure.php è di una vecchia versione e richiede l\'aggiornamento prima di poter continuare.');
define('TEXT_ERROR_HTACCESS_SUPPORT', 'Problemi con il file .htaccess (non è correttamente settato per negare l\'accesso ai file che dovrebbero essere nascosti).');
define('TEXT_ERROR_SESSION_SUPPORT', 'Problemi con il gestore di sessione');
define('TEXT_ERROR_SESSION_SUPPORT_USE_TRANS_SID', 'ini settaggio session.use_trans_sid è abilitato');
define('TEXT_ERROR_SESSION_SUPPORT_AUTO_START', 'ini settaggio session.auto_start è abilitato');
define('TEXT_ERROR_DB_CONNECTION', 'Problemi di connessione al Database');
define('TEXT_ERROR_DB_CONNECTION_DEFAULT', 'Possibili problemi di connessione al database');
define('TEXT_ERROR_DB_CONNECTION_UPGRADE', 'Problemi di connessione al database in relazione ai dati presenti nel file configure.php');
define('TEXT_ERROR_SET_TIME_LIMIT', 'max_execution_time è disabilitato');
define('TEXT_ERROR_GD', 'GD Extension è disabilitato');
define('TEXT_ERROR_ZLIB', 'Zlib Extension è disabilitato');
define('TEXT_ERROR_OPENSSL', 'Openssl Extension è disabilitato');
define('TEXT_ERROR_CURL', 'Problemi con le estensioni CURL - PHP indica che CURL non è presente');
define('TEXT_ERROR_UPLOADS', 'Upload Extension per PHP è disabilitato');
define('TEXT_ERROR_XML', 'XML Extension in PHP è disabilitato');
define('TEXT_ERROR_GZIP', 'Gzip Extension in PHP è disabilitato');
define('TEXT_ERROR_EXTENSION_NOT_LOADED', '%s extension sembrerebbe non venga correttamente caricato');
define('TEXT_ERROR_FUNCTION_DOES_NOT_EXIST', 'La funzione PHP %s non esiste');
define('TEXT_ERROR_CURL_LIVE_TEST', 'Non mi è possibile utilizzare il CURL per collegarmi ad un server');
define('TEXT_ERROR_HTTPS', 'PRO TIP: Se possibile si dovrebbe avere già installato un certificato SSL ed eseguire il programma di installazione utilizzando https://');
define('TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE', 'È stato trovato un precedente file configure.php.  Il programma di installazione tenterà di aggiornare la struttura del database scegliendo "Aggiorna..." qui sotto.');
define('TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE_NO_UPDATE', 'È stato trovato un precedente file configure.php. Tuttavia il database sembra essere attuale. Ciò suggerisce che sei su di uno store attivo. Procedere con l\'installazione cancellerà l\'attuale contenuto del database! Sei sicuro di voler installare?');
define('TEXT_ERROR_MULTIPLE_ADMINS_NONE_SELECTED', 'Sembra che esistano più admin directory. Rimuovi le vecchie admin directory e fare clic su Aggiorna oppure seleziona la directory di amministrazione corretta qui sotto e poi fai clic su Aggiorna.');
define('TEXT_ERROR_MULTIPLE_ADMINS_SELECTED', 'Sembra che esistano più admin directory.  Se la directory selezionata qui sotto è errata, si prega di selezionare quella corretta e fare clic su Aggiorna.');
define('TEXT_ERROR_SUCCESS_NO_ERRORS', 'Nessun errore o avviso rilevato nel tuo sistema. È possibile continuare con l\'installazione.
.');

define('TEXT_FORM_VALIDATION_REQUIRED', 'Richiesto');
define('TEXT_FORM_VALIDATION_AGREE_LICENSE', 'È necessario accettare i termini di licenza');
define('TEXT_FORM_VALIDATION_CATALOG_HTTPS_URL', 'Una URL è necessaria, anche se temporaneamente hai scelto di non abilitare SSL. Prova a utilizzare il tuo nome di dominio.');

define('TEXT_NAVBAR_INSTALLATION_INSTRUCTIONS', 'Istruzioni per l\'installazione');
define('TEXT_NAVBAR_FORUM_LINK', 'Forum');
define('TEXT_NAVBAR_WIKI_LINK', 'Wiki');

define('TEXT_HELP_TITLE_HTACCESSSUPPORT', '.htaccess supporto');
define('TEXT_HELP_CONTENT_HTACCESSSUPPORT', 'Sembra esserci un problema con la gestione del htaccess sul tuo server. <br><br>. Il file htaccess è utilizzato per fornire protezione ed impedire l\'accesso a determinate cartelle / file. <br><br>Possibili cause di questo problema sono: forse non si utilizza Apache come web server oppure la gestione htaccess è disattivata o non correttamente configurata oppure più probabilmente: i file .htaccess inclusi in Zen Cart (e nelle sue sotto cartelle) non sono stati caricati sul server. <br><br><strong>Attenzione! Qualsiasi file che inizia con un "." è di solito trattati come file "nascosto", quindi potrebbe essere che il tuo programma FTP non sia riuscito a caricare questi perchè hai la visualizzazione - trasferimento di file nascosti disattivata nelle sue impostazioni.</strong> <br><br>Questo messaggio appare dopo che zc_install ha tentato di accedere ai file sul server e normalmente dovrebbe essere bloccato dalle regole di sicurezza nei file .htaccess presenti. <br> <br>Si può procedere con l\'installazione nonostante questa contesto, ma almeno si è stati avvisati che il sito è meno sicuro di quanto dovrebbe essere. Il fornitore di hosting dovrebbe essere in grado di aiutarvi con .htaccess e garantirme il supporto e l\'abilitazione nel tuo sito.');
define('TEXT_HELP_TITLE_FOLDERPERMS', 'Permessi cartelle');
define('TEXT_HELP_CONTENT_FOLDERPERMS', 'I permessi per questa cartella non sono impostati correttamente. Questa cartella deve essere scrivibile. È possibile trovare ulteriori informazioni sulle permessi cartella in <a href="http://www.zen-cart.com/content.php?51-how-do-i-set-permissions-on-files-folders" target="_blank">http://www.zen-cart.com/content.php?51-how-do-i-set-permissions-on-files-folders</a>');
define('TEXT_HELP_TITLE_CONNECTIONDATABASECHECK', 'Connessione iniziale al database');
define('TEXT_HELP_CONTENT_CONNECTIONDATABASECHECK', 'Prova di collegamento a MySQL utilizzando una connessione a localhost. Questo errore non indica necessariamente che il MySQL non funziona, alcuni host richiedono invece che "localhost" un nome di host o indirizzo IP per il database MySQL. <br><br>Se si utilizza correttamente localhost per il collegamento del database, è necessario controllare che MySQL sia correttamente in esecuzione.');
define('TEXT_HELP_TITLE_CHECKCURL', TEXT_ERROR_CURL);
define('TEXT_HELP_CONTENT_CHECKCURL', 'CURL è un processo in background utilizzato da (PHP in) il tuo negozio per connettersi a server esterni e servizi di pagamento e spedizione così da elaborare transazioni o ottenere preventivi di spedizione in tempo reale. Quando abbiamo provato la funzionalità CURL sul server siamo stati in grado di stabilire una connessione. Questo errore potrebbe indicare un problema con la configurazione del webserver. Si prega di contattare il fornitore di hosting per l\'assistenza o per abilitare il CURL sul server. <br><br>Se sei uno sviluppatore ed usi questo sistema su di un server di sviluppo offline non sorprenderti che il CURL non riesca a connettersi per il test. Il CURL non è necessario per scopi di sviluppo ad eccezione del testing di attività transazionali, momento in cui il collegamento online è richiesto!');
define('TEXT_HELP_TITLE_ADMINSERVERDOMAIN', 'Dominio server di amministrazione');
define('TEXT_HELP_CONTENT_ADMINSERVERDOMAIN', "Inserire il nome a dominio per accedere all\'area di amministrazione. Si consiglia di utilizzare HTTPS (SSL) per questo indirizzo. Consultare il fornitore di hosting sull'abilitazione di SSL del tuo sito.");
define('TEXT_HELP_TITLE_ENABLESSLCATALOG', 'Attivare SSL per il negozio?');
define('TEXT_HELP_CONTENT_ENABLESSLCATALOG', "Seleziona la casella di controllo se già disponi un certificato SSL sul tuo hosting così da utilizzarlo in Zen Cart® quando si visualizzano pagine sensibili come il mio Account, Checkout, Login, ecc.");
define('TEXT_HELP_TITLE_HTTPSERVERCATALOG', 'HTTP dominio del negozio');
define('TEXT_HELP_CONTENT_HTTPSERVERCATALOG', "Inserisci solo la URL dominio del tuo negozio. es: http://www.example.com");
define('TEXT_HELP_TITLE_HTTPURLCATALOG', 'HTTP URL del negozio');
define('TEXT_HELP_CONTENT_HTTPURLCATALOG', "Inserisci la URL completa al tuo negozio. es: http://www.example.com/zencart/");
define('TEXT_HELP_TITLE_HTTPSSERVERCATALOG', 'HTTPS dominio del negozio');
define('TEXT_HELP_CONTENT_HTTPSSERVERCATALOG', "Se si è selezionata la casella sopra per consentire l'utilizzo di SSL durante l'acquisto, è necessario immettere qui l'indirizzo completo di dominio dell'URL https al tuo negozio.<br>Generalmente si tratta di qualcosa come:<br>https://www.example.com<br>https://www.hostingcompany.com/~username<br>https://www.hostingcompany.com/~username/subdomain.com");
define('TEXT_HELP_TITLE_HTTPSURLCATALOG', 'HTTPS URL del negozio');
define('TEXT_HELP_CONTENT_HTTPSURLCATALOG', "Inserisci la https URL completa al tuo negozio. Generalmente si tratta del HTTPS di dominio, seguito dalla cartella dove fisicamente risiedono i file caricati di Zen Cart®. es: https://www.example.com/zencart");
define('TEXT_HELP_TITLE_PHYSICALPATH', 'Percorso fisico del negozio');
define('TEXT_HELP_CONTENT_PHYSICALPATH', "Questo è il percorso effettivo (secondo il filesystem del server) dove si trovano i file di Zen Cart®. Esempio tipico potrebbe essere '/users/home/public_html/zencart'. <br>È importante immettere il percorso completo corretto, altrimenti Zen Cart® non sarà in grado di trovare i suoi file per funzionare.");

define('TEXT_HELP_TITLE_DBHOST', 'Host del database');
define('TEXT_HELP_CONTENT_DBHOST', "Che cosa è l'host del database? L'host del database è l'indirizzo cui connettere il database e può essere sotto forma di un nome, ad esempio 'localhost' oppure 'db1.myserver.com', oppure come un indirizzo IP, ad esempio '192.168.0.1'. La maggior parte dei provider di hosting utilizzano 'localhost'. <br>Fare riferimento al proprio forinitore di hosting per sapere cosa usare, oppure queste informazioni vengono solitamente mostrate sullo schermo del pannello di controllo dove si crea il database e vi si assegnano le autorizzazioni utente per il database. <br>Ulteriore assistenza per queste informazioni, generalmente si ottengono consultando la documentazione di FAQ online del fornitore di hosting.");
define('TEXT_HELP_TITLE_DBUSER', 'Utente Database');
define('TEXT_HELP_CONTENT_DBUSER', "Qual è il nome utente MySQL utilizzato per connettersi al database? Un nome utente ad esempio è 'myusername_store'. <br>Per motivi di sicurezza PCI non si dovrebbe mai utilizzare 'root' per un server connesso a internet. <br><br>L'utente MySQL ha bisogno delle seguenti autorizzazioni: ALTER, CREATE, DELETE, DROP, INDEX, INSERT, LOCK TABLES, SELECT, UPDATE (o meglio 'Grant All').");
define('TEXT_HELP_TITLE_DBPASSWORD', 'Password Database');
define('TEXT_HELP_CONTENT_DBPASSWORD', "Questa è la password assegnata al utente MySQL creato per questo database.");
define('TEXT_HELP_TITLE_DBNAME', 'Nome Database');
define('TEXT_HELP_CONTENT_DBNAME', "Qual è il nome del database utilizzato per i dati? Un nome database ad esempio potrebbe essere 'zencart' o 'myaccount_zencart'. <br>Nota: è necessario creare questo database prima di procedere con l'installazione di Zen Cart®. <br>Generalmente è possibile predisporre un database MySQL utilizzando il pannello di controllo del provider di hosting.");
define('TEXT_HELP_TITLE_DEMODATA', TEXT_DATABASE_SETUP_LOAD_DEMO);
define('TEXT_HELP_CONTENT_DEMODATA', "Scegliando di caricare i dati Demo, si installerà un set base di prodotti e categorie, con articoli in vendita, in vetrina, in promozione, con varianti e altro ancora. Questi sono utili per provare e valutare come le varie combinazioni possano essere impostate e come possano apparire sul tua negozio online. <br><br>È ovviamente possibile poi eliminare i dati di demo (manualmente), oppure una volta testata la demo, si potrebbe eseguire nuovamente l'installazione e scegliere di non installare i dati demo e quindi ripartire con un sito completamente pulito per configurare il tuo negozio.");
define('TEXT_HELP_TITLE_DBCHARSET', 'Set caratteri database');
define('TEXT_HELP_CONTENT_DBCHARSET', "La maggior parte dei negozi utilizzerà UTF8. <br>Se non c'è un motivo specifico per scegliere altro è meglio utilizzare UTF8.");
define('TEXT_HELP_TITLE_DBPREFIX', 'Prefisso tabelle del database');
define('TEXT_HELP_CONTENT_DBPREFIX', "Qual è il prefisso da impostare per le tabelle di database? Esempio: <strong>zen_</strong> <br><strong class='alert'> Suggerimento: lasciare vuoto se non è necessario alcun prefisso.</strong> <br> È possibile utilizzare i prefissi per consentire a più di un'installazione di condividere lo stesso database.");
define('TEXT_HELP_TITLE_SQLCACHEMETHOD', 'Metodo Cache SQL');
define('TEXT_HELP_CONTENT_SQLCACHEMETHOD', "L'impostazione predefinita è 'none'. Alternative sono 'database' oppure 'file'. Se il server è veramente lento, utilizza 'none'. Se il tuo sito è moderatamente trafficato, utilizza 'database'. Se il tuo sito ha un traffico estremamente elevato, utilizza 'file'.");
define('TEXT_HELP_TITLE_SQLCACHEDIRECTORY', 'Cache Directory SQL');
define('TEXT_HELP_CONTENT_SQLCACHEDIRECTORY', "Immettere la directory da utilizzare per gestire la cache basata su file. Si tratta di una cartella/directory sul tuo server e le relative autorizzazioni devono essere impostate come 'scrivibile' affinché il server (ad esempio Apache) possa gestirne i file.");

define('TEXT_HELP_TITLE_ADMINUSER', 'Nominativo amministratore Superuser');
define('TEXT_HELP_CONTENT_ADMINUSER', "Questo sarà il nome utente principale utilizzato per gestire l'accesso amministrativo e tutti gli altri eventuali account utente admin. Avrà i privilegi illimitati.");
define('TEXT_HELP_TITLE_ADMINEMAIL', 'Indirizzo Email amministratore Superuser');
define('TEXT_HELP_CONTENT_ADMINEMAIL', "Questo indirizzo email sarà utilizzato per recuperare la password nel caso in cui si sia dimenticata.");
define('TEXT_HELP_TITLE_ADMINEMAIL2', 'Riscrivere indirizzo Email');
define('TEXT_HELP_CONTENT_ADMINEMAIL2', "Re-immettere l'indirizzo di posta elettronica. Questo solo per evitare accidentali errori di battitura.");
define('TEXT_HELP_TITLE_ADMINPASSWORD', 'Admin Superuser Password');
define('TEXT_HELP_CONTENT_ADMINPASSWORD', "RICORDA QUESTA PASSWORD!!! Questa è la password di default assegnata all\'utente amministratore appena definito. Potrebbe essere necessario modificarla al primo accesso (e sarà inoltre possibile personalizzarla al meglio). Sempre manualmente è possibile modificarla in qualsiasi momento nel pannello di amministrazione. <br><br><strong>Trascrivi questa PASSWORD, perché ti servirà per accedere al pannello di amministrazione!</strong>");
define('TEXT_HELP_TITLE_ADMINDIRECTORY', 'Pannello di amministrazione');
define('TEXT_HELP_CONTENT_ADMINDIRECTORY', "Si prova a rinominare la cartella di amministrazione in automatico, così da offrire un grado di sicurezza maggiore. Comprendiamo che questo non lo renda inviolabile ma comunque scoraggia eventuali visitatori non autorizzati da possibili tentativi. Si può ancora cambiare il nome della cartella autonomamente (basta rinominare la cartella in ciò che si desidera), utilizzando il un programma FTP oppure il File Manager, lo strumento fornito presente nel pannello di gestione file del hosting.");

define('TEXT_VERSION_CHECK_NEW_VER', 'Nuova Versione Disponibile v');
define('TEXT_VERSION_CHECK_NEW_PATCH', 'Nuova PATCH Disponibile: v');
define('TEXT_VERSION_CHECK_PATCH', 'patch');
define('TEXT_VERSION_CHECK_DOWNLOAD', 'Download Qui');
define('TEXT_VERSION_CHECK_CURRENT', 'La tua versione Zen Cart® è l\'ultima rilasciata.');
define('TEXT_ERROR_NEW_VERSION_AVAILABLE', '<a href="http://www.zen-cart.it/getit">È disponibile una NUOVA versione di Zen Cart®, che può essere scaricata da </a><a href="http://www.zen-cart.com" style="text-decoration:underline" target="_blank">www.zen-cart.com</a>');

define('TEXT_DB_VERSION_NOT_FOUND', 'Un database Zen Cart per %s non è stato trovato!');

define('REASON_TABLE_ALREADY_EXISTS','Impossibile creare la tabella %s perché esiste già.');
define('REASON_TABLE_DOESNT_EXIST','Impossibile eliminare la tabella %s perché non esiste.');
define('REASON_TABLE_NOT_FOUND','Impossibile eseguire perché la tabella %s non esiste.');
define('REASON_CONFIG_KEY_ALREADY_EXISTS','Non è possibile inserire configuration_key "%s" perché esiste già');
define('REASON_COLUMN_ALREADY_EXISTS','Non è possibile aggiungere la colonna %s perché esiste già.');
define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Impossibile eliminare la colonna %s perché non esiste.');
define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Impossibile modificare la colonna %s perché non esiste.');
define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Non è possibile inserire prod-type-layout configuration_key "%s" perché esiste già');
define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Impossibile eliminare indice %s della tabella %s perché non esiste.');
define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Impossibile eliminare la chiave primaria nella tabella %s perché non esiste.');
define('REASON_INDEX_ALREADY_EXISTS','Non è possibile aggiungere indice %s alla tabella %s perché esiste già.');
define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Impossibile aggiungere la chiave primaria per la tabella %s perché esiste già una chiave primaria.');

define('TEXT_HELP_TITLE_AGREETOTERMS', 'Accetto le Condizioni');
define('TEXT_HELP_CONTENT_AGREETOTERMS', "<a href='http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html' target='_blank'>Original GPL 2.0 text</a><h2>The GNU General Public License (GPL)</h2>

<h3>Version 2, June 1991</h3>

<tt>

<p> Copyright (C) 1989, 1991 Free Software Foundation, Inc.<br>
                       59 Temple Place, Suite 330, Boston, MA  02111-1307  USA</p>

<p> Everyone is permitted to copy and distribute verbatim copies<br>
 of this license document, but changing it is not allowed.</p>

    <strong><p>Preamble</p></strong>

  <p>The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.</p>

  <p>When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.</p>

<p>
  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.</p>

  <p>For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.</p>

  <p>We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.</p>

  <p>Also, for each author's protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors' reputations.</p>

  <p>Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone's free use or not licensed at all.</p>

  <p>The precise terms and conditions for copying, distribution and
modification follow.</p>

        <strong><p>TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION</p></strong>

  <p><strong>0</strong>. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The \"Program\", below,
refers to any such program or work, and a \"work based on the Program\"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term \"modification\".)  Each licensee is addressed as \"you\".</p>

<p>Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.</p>

  <p><strong>1</strong>. You may copy and distribute verbatim copies of the Program's
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.</p>

<p>You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.</p>

<p>  <strong>2</strong>. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:</p>

<blockquote>

    <p>a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.</p>

    <p>b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.</p>

    <p>c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)</p></blockquote>

<p>These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.</p>

<p>Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.</p>

<p>In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.</p>

  <p><strong>3</strong>. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:</p>
<blockquote>
    <p>a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,</p>

   <p> b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,</p>

    <p>c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)</p></blockquote>

<p>The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.</p>

<p>If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.</p>

  <p><strong>4</strong>. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.</p>

 <p> <strong>5</strong>. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.</p>

  <p><strong>6</strong>. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.</p>

  <p><strong>7</strong>. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.</p>

<p>If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.</p>

<p>It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.</p>
<p>

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.</p>

<p>  <strong>8</strong>. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.</p>
<p>
  <strong>9</strong>. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.</p>

<p>Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and \"any
later version\", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.</p>

  <p><strong>10</strong>. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.</p>

<p><strong>NO WARRANTY</strong></p>

  <p><strong>11</strong>. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM \"AS IS\" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.</p>

  <p><strong>12</strong>. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.</p>

         <p><strong>END OF TERMS AND CONDITIONS</strong></p>



<br>
<br>
<br>



<!-- START OF 'HOW TO APPLY' SECTION -->
<p>
<strong> How to Apply These Terms to Your New Programs</strong></p>

<p>  If you develop a new program, and you want it to be of the greatest
possible use to the public, the best way to achieve this is to make it
free software which everyone can redistribute and change under these terms.</p>

 <p> To do so, attach the following notices to the program.  It is safest
to attach them to the start of each source file to most effectively
convey the exclusion of warranty; and each file should have at least
the \"copyright\" line and a pointer to where the full notice is found.</p>


<blockquote>
    <p>one line to give the program's name and a brief idea of what it does.<br>
    Copyright (C) <year>  <name of author></p>

    <p>This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.</p>

  <p>  This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.</p>

    <p>You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA</p>
</blockquote>
<p>
Also add information on how to contact you by electronic and paper mail.</p>

<p>If the program is interactive, make it output a short notice like this
when it starts in an interactive mode:</p>

<blockquote>
   <p> Gnomovision version 69, Copyright (C) year name of author
    Gnomovision comes with ABSOLUTELY NO WARRANTY; for details type `show w'.
    This is free software, and you are welcome to redistribute it
    under certain conditions; type `show c' for details.</p>
</blockquote>

<p>The hypothetical commands `show w' and `show c' should show the appropriate
parts of the General Public License.  Of course, the commands you use may
be called something other than `show w' and `show c'; they could even be
mouse-clicks or menu items--whatever suits your program.</p>
<p>
You should also get your employer (if you work as a programmer) or your
school, if any, to sign a \"copyright disclaimer\" for the program, if
necessary.  Here is a sample; alter the names:</p>

<blockquote>
  <p>Yoyodyne, Inc., hereby disclaims all copyright interest <br>in the program
  `Gnomovision' (which makes passes at compilers)<br>written by James Hacker.</p>

  <p>signature of Ty Coon, 1 April 1989<br>
  Ty Coon, President of Vice</p>
  </blockquote>

<p>This General Public License does not permit incorporating your program into
proprietary programs.  If your program is a subroutine library, you may
consider it more useful to permit linking proprietary applications with the
library.  If this is what you want to do, use the GNU Library General
Public License instead of this License.</p>");
