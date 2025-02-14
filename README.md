# Blog in PHP

Questo è un semplice blog creato con PHP, MySQL e CSS, che permette di visualizzare articoli e gestire contenuti dinamici.

## Caratteristiche
- Visualizzazione di articoli salvati in un database MySQL
- Layout responsivo con CSS, Flexbox e Media Queries
- Navbar fissa per una navigazione facile
- Aggiunta e rimozione di articoli (admin)

## Tecnologie Utilizzate
- **PHP** per la gestione dinamica dei contenuti
- **MySQL** per la memorizzazione dei dati
- **HTML/CSS** per il design e la struttura
- **Bootstrap** per il layout responsivo

## Installazione

1. Clona il repository o scarica i file.
2. Crea un database MySQL e importa il file `database.sql` per creare le tabelle necessarie.
3. Modifica le impostazioni di connessione al database nel file `config.php`.
4. Carica i file su un server che supporta PHP e MySQL (es. MAMP, XAMPP, cPanel).
5. Accedi al blog nel tuo browser per vedere gli articoli e gestire i contenuti.

## Funzionalità

### Visualizzazione Articoli
Gli articoli vengono visualizzati nella home page del blog. Ogni articolo ha un titolo, una descrizione breve e un link per visualizzare i dettagli completi.

### Aggiunta Articoli
L'admin può aggiungere nuovi articoli dal pannello di amministrazione, utilizzando un form che invia i dati al database.

### Rimozione Articoli
Gli articoli possono essere rimossi dal database tramite il pannello admin.

## Personalizzazione

Per personalizzare il blog:
- Modifica i file di template HTML per adattare il design alle tue preferenze.
- Modifica il codice PHP per aggiungere nuove funzionalità, come il sistema di commenti o l'integrazione con altre API.



