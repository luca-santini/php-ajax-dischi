<?php include 'database/lista_dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Dischi API</title>
    </head>
    <body>
           <div class="cds-container">

                <?php  foreach ($dischi as $disco) { ?>
                    <div class="cd">
                        <img  src="<?php echo $disco['poster']; ?>">
                        <span> <?php echo $disco['title']; ?></span>
                        <span> <?php echo $disco['author']; ?></span>
                        <span> <?php echo $disco['genre']; ?></span>
                        <span> <?php echo $disco['year']; ?></span>
                    </div>
                    <?php } ?>
            </div>

    </body>
</html>
