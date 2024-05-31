<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layouts</title>
  </head>
  <body>
    @section('menu')
        Contenido del menu
    @show

    <div class="container">
        @yield('content')
    </div>
  </body>
</html>