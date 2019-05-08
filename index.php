<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- GOOGLEFONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="paganti-template" type="text/x-handlebars-template">

      <div class="pagante" data-id="{{id}}">
        <div class="infos">{{id}}</div>
        <div class="infos nome">{{name}}</div>
        <div class="infos cognome">{{lastname}}</div>
        <div class="infos address">{{address}}</div>
        <div class="infos update">Modifica</div>
        <div class="infos delete">Elimina</div>

      </div>

    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="script.js">

    </script>
    <title>ospiti</title>
  </head>
  <body>

    <h1>Database paganti</h1>

    <div class="container">
      <div class="column-name">
        <span>id</span>
        <span>Nome</span>
        <span>Cognome</span>
        <span>Indirizzo</span>
        <span>Modifica</span>
        <span>Elimina</span>
      </div>
      <div class="list">

      </div>

    </div>

  </body>
</html>
