Zen Cart&reg; - L'arte dell'e-commerce
===============

Zen Cart&reg; è stata la prima applicazione web Open Source ad essere completamente certificata PA-DSS.

La versione 1.5.5 prosegue la tradizione ed è un aggiornamto risolutivo per diversi bugfix che correggono la PA-DSS Certified version 1.5.4. 

Zen Cart&reg; è un software gratuito con supporto gratuito disponibile 24/7 da una community Zen-Cart® nel forum di supporto del sito a <http://www.zen-cart.it/forum/>

--------------------


Zen Cart&reg; v1.5.5
--------------------

Compatibilità
-------------
Zen Cart v1.5.5 è stato progettato per:
  * PHP 5.6 e PHP 7.0 (ma è compatibile sino al 5.2.10)
  * Apache 2.2 (e 2.4 con access_compat mod installato per supportare delle regole personalizzata nel .htaccess)
  * MySQL 5.1 a 5.7

Installazione
------------

L'installazione:

1. [Scarica Zen Cart&reg;](http://sourceforge.net/projects/zencart-italia/files)
2. Assicurarsi di verificare che l'hash MD5/SHA1 dello Zip corrisponda a quello postato pubblico.
  * I valori MD5/SHA1 per verificare lo zip di Sourceforge vengono visualizzati in [sito Zen Cart&reg;]  (http://www.zen-cart.it/) insieme alle [istruzioni su come verificare il file utilizzando i valori di hash]  (http://www.zen-cart.com/content.php?305).
3. Decomprimere il file zip scaricato
4. Tutto all'interno della cartella decompressa deve essere caricato nel server... 
   ad esempio in public_html o www o la cartella html (la cartella già presente sul vostro server web)
5. Nel browser, digitare l'indirizzo del tuo sito, come ad esempio: www.your_site.com (o se hai caricato in un altra cartella www.your_site.com/nomecartella)
6. Rinominare i file /includes/dist-configure.php e /admin/includes/dist-configure.php in "configure.php" e rendere i file scrivibili (in modo che il processo di installazione possa scriverne le informazioni di configurazione dopo che avrai risposto alle richieste nei vari passaggi).
7. Rendere anche le cartelle /cache e /logs scrivibili. (Verrà richiesto di rendere le cartelle scrivibili durante l'installazione) 
8. Seguire le istruzioni visualizzate nel browser per l'installazione. 

Questa è la versione abbreviata delle istruzioni di installazione!

Per istruzioni molto più dettagliata di installazione, vedere il file [/docs/1.readme_installation.html]  (http://www.zen-cart.com/docs/1.readme_installation.html) nel tuoi file Zen Cart.


# Procedura aggiornamento versione italiana #

 - - Il metodo per aggiornare uno Zen Cart versione ITA che invitiamo a seguire è - -

1. installare la nuova versione in una cartella "/-NUOVO"
2. copiare e riportare dati, file di lingua modificati, immagini ecc. fra i due store, "vecchio" e "nuovo".
3. esportare & importare fra i due database i clienti con indirizzi ed ordini;
4. proseguire con tutta la parte del catalogo composta da categorie, articoli, attributi ecc;
5. comparando i due database sarà semplice vedere cosa c'è e cosa manca da trasferire.
6. verificare i dati / la sincronia fra i due store e testare tutto il nuovo ambiente.
7. sostituire i due store fra loro modificando dati e percorsi nei due file di configurazione e nel DB
(per il percorso della cache); Il vecchio spostandone i file entro una cartella /_OLD ed il nuovo
alzando i file dalla cartella "/-NUOVO" nella root o dove scelto.

**Nota**: per ottenere una perfetta sincronia dei dati dal punto 3 in poi sarà necessario **porre in manutenzione** lo store “vecchio” così da evitare la perdita di registrazioni / ordini, per il tempo necessario a concludere le operazioni dei restanti punti.
Se nel “vecchio” store sono (stati installati e sono) presenti moduli che hanno aggiunto voci alle tabelle di categoria, articoli ecc. detti moduli (aggiornati all'attuale versione) dovranno essere installati anche nella nuova 1.5 prima del trasferimento dei dati stessi così fra i due database da avere lo stesso numero di campi presenti e non ottenere errori.

*Per aggiornare la versione USA la procedura può essere differente e si rimanda alla documentazione allegata a quella distribuzione. La procedura indicata NON è comunque valida per aggiornamenti fra versioni linguistiche diverse.

# PROSSIMI PASSI #
Per **SICUREZZA** devi cambiare i permessi di scrittura, in sola lettura dei files configure.php posti in /admin/includes/ ed /includes/ prima di aprire il negozio al pubblico! Inoltre sarebbe opportuno rimuovere (invece che rinominare) la cartella /zc_install per evitare tentativi di re-installazione non autorizzati!

Dei segnali di **ATTENZIONE** saranno attivi fino a quando non saranno stati effettuati questi interventi.

## CONFIGURAZIONE ##
Con questa versione sono inserite nel negozio delle pagine di spiegazione passo passo, in ogni modo ti
invitiamo a leggere le **FAQ** - Domande Frequenti i **Manuali** e seguire il **Forum** di supporto al fine di configurare prima e predisporre dopo il tuo negozio nella maniera migliore e più veloce. Per domande, chiarimenti e supporto questo è il posto giusto, abbiamo un potente motore di ricerca per termini chiave, utilizzalo! E' molto importante che tu prenda visione della Documentazione posta nella cartella /docs presente nel tuo Sito.

## IMPORTANTE ##
Lo strumento più potente per la completa gestione e personalizzazione del TUO Sito è il **Developers Tool Kit**, posto nel Pannello di Amministrazione, in Strumenti. Sarà possibile usarlo per cercare quasi qualche cosa che potrà essere adattata o sostituita, in particolare il testo visualizzato sul Sito.
Per diventare esperti nella modifica o creazione di template, prendete visione di FAQ, articoli e manualistica presente nel Nostro Sito di supporto: [www.zen-cart.it](http://www.zen-cart.it).

## INFINE ##
In [www.zen-cart.com](http://www.zen-cart.com) oltre a trovare informazioni e supporto nel forum, vi è una sezione denominata Downloads. Al cui interno è posta una categoria 'Documentation', che contiene le ultime versioni di manuali e documentazione in Inglese per conoscere a fondo vari aspetti riguardanti funzionalità ed aspetti gestionali del tuo negozio.

Ulteriori informazioni e dettagli nelle F.A.Q. del Sito [www.zen-cart.it](http://www.zen-cart.com)

> Siamo felici che TU abbia scelto il sistema E-commerce Zen Cart. Ricorda che il Progetto fatto di questa distribuzione, il sito che la mantiene, la documentazione ed il forum di supporto vive grazie alla TUA DONAZIONE


PCI/PA-DSS Compliance
---------------------
__The [Implementation Guide](http://www.zen-cart.com/docs/implementation-guide-v155.pdf) should be followed for PCI Compliant implementation.__ Che il tuo sito necessiti o meno della conformità PCI non sta a te decidere, ma dovresti comunque seguirne i principi per massimizzare la resilienza del tuo sito contro il fastidioso accesso tentato da visitatori indesiderati o non autorizzati.

Documentazione
-------------
Usando il browser apri il file [/docs/index.html](http://www.zen-cart.com/docs/index.html) pagina per i link alla documentazione e la [Guida di implementazione](http://www.zen-cart.com/docs/implementation-guide-v155.pdf).

Developer Documentation
-----------------------
Developers wishing to contribute to the Zen Cart&reg; core code may fork the [zencart/zc-v1-series](https://github.com/zencart/zc-v1-series) repository on github and issue Pull Requests from their own feature branches. For detailed help on using github, forking, branching, and contributing see [Contributing to Zen Cart code](http://docs.zen-cart.com/Contributing/).

Visit [docs.zen-cart.com](http://docs.zen-cart.com/Developer_Documentation/v1.5.5/) for v1.5.5-specific guidance on issues relevant to developers. This documentation site is very new, but content will be added over time.

Developers will find the standalone [Habitat VM](http://docs.zen-cart.com/Habitat/main) to be a useful tool for staging site upgrades and doing offline feature development or testing. Designers may like it for testing new templates without affecting the live site.

Supporto
-------
Per assistenza gratuita, visitare il nostro sito di supporto: 
USA - http://www.zen-cart.com/forum.php
ITALIA - http://www.zen-cart.it/forum/

Seguici
---------
Per rimanere aggiornato su sicurezza e strumenti dedicati segui i ns canali [Twitter](http://twitter.com/zencartitalia) and [Facebook](http://facebook.com/zencartitalia)

Considerare SEMPRE una DONAZIONE al TEAM U.S.A.
(https://www.zen-cart.com/content.php?6-donate)
Per supportare e contribuire il Progetto Zen-Cart

&nbsp;  

*&copy;Copyright 2003-2016, Zen Cart&reg;. All rights reserved.*

