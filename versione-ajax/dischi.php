<?php include 'database/lista_dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi API</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
            <div id="cds-container">

            </div>
        <script id="cds-container "type="text/x-handlebars-tamplate">
            // clone js per handlebars
            <div class="cd">
             <img class="poster" src="{{immagine}}" alt="" >
             <span class="title"> {{titolo}} </span>
             <span class="author"> {{autore}} </span>
             <span class="genre"> {{genere}} </span>
             <span class="year"> {{anno}} </span>
         </div>
        </script>
        <script src="js/main.js"></script>
        </body>
</html>
