<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>DreamScape | @yield("title") </title>

    @vite(['node_modules/bootstrap/scss/bootstrap.scss'])
    @vite(['resources/css/app.css'])
    @vite(['node_modules/bootstrap/dist/js/bootstrap.js'])

    <link rel="shortcut icon" href="./img/palmera.png" type="image/x-icon">

  </head>
  <body @yield("custom_attributes",'')>

    @yield("content")

    
  </body>
</html>
