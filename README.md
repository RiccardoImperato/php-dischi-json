# PHP Dischi json

Web-app che legge un database e mostra in pagina una lista di album, con immagine di copertina, titolo, autore e anno di pubblicazione.

### Stack
Html, CSS, VueJS, axios, PHP

Il database presente nel file script.json, viene letto nel file server.php e i dati vengono convertiti per essere letti anche dal file index.js, dal quale viene effetuata la chiamata axios per recuparare le info degli album da mostrare in pagina.
Le card vengono ripetute per il numero di album presenti nel database con la direttiva v-for, e vengono popolate passandogli i valori delle chiavi image, title, artist e year.

