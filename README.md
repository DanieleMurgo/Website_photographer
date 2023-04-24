https://xd.adobe.com/view/e31fa57e-04bf-4182-add5-b44b894c1f90-b64c/screen/83416335-ac10-410c-9637-6a4307af98bd/
<!-- DONE Eliminare masthead e inserire immagine come sfondo dell'header -->
<!-- DONE Creare database e automatizzare visualizzazione e contenuti -->
<!-- DONE pagina amministratore caricamento o modifica immagini -->
<!-- DONE pagina amministratore creazione nuovo progetto con contenuti -->
<!-- TODO pagina amministratore aggiungi/modifica lista clienti-->
<!-- TODO definire pannello per la gestione dei workers nella sezione admin -->

projects: nella tabella dei progetti togliere bordo e inserire sfondo leggermente più scuro del bianco con ombra
accordion nella sezione about us

Per aumentare il limite massimo di peso delle immagini è necessario modificare le impostazioni nel file php.ini
upload_max_filesize = 50M
memory_limit = 512M
max_input_time = -1
max_execution_time = 0
post_max_size = 15M

per l'esecuzione dei job
memory_limit = 1024M

Per comprimere le immagini è necessario utilizzare Intervention image
https://www.itsolutionstuff.com/post/laravel-compress-image-before-upload-exampleexample.html

# Website_photographer
