$(document).ready(function() {


    $.ajax ({
        'url': 'database/lista_dischi.php',
        'method': 'GET',
        'success': function(data) {
            var dischi = data.response;
            // recupero la struttura html del template di base
            var template_html = $('#cds-container').html();
            // preparo la funzione da utilizzare per utilizzare il template
            var template_function = Handlebars.compile(template_html);
            for (var i = 0; i < dischi.length; i++) {
                var disco = dischi[i];
                console.log(disco);
                var dati_disco = {
                    'immagine': disco.poster,
                    'titolo': disco.title,
                    'autore': disco.author,
                    'genere': disco.genre,
                    'anno': disco.year
                }
                // tramite handlebars preparo l'html finale con i dati dello studente all'interno
                var html_finale = template_function(dati_disco);

                // appendo in pagina una card con i dati dello studente
                $('.cds-container').append(html_finale);
            }
        },
        'error': function() {
                console.log('si è verificato un errore');
        }
    });

});
