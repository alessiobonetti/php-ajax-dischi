<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>php ajax dischi</title>
  </head>
  <body>
    <header>
      <div class="header_bar container">
        <div class="header_logo">
          <img src="img/logo.png" alt="logo">

        </div>

      </div>

    </header>
    <main>
      <div class="container">
        <?php if(!empty($database)) {?>

            <?php foreach ($database as $key => $cd): ?>
              <div class="music_box">
                <img src="<?php echo $cd["poster"] ?>" alt="poster cd">
                <h2> <?php echo $cd["title"] ?> </h2>
                <p> <?php echo $cd["author"] ?> </p>
                <span> <?php echo $cd["year"] ?> </span>
              </div>
            <?php endforeach; ?>
        <?php } ?>
      <?php else { ?>    
        <h2>Nessun CD</h2>
      <?php } ?>
      </div>
    </main>

  </body>
</html>
