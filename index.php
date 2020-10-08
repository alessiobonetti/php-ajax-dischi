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
      <div id="album_stamp" class="container">

      </div>
    </main>

  <!-- TEMPLATE -->
  <script id="album-template" type="text/x-handlebars-template">
    <div class="music_box">
      <img src="{{poster}}" alt="poster cd">
      <h2>{{title}}</h2>
      <p>{{author}}</p>
      <span>{{year}}</span>
    </div>
  </script>

  <!-- JS -->
  <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
