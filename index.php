<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php ajax dischi</title>
  </head>
  <body>

    <div class="container">
    <?php { ?>
      <?php foreach ($database as $key => $cd): ?>
        <div class="music_box">
          <img src="<?php echo $cd["poster"] ?>" alt="poster cd">
          <h2> <?php echo $cd["title"] ?> </h2>
          <p> <?php echo $cd["author"] ?> </p>
          <span> <?php echo $cd["year"] ?> </span>          
        </div>
      <?php endforeach; ?>
    <?php } ?>
    </div>

  </body>
</html>
