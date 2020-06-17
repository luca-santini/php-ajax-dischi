<?php include 'database/lista_dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi API</title>
    </head>
    <body>
           <div id="dischi">

                <?php  foreach ($dischi as $disco) { ?>
                    <div class="disco">
                        <img  src="<?php echo $disco['poster']; ?>">
                        <p>Titolo: <?php echo $disco['title']; ?></p>
                        <p>Autore: <?php echo $disco['author']; ?></p>
                        <p>Genere: <?php echo $disco['genre']; ?></p>
                        <p>Anno: <?php echo $disco['year']; ?></p><hr>
                    </div>
                    <?php } ?>
            </div>

    </body>
</html>
