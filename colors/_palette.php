<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Palette | Kaldi Lab</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Font-awsome -->
      <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.css">
      <!-- Reset -->
      <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <!-- Spectrum -->
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
      <!-- LESS -->
      <link rel="stylesheet/less" type="text/css" href="_palette.less">
      <script>less = {env: 'production', compress: true};</script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/less/2.7.2/less.min.js"></script>
      <!-- jQuery -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Spectrum -->
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
      <!-- Script -->
      <script type="text/javascript" src="_palette.js"></script>
   </head>
   <body>
      <!-- Palette -->
      <div class="ls-palette">
         <?php include_once('_palette_map.php'); ?>
      </div>
      <!-- /Palette -->
   </body>
</html>