<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi API</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    </head>
    <body>
            <div class="cds-container">

            </div>
        <script id="template-dischi" type="text/x-handlebars-template">
            <!-- template dischi -->
                <div class="cd">
                    <img class="poster" src="{{immagine}}">
                    <span class="title"> {{titolo}} </span>
                    <span class="author"> {{autore}} </span>
                    <span class="genre"> {{genere}} </span>
                    <span class="year"> {{anno}} </span>
                </div>

        </script>

        <script src="js/main.js"></script>
        </body>
</html>
