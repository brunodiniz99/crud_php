 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--Import bulma css -->
   <link rel="stylesheet" href="css/bulma.min.css" />
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <script type="text/javascript">
     function formatar_mascara(src, mascara) {
       var campo = src.value.length;
       var saida = mascara.substring(0, 1);
       var texto = mascara.substring(campo);
       if (texto.substring(0, 1) != saida) {
         src.value += texto.substring(0, 1);
       }
     }
   </script>

 </head>

 <body>
   <?php
    // navbar
    include_once 'navbar.php';
    ?>