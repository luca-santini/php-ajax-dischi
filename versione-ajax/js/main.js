$(document).ready(function() {
    // recupero la struttura html del template di base
    var template_html = $('#template-dischi').html();
    // preparo la funzione da utilizzare per utilizzare il template
    var template_function = Handlebars.compile(template_html);

    $.ajax ({
        'url': 'database/lista_dischi.php',
        'method': 'GET',
        'success': function(data) {
            var dischi = data;


            for (var i = 0; i < dischi.length; i++) {
                disegna_card(dischi[i])
                // var disco = dischi[i];
                // console.log(disco);
                // var dati_disco = {
                //     'immagine': disco.poster,
                //     'titolo': disco.title,
                //     'autore': disco.author,
                //     'genere': disco.genre,
                //     'anno': disco.year
                // }
                // // tramite handlebars preparo l'html finale con i dati dei dischi
                // var html_finale = template_function(dati_disco);
                //
                // // appendo in pagina i dati dei dischi
                // $('.cds-container').append(html_finale);
            }
        },
        'error': function() {
                console.log('si è verificato un errore');
        }
    });
        function disegna_card(disco) {
        // recupero le informazioni del disco, leggendo le proprietà dell'oggetto
        var titolo = disco.title;
        var autore = disco.author;
        var anno = disco.year;
        var immagine = disco.poster;
        var genere = disco.genre;

        // preparo i placeholder per il template
        var context = {
            'immagine': immagine,
            'titolo': titolo,
            'autore': autore,
            'anno': anno,
            'genere': genere
        };
        // compilo il template con i placeholder
        var html = template_function(context);
        // appendo la card per questo disco
        $('.cds-container').append(html);
    }

});
