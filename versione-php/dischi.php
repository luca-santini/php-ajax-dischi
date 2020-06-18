<?php include 'database/lista_dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Dischi API</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>

           <div class="cds-container">
                <?php  foreach ($dischi as $disco) { ?>
                    <div class="cd">
                        <img  src="<?php echo $disco['poster']; ?>">
                        <span class="dati-disco"> <?php echo $disco['title']; ?></span>
                        <span class="dati-disco"> <?php echo $disco['author']; ?></span>
                        <span class="dati-disco"> <?php echo $disco['genre']; ?></span>
                        <span class="dati-disco"> <?php echo $disco['year']; ?></span>
                    </div>
                    <?php } ?>
            </div>
            <script src="js/main.js"></script>


    </body>
</html>
